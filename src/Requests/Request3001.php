<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 单笔交易查询
 *
 * 机构通过原交易流水和原交易日期进行单笔交易查询。
*/
class Request3001 extends Request
{
    /**
     * @var string 原交易流水号
     * M 1~32 原交易 req_trace_num
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原交易通联流水号
     * C 原交易 resp_trace_num
    */
    public $org_resp_trace_num = '';

    /**
     * @var string 原交易日期
     * M 8 原交易 trans_date
    */
    public $org_trans_date = '';

    /**
     * @var string 原交易订单
     * O 1~32 原交易 order_num
    */
    public $org_order_num = '';

    /**
     * @var string 附加信息
     * O 1~1024
    */
    public $addtnl_data1 = '';
}
