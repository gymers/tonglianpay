<?php

namespace Gymers\TonglianPay\Responses;

class Response1096 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 户名
    */
    public $hld_name = '';

    /**
     * @var string 账户类别
    */
    public $acct_level_type = '';

    /**
     * @var string 账号
    */
    public $acct_num = '';

    /**
     * @var string 证件类型
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
    */
    public $cer_num = '';

    /**
     * @var string 手机号码
    */
    public $tel_num = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
