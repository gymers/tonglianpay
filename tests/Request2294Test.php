<?php

namespace Gymers\Tests;

use Gymers\TonglianPay\Requests\Request2294;
use Gymers\TonglianPay\TonglianPay;
use PHPUnit\Framework\TestCase;

/**
 * 还款交易
*/
class Request2294Test extends TestCase
{
    public function testRequest2294()
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

        $request = new Request2294();
        $request->req_trace_num = '';
        $request->repayment_type = '7';
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
        ]]);
        $request->org_req_trace_num = '';
        $request->org_trans_date = '';
        $request->org_resp_trace_num = '';
        $request->prod_import_flag = '0';
        $request->resp_url = '';

        $response = TonglianPay::config($config)->request('https://wanzhengtong.allinpay.com/AppStsWeb/service/acquireAction.action', $request);
        $this->assertArrayHasKey('resp_code', $response, json_encode($response));
    }
}
