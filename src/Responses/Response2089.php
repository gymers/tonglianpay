<?php

namespace Gymers\TonglianPay\Responses;

class Response2089 extends Response
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
     * @var string 预约购买类型
    */
    public $reserve_purchase_type = '';

    /**
     * @var string 支付模式
    */
    public $pay_mode = '';

    /**
     * @var string 冻结资金所在账户
    */
    public $frozen_acct_flag = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * 1：借记卡 2：贷记卡 6：对公账户 99：其他（花呗/余额等）预约购买类型为：4：订单支付、5：终端支付时返回；
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
     * @var string 产品引入方
    */
    public $prod_import_flag = '';

    /**
     * @var string 供应商编码
    */
    public $supply_inst_code = '';

    /**
     * @var string 产品编码
    */
    public $product_num = '';

    /**
     * @var string 现金账户代码
    */
    public $product_code_cash_acct = '';

    /**
     * @var string 交易订单号
    */
    public $order_num = '';

    /**
     * @var string 支付串/会话标识
     * 受理成功时返回，扫码支付则返回二维码串，js 支付则返回 json 字符串
    */
    public $order_pay_info = '';

    /**
     * @var string 订单支付信息
    */
    public $order_detail = '';

    /**
     * @var string cvv2
    */
    public $cvv2 = '';

    /**
     * @var string 有效期
    */
    public $expiry_date = '';

    /**
     * @var string 支付限制
    */
    public $pay_limit = '';

    /**
     * @var string 联合商户号
    */
    public $co_icode = '';

    /**
     * @var string 合作商户号
    */
    public $coop_id = '';

    /**
     * @var string 系统标识
    */
    public $sys_id = '';

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
}
