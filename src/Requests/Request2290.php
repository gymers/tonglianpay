<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 实时取现
*/
class Request2290 extends Request
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
     * M 1 0：银行卡支付
    */
    public $pay_mode = '';

    /**
     * @var string 账户标识
     * M 1 0：余额账户
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
     * M 1 1：借记卡
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
     * @var string 产品编码
     * O 1~25
    */
    public $product_num = '';

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
     * C 1~12 单位：分
    */
    public $pay_amount = '';

    /**
     * @var string 分润金额
     * O 1~12 单位：分
    */
    public $trace_fee = '';

    /**
     * @var string 分润明细
     * C 分润明细 json 串，格式见分润功能说明
     *
     * 分润json明细格式如下：
     * sep_no 分账序号 C 3 1、分账序号必须为3位例如 000 001 2、只有一条分账分账序号必须为000 3、如果有多条分账 分账序号不能含有000，需从001开始
     * sep_acct_type 分润账户类型 M 1 允许上送的账户类型包括： 1：机构结算账户 2：供应商结算账户 3：客户账户 4：机构收入账户：机构收手续费分润的账户 5：通联手续费账户（预留）：暂无通联直接参与分润的场景 6：平台商户结算账户
     * sep_merch_code 归属方代码 C 1~200 与账户类型所上送信息相关：账户类型上送 1-机构结算账户时，机构编码（选填）账户类型上送 2-供应商结算账户 时，填供应商编码（必填）账户类型上送 3-客户账户 时，填通联会员号（必填）账户类型上送 4-机构收入账户 时：填机构编码（选填）账户类型上送 5-（不支持）账户类型上送 6-平台商户结算账户时，填平台商户编码（必填）
     * sep_bank_id 账号所属银行 C 8
     * sep_acct_num 账号 C 1~30 分润账户类型为 3 时：银行卡号分润账户类型为 4 时：不填默认为机构收入账户
     * sep_acct_sub_num 分润交易子账号 C 17【所属银行、账号】和【交易子账号】二选一必填
     * trace_fee 分润金额 M 1~12 单位：分
     * sep_proportion 分润比例 O 预留
    */
    public $trace_detail = '';

    /**
     * @var string 营销金额
     * O 1~12 单位：分
    */
    public $promotion_fee = '';

    /**
     * @var string 现金账户代码
     * C 1~20
    */
    public $product_code_cash_acct = '';

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
