<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 电子签约状态查询
 *
 * 接收机构发起的电子签约状态查询申请，生态圈对商户的协议签约状态进行查询，目前支持对通联业务协议进行查询。
*/
class Request3020 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 协议类型
     * M 1~10 TLBA 表示通联业务协议
    */
    public $elect_sign_type = '';
}
