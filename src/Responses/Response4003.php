<?php

namespace Gymers\TonglianPay\Responses;

class Response4003 extends Response
{
    /**
     * @var string 平台商户/供应商编码
    */
    public $mcht_no = '';

    /**
     * @var string 通知类型
     * electsign：电子签约结果通知
    */
    public $notify_type = '';

    /**
     * @var string 签约类型
     * TLBA 表示通联业务协议
    */
    public $sign_type = '';

    /**
     * @var string 签约结果
     * 0-签约成功
     * 1-签约失败
    */
    public $sign_result = '';

    /**
     * @var string 签约失败错误信息
    */
    public $audit_msg = '';
}
