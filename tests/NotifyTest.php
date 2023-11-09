<?php

namespace Gymers\Tests;

use Gymers\TonglianPay\TonglianPay;
use PHPUnit\Framework\TestCase;

/**
 * 回调解析测试
*/
class NotifyTest extends TestCase
{
    public function testNotify()
    {
        $config = [
            'inst_id' => '', // 机构编码
            'public_key_path' => '', // 公钥证书路径
            'private_key_path' => '', // 私钥证书路径
            'private_key_password' => '', // 私钥证书密码
            'random_number' => '', // 24位随机数
            'serial_number' => '', // 通联公钥序列号
            'platform_serial_number' => '', // 平台序列号
            'log_path' => '/logs/tonglian.log', // 日志文件
        ];

        $response = 'repMsg=**********';

        $response = TonglianPay::config($config)->handleReponse($response);

        $this->assertArrayHasKey('resp_code', $response, json_encode($response));
    }
}
