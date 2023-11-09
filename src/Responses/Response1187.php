<?php

namespace Gymers\TonglianPay\Responses;

class Response1187 extends Response
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
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账号
    */
    public $acct_num = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
