<?php

namespace Gymers\TonglianPay\Responses;

class Response3010 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 原交易编码
     * 原交易processing_code
    */
    public $org_processing_code = '';

    /**
     * @var string 原交易流水号
     * 原交易 req_trace_num
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原交易日期
     * 原交易 trans_date
    */
    public $org_trans_date = '';

    /**
     * @var string 通联会员号
     * 1) 开户交易成功时返回
     * 2) 换卡交易成功后返回，与原会员号一致
    */
    public $sign_num = '';

    /**
     * @var string 交易子账号
    */
    public $acct_sub_no = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
