<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 非实名开户
 *
 * 生态圈接收机构非实名开户申请，机构上送自己系统内的客户 ID 作为开户账户的唯一身份标识，生态圈开户成功后返回机构账户。后续可通过该账户进行充值、消费等
*/
class Request1080 extends Request
{
    /**
     * @var string 客户ID
     * M 1~30 客户在机构系统的唯一身份ID
    */
    public $cus_id = '';

    /**
     * @var string 手机号码
     * C 11 非必填
    */
    public $tel_num = '';

    /**
     * @var string ip地址
     * O 7~15
    */
    public $ip_addr = '';
}
