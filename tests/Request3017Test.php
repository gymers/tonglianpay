<?php

namespace Gymers\Tests;

use Gymers\TonglianPay\Requests\Request3017;
use Gymers\TonglianPay\TonglianPay;
use PHPUnit\Framework\TestCase;

/**
 * 商户进件状态查询测试
*/
class Request3017Test extends TestCase
{
    public function testRequest3017()
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

        $request = new Request3017();
        $request->req_trace_num = '';
        $request->mcht_no = '';

        $response = TonglianPay::config($config)->request('https://wanzhengtong.allinpay.com/ccdp-acquire-web/service/acquireAction.action', $request);
        $this->assertArrayHasKey('resp_code', $response, json_encode($response));
    }
}
