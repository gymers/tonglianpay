<?php

namespace Gymers\TonglianPay\Utils;

class EncryptUtil
{
    /**
     * des加密
     * @param string $data 待加密数据
     * @param string $passphrase 口令
     * @param int $length 
     * @return mixed
    */
    public static function des(string $data, string $passphrase, int $length = 8)
    {
        $pad = $length - (strlen($data) % $length);
        $desStr = $data.str_repeat(chr($pad), $pad);
        if (strlen($desStr) % $length) {
            $desStr = str_pad($desStr, strlen($desStr) + $length - strlen($desStr) % $length, "\0");
        }

        return openssl_encrypt($desStr, 'DES-EDE3', $passphrase, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, '');
    }

    /**
     * 公钥加密
     * @param string $public_key_path 公钥文件路径
     * @param string $passphrase 口令
     * @return mixed
    */
    public static function publicKey(string $public_key_path, string $passphrase)
    {
        $encrypted_data = '';
        $public_key = file_get_contents($public_key_path);
        openssl_public_encrypt($passphrase, $encrypted_data, $public_key);

        return $encrypted_data;
    }
}