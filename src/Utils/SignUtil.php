<?php

namespace Gymers\TonglianPay\Utils;

use Gymers\TonglianPay\Application\Config;

class SignUtil
{
    /**
     * 生成签名.
     *
     * @param string $data 待加密数据
     *
     * @return mixed
     */
    public static function getSignCode(Config $config, string $processing_code, array $request)
    {
        $head = self::getHead($processing_code, $config->inst_id);
        $data = [
            'head' => $head,
            'request' => $request,
        ];
        $data = XmlUtil::arrayToXml($data);
        $data = iconv('GBK', 'UTF-8//IGNORE', $data);

        return self::getSign($config, $data);
    }

    /**
     * RSA签名
    */
    public static function getSign(Config $config, string $data)
    {
        $signature = '';
        $pkcs12 = file_get_contents($config->private_key_path);
        openssl_pkcs12_read($pkcs12, $certificates, $config->private_key_password);
        openssl_sign($data, $signature, $certificates['pkey']);

        return base64_encode($signature);
    }

    /**
     * 报文头head.
     *
     * @param string $processing_code 交易类型 4位接口编码
     * @param string $inst_id 机构代码
     * @param string $sign_code       签名
     */
    public static function getHead(string $processing_code, string $inst_id, string $sign_code = '')
    {
        $data = [
            'processing_code' => $processing_code,
            'inst_id' => $inst_id,
            'trans_date' => date('Ymd'),
            'trans_time' => date('His'),
            'ver_num' => '1.00',
        ];

        if (!empty($sign_code)) {
            $data['sign_code'] = $sign_code;
        }

        return $data;
    }

    /**
     * 校验签名
     * @param string $data 将被校验的数据
     * @param string $sign 签名
     * @param string $public_key_path 公钥证书路径
    */
    public static function checkSign(string $data, string $sign, string $public_key_path)
    {
        $public_key = file_get_contents($public_key_path);
        $public_key = openssl_get_publickey($public_key);

        return openssl_verify($data, $sign, $public_key, OPENSSL_ALGO_SHA1);
    }
}
