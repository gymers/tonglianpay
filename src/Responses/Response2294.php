<?php

namespace Gymers\TonglianPay\Responses;

class Response2294 extends Response
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
     * @var string 还款类型
    */
    public $repayment_type = '';

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
     * @var string 交易份额
    */
    public $trans_units = '';

    /**
     * @var string 现金账户代码
    */
    public $product_code_cash_acct = '';

    /**
     * @var string 订单支付信息
     * 退货交易返回，JSON 串；格式见订单支付功能说明
     *
     * 订单支付信息 JSON 如下：
     * sub_appid 微信子appid C 32 微信小程序/微信公众号/APP的appid
     * open_id 支付平台用户标识 C 32 JS 支付时使用微 信 支 付 - 用 户 的 微 信openid支付宝支付-用户 user_id微信小程序-用户小程序的openid
     * fq_num 花呗分期 O 4
     * benefit_flag 订单优惠标识 O 32
     * benefit_detail 订单优惠信息 JSON O Json 字符串，填写样例格式见附录 5.5；对于线下订单支付场景，实际支付有优惠的，机构收到的交易推送中会展示相关优惠信息
     * shop_id 渠道门店编号 O 32
     * shop_no 门店号 O 4
     * term_id 终端编码 O 8
     * term_batch_id 终端批次号 O 16
     * term_trace_no 终端流水 O 6
     * term_auth_no 终端授权码 O 20
     * term_ref_num 终端参考号 O 50
     * front_url 支付完成跳转 O 128 开通微信点金计划可用，必须为 https 协议地址，且不允许带参数；pay_mode为 H.JSAPI 时使用；
    */
    public $order_detail = '';

    /**
     * @var string 交易订单号
    */
    public $order_num = '';

    /**
     * @var string 原申请方流水号
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原申请日期
    */
    public $org_trans_date = '';

    /**
     * @var string 原交易通联流水号
    */
    public $org_resp_trace_num = '';

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

    /**
     * @var string 垫资标识
    */
    public $advance_flag = '';

    /**
     * @var string 拓展参数
     * json 字符串，一般用于渠道的活动参数填写；
    */
    public $extend_params = '';
}
