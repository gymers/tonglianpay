<?php

namespace Gymers\TonglianPay\Responses;

class Response1184 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 主交易子账号
    */
    public $acct_sub_no = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 供应商编码
    */
    public $supply_inst_code = '';

    /**
     * @var string 增开的子交易子账户
     * 增开成功返回
    */
    public $sub_acct_sub_no = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
