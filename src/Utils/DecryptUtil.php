<?php
namespace Gymers\TonglianPay\Utils;

class DecryptUtil
{
    /**
     * des解密
     * @param string $data 将被解密的密文
     * @param string $passphrase 密钥
     * @return mixed
    */
    public static  function des(string $data, string $passphrase)
    {
        return openssl_decrypt($data, 'DES-EDE3', $passphrase, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, '');
    }

    /**
     * 私钥解密
     * @param string $data 将被解密的密文
     * @param string $private_key_path 私钥证书路径
     * @param string $private_key_password 私钥证书密码
    */
    public static function privateKey(string $data, string $private_key_path, string $private_key_password)
    {
        $certs = [];
        $private_key = file_get_contents($private_key_path);
        openssl_pkcs12_read($private_key, $certs, $private_key_password);

        $decrypted_data = '';
        openssl_private_decrypt($data, $decrypted_data, $certs['pkey']); // 私钥解密

        return $decrypted_data;
    }
}