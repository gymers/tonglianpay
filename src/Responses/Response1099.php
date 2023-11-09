<?php

namespace Gymers\TonglianPay\Responses;

class Response1099 extends Response
{
    /**
     * @var string 委托结算关系绑定审核状态
     * 00：受理成功审核中
     * 01：受理成功待签约
     * 02：已签约待终审
     * 03：审核通过
     * 04：审核失败
     * 05：提交审核失败
     * 返回码为 0000 时有返回
    */
    public $bind_audit_status = '';

    /**
     * @var string 错误信息
     * 返回 04、05 时具体的失败原因
     * 返回码为 0000 时有返回
    */
    public $audit_msg = '';

    /**
     * @var string 待签署协议类型
     * 审核状态为 01-受理成功待签约时返回
    */
    public $wait_sign_agreement = '';

    /**
     * @var string 待签署协议 url
     * 审核状态为 01-受理成功待签约时返回
    */
    public $wait_sign_agreement_url = '';
}
