<?php

namespace Gymers\TonglianPay\Responses;

class Response3020 extends Response
{
    /**
     * @var string 协议状态
     * 0：成功
     * 1：失败
     * 2：签约中
     * 4：签约失效
     * 9：未签约
     * 返回码为 0000 时有返回
    */
    public $elect_sign_status = '';

    /**
     * @var string 错误信息
     * 返回码为 0000 时有返回
    */
    public $audit_msg = '';
}
