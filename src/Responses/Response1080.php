<?php

namespace Gymers\TonglianPay\Responses;

class Response1080 extends Response
{
    /**
     * @var string 客户ID
     * 客户在机构系统的唯一身份ID
    */
    public $cus_id = '';

    /**
     * @var string 手机号码
    */
    public $tel_num = '';

    /**
     * @var string 交易子账号
     * 开户成功返回，需机构存储记录
    */
    public $acct_sub_no = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
