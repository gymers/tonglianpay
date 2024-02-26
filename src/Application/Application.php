<?php

namespace Gymers\TonglianPay\Application;

use GuzzleHttp\Client;
use Gymers\TonglianPay\Requests\Request;
use Gymers\TonglianPay\Responses\Response;
use Gymers\TonglianPay\Utils\DecryptUtil;
use Gymers\TonglianPay\Utils\EncryptUtil;
use Gymers\TonglianPay\Utils\LogUtil;
use Gymers\TonglianPay\Utils\SignUtil;
use Gymers\TonglianPay\Utils\XmlUtil;

class Application
{
    public $config;

    public $PABankSDK;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function request(string $uri, object $request)
    {
        $class = get_class($request);
        $class = substr($class, strrpos($class, "\\") + 1);

        if (strpos($class, Request::PREFIX) === false) {
            $request->inst_id = $this->config->inst_id;
            $request = Request::signCode($this->config, $request);
            $content = (array) $request;
        } else {
            $processing_code = str_replace(Request::PREFIX, '', $class);
            $sign_code = SignUtil::getSignCode($this->config, $processing_code, (array) $request);
            $head = SignUtil::getHead($processing_code, $this->config->inst_id, $sign_code);
            $data = [
                'head' => $head,
                'request' => $request,
            ];
            $data = XmlUtil::arrayToXml($data);
            $data = iconv('GBK', 'UTF-8//IGNORE', $data);
            LogUtil::info($this->config->log_path, '通联request:', [str_replace("\n", "", $data)]);
            $content = $this->handleRequest($data);
        }

        $client = new Client();
        $response = $client->request(
            'POST',
            $uri,
            [
                'headers' => ['content-type' => 'application/x-www-form-urlencoded'],
                'form_params' => $content,
            ]
        );

        $response = $response->getBody()->getContents();

        if (strpos($class, Request::PREFIX) === false) {
            return $response;
        }
        return $this->handleReponse($response);
    }

    /**
     * 组装request
     * @param string $data
     * @return mixed
    */
    private function handleRequest($data)
    {
        $encryptedText = base64_encode(EncryptUtil::des($data, $this->config->random_number));
        $encryptedKey = base64_encode(EncryptUtil::publicKey($this->config->public_key_path, $this->config->random_number));

        $str = '<STSPackage>';
        $str .= '<EncryptedText>' . $encryptedText . '</EncryptedText>';
        $str .= '<KeyInfo>';
        $str .= '<ReceiverX509CertSN>' . $this->config->serial_number . '</ReceiverX509CertSN>';
        $str .= '<EncryptedKey>' . $encryptedKey . '</EncryptedKey>';
        $str .= '</KeyInfo>';
        $str .= '</STSPackage>';

        return ['msgPlain' => base64_encode($str)];
    }

    /**
     * 解析response
     * @param string $response
     * @return mixed
    */
    public function handleReponse(string $response)
    {
        if (0 === strpos($response, Response::NOTIFY_PREFIX)) {
            $response = str_replace(Response::NOTIFY_PREFIX, '', urldecode($response));
        }

        $response = base64_decode($response);

        $response = str_replace('<STSPackage><EncryptedText>', '', $response);
        $response = str_replace('</EncryptedText>', ',', $response);
        $response = str_replace('<KeyInfo><ReceiverX509CertSN>', '', $response);
        $response = str_replace('</ReceiverX509CertSN><EncryptedKey>', ',', $response);
        $response = str_replace('</EncryptedKey></KeyInfo></STSPackage>', '', $response);
        $response = explode(',', $response);
        $encryptedText = $response[0];
        $receiverX509CertSN = $response[1];
        $encryptedKey = $response[2];

        if ($this->config->platform_serial_number != $receiverX509CertSN) {
            throw new \Exception('序列号不匹配', 401);
        }

        $encryptedKey = DecryptUtil::privateKey(base64_decode($encryptedKey), $this->config->private_key_path, $this->config->private_key_password);

        $response = DecryptUtil::des(base64_decode($encryptedText), $encryptedKey);

        $length = stripos($response, '</transaction>');
        $encryptedText = substr($response, 0, $length) . '</transaction>';
        LogUtil::info($this->config->log_path, '通联response:', [str_replace("\n", "", $encryptedText)]);

        $response = XmlUtil::xmlToArray(iconv('UTF-8', 'GBK//IGNORE', $encryptedText));

        $sign_code = $response['head']['sign_code'];
        $data = str_replace('<sign_code>' . $sign_code . '</sign_code>', '', $encryptedText);

        $checkSign = SignUtil::checkSign($data, base64_decode($sign_code), $this->config->public_key_path);
        if (!$checkSign) {
            throw new \Exception('验签失败', 401);
        }

        return $response['response'];
    }
}
