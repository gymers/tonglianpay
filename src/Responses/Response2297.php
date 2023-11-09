<?php

namespace Gymers\TonglianPay\Responses;

class Response2297 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 平台商户编码
    */
    public $mcht_no = '';

    /**
     * @var string 取现到账类型
    */
    public $pay_time = '';

    /**
     * @var string 账户标识
    */
    public $charge_flag = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

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
     * 代表客户银行卡实际到账资金
    */
    public $pay_amount = '';

    /**
     * @var string 通联轧差手续费金额
     * 通联实时轧差收取的手续费金额，资金交收方式为轧差时返回
    */
    public $trade_fee = '';
}
