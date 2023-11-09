<?php

namespace Gymers\TonglianPay\Responses;

class Response1081 extends Response
{
    /**
     * @var string 交易子账号
    */
    public $acct_sub_no = '';

    /**
     * @var string 姓名
    */
    public $real_name = '';

    /**
     * @var string 证件类型
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
    */
    public $cer_num = '';

    /**
     * @var string 通联会员号
     * 实名成功返回，需机构存储记录，该会员号为客户在生态圈唯一标识
    */
    public $sign_num = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
