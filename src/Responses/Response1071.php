<?php

namespace Gymers\TonglianPay\Responses;

class Response1071 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 手机号码
    */
    public $tel_num = '';

    /**
     * @var string 个人所属角色
    */
    public $transactor_flag = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
