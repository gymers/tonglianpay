<?php

namespace Gymers\TonglianPay\Responses;

class Response4001 extends Response
{
    /**
     * @var string 平台商户/供应商编码
    */
    public $mcht_no = '';

    /**
     * @var string 通知类型
     * add：进件结果通知 edit：修改结果通知
    */
    public $notify_type = '';

    /**
     * @var string 通知子类型
     * 01：商户信息修改通知
     * 02：结算信息变更通知
     * 03：产品信息变更通知
     * 04：门店信息变更通知
     * 05：终端信息新增通知
    */
    public $notify_sub_type = '';

    /**
     * @var string 审核状态
     * 00-受理成功审核中
     * 01-审核通过
     * 02-审核失败
     * 03-提交审核失败
    */
    public $audit_status = '';

    /**
     * @var string 错误信息
     * 返回 02、03 时具体的失败原因
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
