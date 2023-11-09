<?php

namespace Gymers\TonglianPay\Responses;

class Response2290 extends Response
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
     * @var string 账号
    */
    public $acct_num = '';

    /**
     * @var string 手机号码
    */
    public $tel_num = '';

    /**
     * @var string 供应商编码
    */
    public $supply_inst_code = '';

    /**
     * @var string 产品引入方
    */
    public $prod_import_flag = '';

    /**
     * @var string 交易份额
    */
    public $trans_units = '';

    /**
     * @var string 产品编码
    */
    public $product_num = '';

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
     * @var string 现金账户代码
    */
    public $product_code_cash_acct = '';

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
