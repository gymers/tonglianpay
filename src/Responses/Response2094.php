<?php

namespace Gymers\TonglianPay\Responses;

class Response2094 extends Response
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
     * @var string 营销金额
    */
    public $promotion_fee = '';

    /**
     * @var string 现金账户代码
    */
    public $product_code_cash_acct = '';

    /**
     * @var string 目标账户明细
    */
    public $transfer_detail = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
