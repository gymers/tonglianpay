<?php

namespace Gymers\TonglianPay\Responses;

class Response2095 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 原申请方交易流水号
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原申请交易通联流水号
    */
    public $org_resp_trace_num = '';

    /**
     * @var string 原交易日期
    */
    public $org_trans_date = '';

    /**
     * @var string 支付模式
    */
    public $pay_mode = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账号
    */
    public $acct_num = '';

    /**
     * @var string 交易币种
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
    */
    public $amt_tran = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
