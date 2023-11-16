<?php

namespace Gymers\Tests;

use Gymers\TonglianPay\Requests\Request2085;
use Gymers\TonglianPay\TonglianPay;
use PHPUnit\Framework\TestCase;

/**
 * 购买交易测试
*/
class Request2085Test extends TestCase
{
    public function testRequest2085()
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

        $request = new Request2085();
        $request->req_trace_num = '';
        $request->purchase_type = '4';
        $request->pay_mode = 'K';
        $request->bnk_id = 'W';
        $request->cur_type = '156';
        $request->pay_amount = '';
        $request->sep_detail = json_encode([[
            'sep_no' => '',
            'sep_acct_type' => '',
            'sep_merch_code' => '',
            'sep_bank_id' => '',
            'sep_acct_num' => '',
            'sep_pay_amount' => '',
            'product_name' => '',
        ]]);
        $request->order_valid_time = '';
        $request->pay_auth_code = '';
        $request->mcht_no = '';
        $request->prod_import_flag = '0';
        $request->order_num = '';
        $request->resp_url = '';


        $response = TonglianPay::config($config)->request('https://wanzhengtong.allinpay.com/AppStsWeb/service/acquireAction.action', $request);
        $this->assertArrayHasKey('resp_code', $response, json_encode($response));
    }
}
