<?php

namespace Gymers\TonglianPay\Responses;

class Response3023 extends Response
{
    /**
     * @var string 渠道号
     * 返回码为 0000 时有返回
    */
    public $channel_no = '';

    /**
     * @var string 对应类型平台商户或供应商号
     * 返回码为 0000 时有返回
    */
    public $channel_mcht_no = '';

    /**
     * @var string 错误信息
     * 返回码为 0000 时有返回
    */
    public $audit_msg = '';

    /**
     * @var string 微信认证状态
     * 0 已认证
     * 1 未认证
     * 返回码为 0000 时有返回
    */
    public $verify_status = '';
}
