<?php

namespace Gymers\TonglianPay\Responses;

class Response
{
    /**
     * @var string 统一响应前缀
    */
    public const PREFIX = 'Response';

    /**
     * @var string 通联回调前缀
    */
    public const NOTIFY_PREFIX = 'repMsg=';

    /**
     * @var string 申请方流水号
    */
    public $req_trace_num;

    /**
     * @var string 受理方交易流水号
    */
    public $resp_trace_num;

    /**
     * @var string 交易返回码
     * 0000 交易成功
     * 1111 业务已受理
     * 1112 已受理,需要上送短信验证码
     * 1113 已受理，处理中
     * 1133 受理成功，待人工审核
     * 1201 等待电话回拨
     * 9997 交易结果未知请查询
     * 1122 预约成功
    */
    public $resp_code;

    /**
     * @var string 交易返回码信息
    */
    public $resp_msg;
}
