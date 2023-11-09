<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 普通取现
*/
class Request2280 extends Request
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
     * M 1 0：银行卡支付 4：银行卡-机构自付(实名)
    */
    public $pay_mode = '';

    /**
     * @var string 账户标识
     * M 1 账户标识：0 余额账户
    */
    public $charge_flag = '';

    /**
     * @var string 产品引入方
     * O 1 0：机构引入
    */
    public $prod_import_flag = '';

    /**
     * @var string 供应商编码
     * O 8~9
    */
    public $supply_inst_code = '';

    /**
     * @var string 交易份额
     * O 1~12
    */
    public $trans_units = '';

    /**
     * @var string 银行编码
     * M 8
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * M 1 1：借记卡 6：对公账户
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * M 1~30
    */
    public $acct_num = '';

    /**
     * @var string 交易子账号
     * C 17 支付交易子账号，单卡多账号模式机构选填；
    */
    public $acct_sub_no = '';

    /**
     * @var string 理财交易子账号
     * C 17 产品份额登记交易子账号，单卡多账号模式机构选填；
    */
    public $share_acct_sub_no = '';

    /**
     * @var string 联行号
     * C 12 对公必填
    */
    public $cnaps_code = '';

    /**
     * @var string 手机号码
     * C 11 对公非必填,个人用户必填
    */
    public $tel_num = '';

    /**
     * @var string 交易币种
     * M 3 156：人民币
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
     * C 1~12 1）单位：分 2）交易金额、营销金额、支付金额不能同时为 0 3）交易金额、支付金额不能同时有值
    */
    public $amt_tran = '';

    /**
     * @var string 支付金额
     * C 单位：分
    */
    public $pay_amount = '';

    /**
     * @var string 分润金额
     * O 单位：分
    */
    public $trace_fee = '';

    /**
     * @var string 营销金额
     * O 1~12 单位：分
    */
    public $promotion_fee = '';

    /**
     * @var string 垫资标识
     * M 1 0：不垫资
    */
    public $advance_flag = '';

    /**
     * @var string 现金账户代码
     * C 1~20
    */
    public $product_code_cash_acct = '';

    /**
     * @var string 产品编码
     * O 1~25
    */
    public $product_num = '';

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
     * @var string 附言
     * O
    */
    public $summary = '';
}
