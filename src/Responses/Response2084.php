<?php

namespace Gymers\TonglianPay\Responses;

class Response2084 extends Response
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
    */
    public $pay_amount = '';

    /**
     * @var string 分润金额
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
     * @var string 目标账户银行编码
    */
    public $destination_bnk_id = '';

    /**
     * @var string 目标账户类型
    */
    public $destination_acct_type = '';

    /**
     * @var string 目标账号
    */
    public $destination_acct_num = '';

    /**
     * @var string 转入账户通联会员号
    */
    public $destination_sign_num = '';

    /**
     * @var string 转入支付模式
    */
    public $destination_pay_mode = '';

    /**
     * @var string 转出支付模式
    */
    public $pay_mode = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
