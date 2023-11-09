<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 电子协议重发
 *
 * 接收机构发起的电子协议重发申请，生态圈收到成功后会推送签约短信进行重新签约。
*/
class Request3021 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';
}
