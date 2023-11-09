<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 转账
*/
class Request2084 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
     * M 20 转出账户通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 账户标识
     * M 1 0：余额账户
    */
    public $charge_flag = '';

    /**
     * @var string 银行编码
     * M 8
    */
    public $bnk_id = '';

    /**
     * @var string 转出账户类型
     * M 1 1：借记卡 6：对公账户
    */
    public $acct_type = '';

    /**
     * @var string 转出账号
     * M 1~30
    */
    public $acct_num = '';

    /**
     * @var string 转出交易子账号
     * C 17 开通单卡多账户必须上送
    */
    public $acct_sub_no = '';

    /**
     * @var string 手机号码
     * O 11 转出账户手机号转出账户手机号
    */
    public $tel_num = '';

    /**
     * @var string 交易币种
     * M 3 156：人民币
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
     * C 1~12 1）单位：分 2）交易金额、营销金额、支付金额不能同时为0 3）交易金额、支付金额不能同时有值
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
     * @var string 分润明细
     * O JSON 串，详见分润功能说明。分 润 从 转 账 金 额 中 内扣。即转账金额 100 元，分润 1 元，则转入方实际收到 99 元
    */
    public $trace_detail = '';

    /**
     * @var string 现金账户代码
     * C 1~20
    */
    public $product_code_cash_acct = '';

    /**
     * @var string 目标账户银行编码
     * M 8
    */
    public $destination_bnk_id = '';

    /**
     * @var string 目标账户类型
     * M 1 1：借记卡 6：对公账户
    */
    public $destination_acct_type = '';

    /**
     * @var string 目标账号
     * M 1~30
    */
    public $destination_acct_num = '';

    /**
     * @var string 目标交易子账号
     * C 17 开通单卡多账户必须上送
    */
    public $destination_acct_sub_no = '';

    /**
     * @var string 转入账户通联会员号
     * M 20
    */
    public $destination_sign_num = '';

    /**
     * @var string 转入支付模式
     * M 1
    */
    public $destination_pay_mode = '';

    /**
     * @var string 转出支付模式
     * M 1
    */
    public $pay_mode = '';

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
}
