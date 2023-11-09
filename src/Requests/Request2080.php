<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 充值&资金到账通知
 *
 * （充值成功后生态圈确定资金到账，入账成功会通过单向通知接口发送资金到账通知）
*/
class Request2080 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
     * M 20
    */
    public $sign_num = '';

    /**
     * @var string 支付模式
     * M 1
     * 0：银行卡支付
     * 8：B2B 支付
     * 9：B2C 支付
     * H：JSAPI 支付
     * I：小程序支付
     * J：主扫支付
     * K：被扫支付
     * L：H5 支付
     * M：APP 支付
    */
    public $pay_mode = '';

    /**
     * @var string 账户标识
     * M 1 0：余额账户
    */
    public $charge_flag = '';

    /**
     * @var string 银行编码
     * C 8 B2B,B2C 非必填
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * C 1 1：借记卡 6：对公账户 银行卡支付必填
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30 银行卡支付必填
    */
    public $acct_num = '';

    /**
     * @var string 交易子账号
     * C 17 非银行卡支付必填
    */
    public $acct_sub_no = '';

    /**
     * @var string 理财交易子账号
     * C 17 产品份额登记交易子账号，单卡多账号模式机构选填；
    */
    public $share_acct_sub_no = '';

    /**
     * @var string 手机号码
     * C 11 借记卡必填
    */
    public $tel_num = '';

    /**
     * @var string 交易币种
     * M 3 156：人民币
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
     * C 1~12
     * 1）单位：分
     * 2）交易金额、营销金额、支付金额不能同时为 0
     * 3）交易金额、支付金额不能同时有值
    */
    public $amt_tran = '';

    /**
     * @var string 支付金额
     * C 1~12 单位：分
    */
    public $pay_amount = '';

    /**
     * @var string 分润金额
     * O 1~12 单位：分
    */
    public $trace_fee = '';

    /**
     * @var string 营销金额
     * O 1~12 单位：分
    */
    public $promotion_fee = '';

    /**
     * @var string 交易订单号
     * O
    */
    public $order_num = '';

    /**
     * @var string 前台请求地址
     * O 1~1024
    */
    public $reqs_url = '';

    /**
     * @var string 后台应答地址
     * M 1~1024
    */
    public $resp_url = '';

    /**
     * @var string ip地址
     * O 7~15
    */
    public $ip_addr = '';

    /**
     * @var string 附加信息
     * O 1~1024
    */
    public $addtnl_data1 = '';

    /**
     * @var string 合作商户号
     * O 8~15
    */
    public $coop_id = '';

    /**
     * @var string 系统标识
     * O 1~5
    */
    public $sys_id = '';

    /**
     * @var string 网关支付终端类型
     * O 2 07-电脑（不填默认为 07），08-手机，10-平板设备，18-可穿戴设备，19-数字电视，00-其他；仅当支付方式为 8、9 时支持上送
    */
    public $term_type = '';
}
