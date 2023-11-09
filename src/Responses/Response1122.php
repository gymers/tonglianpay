<?php

namespace Gymers\TonglianPay\Responses;

class Response1122 extends Response
{
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
     * @var string 开通产品
     * 请求类型为查询时返回json字符串，见 4.3.4 字段说明返回码为 0000 时返回
    */
    public $prod_info = '';
}
