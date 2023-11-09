<?php

namespace Gymers\TonglianPay\Responses;

class Response3022 extends Response
{
    /**
     * @var string 电子签约协议
     * 返回码为 0000 时有返回
    */
    public $elect_sign_url = '';

    /**
     * @var string 错误信息
     * 返回码为 0000 时有返回
    */
    public $audit_msg = '';
}
