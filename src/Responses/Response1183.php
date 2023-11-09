<?php

namespace Gymers\TonglianPay\Responses;

class Response1183 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 供应商编码
    */
    public $supply_inst_code = '';

    /**
     * @var string 交易子账号
    */
    public $acct_sub_no = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
