<?php

namespace Gymers\TonglianPay\Responses;

class Response1120 extends Response
{
    /**
     * @var string 平台商户/供应商
     * 编码平台商户或供应商进件后返回系统生成的平台商户/供应商编码
    */
    public $mcht_no = '';

    /**
     * @var string 供应商/平台商户名称
    */
    public $mcht_name = '';

    /**
     * @var string 原进件请求流水号
     * 返回码为 0000 时有返回
    */
    public $org_req_trace_num = '';

    /**
     * @var string 审核状态
     * 00：受理成功审核中
     * 01：审核通过
     * 02：审核失败
     * 03：提交审核失败
     * 返回码为 0000 时有返回
    */
    public $audit_status = '';

    /**
     * @var string 错误信息
     * 返回 02、03 时具体的失败原因
     * 返回码为 0000 时有返回
    */
    public $audit_msg = '';

    /**
     * @var string 通联会员号
     * 审核状态为 01-审核通过时返回
    */
    public $sign_num = '';

    /**
     * @var string 收银宝商户号
     * 审核状态为 01-审核通过时返回
    */
    public $syb_merchant_code = '';

    /**
     * @var string 结算账户开户结果
     * json串返回账号和交易子账户信息，审核
     * 状态为 01-审核通过时返回
    */
    public $settle_info = '';
}
