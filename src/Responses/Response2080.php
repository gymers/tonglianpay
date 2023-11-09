<?php

namespace Gymers\TonglianPay\Responses;

class Response2080 extends Response
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
     * @var string 支付模式
    */
    public $pay_mode = '';

    /**
     * @var string 账户标识
    */
    public $charge_flag = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * 1：借记卡
     * 2：贷记卡
     * 6：对公账户
     * 99：其他（花呗/余额等）支付模式为微信支付宝等模式时返回；
    */
    public $acct_type = '';

    /**
     * @var string 账号
    */
    public $acct_num = '';

    /**
     * @var string 手机号码
    */
    public $tel_num = '';

    /**
     * @var string 交易币种
    */
    public $cur_type = '';

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
     * @var string 营销金额
    */
    public $promotion_fee = '';

    /**
     * @var string 银行商户流水
     * 发往银行的商户流水对应微信支付宝支付时为发往微信支付宝的商户单号。
    */
    public $bank_req_code = '';

    /**
     * @var string 银行渠道流水
     * 扣款渠道的流水（若有）使用微信支付宝支付的为微信支付宝返回的流水号；使用银行卡支付的返回银行系统的流水号
    */
    public $channel_trade_code = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';

    /**
     * @var string 合作商户号
    */
    public $coop_id = '';

    /**
     * @var string 系统标识
    */
    public $sys_id = '';
}
