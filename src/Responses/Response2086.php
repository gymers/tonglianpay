<?php

namespace Gymers\TonglianPay\Responses;

class Response2086 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 原申请方交易流水号
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原申请方交易订单号
    */
    public $org_order_num = '';

    /**
     * @var string 原交易类型
    */
    public $org_processing_code = '';

    /**
     * @var string 原交易日期
    */
    public $org_trans_date = '';

    /**
     * @var string 交易金额
    */
    public $amt_tran = '';

    /**
     * @var string 支付金额
    */
    public $pay_amount = '';

    /**
     * @var string 分润金额
    */
    public $trace_fee = '';

    /**
     * @var string 通联轧差手续费金额
     * 通联实时轧差收取的手续费金额，资金交收方式为轧差时返回
    */
    public $trade_fee = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
