<?php

namespace Gymers\TonglianPay\Responses;

class Response1098 extends Response
{
    /**
     * @var string 审核状态
     * C
     * 00-受理成功审核中
     * 01-审核通过
     * 02-审核失败
    */
    public $audit_status = '';

    /**
     * @var string 审核信息
     * C 审核失败时返回具体原因
    */
    public $audit_msg = '';
}
