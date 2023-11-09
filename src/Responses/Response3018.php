<?php

namespace Gymers\TonglianPay\Responses;

class Response3018 extends Response
{
    /**
     * @var string 合规性审核状态
     * 00:待审核状态
     * 02:审核完毕
     * 03:已补录待审核
     * 04:待二次补充
     * 05:补充完毕
     * 09:七天未处理系统延迟冻结
     * 返回码为 0000 时有返回
    */
    public $compliance_status = '';

    /**
     * @var string 合规性审核结果
     * 0-正常
     * 2-降低风控
     * 3-延迟冻结
     * 4-冻结
     * 返回码为 0000 时有返回
    */
    public $audit_result = '';

    /**
     * @var string 审核异常错误信息
     * 审核结果为 2 3 4 时返回
    */
    public $audit_msg = '';

    /**
     * @var string 审核详情json数组
     * 详情见商户合规审核结果异步通知
     * 返回码为 0000 时有返回
    */
    public $audit_detail = '';
}
