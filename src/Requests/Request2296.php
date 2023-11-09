<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 订单关闭
 *
 * 对于处理中的交易,可调用该接口直接将未付款的交易进行关闭。
*/
class Request2296 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 原交易通联流水号
     * M 1~32
    */
    public $org_resp_trace_num = '';
}
