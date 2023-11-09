<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 账户实名
 *
 * 生态圈接收机构账户实名申请，机构上送非实名账户的实名要素，生态圈发往渠道验证实名要素准确性。后续可通过该账户进行充值、消费等
*/
class Request1081 extends Request
{
    /**
     * @var string 交易子账号
     * M 17
    */
    public $acct_sub_no = '';

    /**
     * @var string 姓名
     * M 2~80
    */
    public $real_name = '';

    /**
     * @var string 证件类型
     * M 2 01：身份证 14：营业执照
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * M 1~20
    */
    public $cer_num = '';

    /**
     * @var string ip地址
     * O 7~15
    */
    public $ip_addr = '';
}
