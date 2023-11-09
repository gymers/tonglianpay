<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 预约转账确认
 *
 * 对于客户发起的预约转账申请，需要等待机构发起转账确认交易指令后，才可以进行后续操作，生态圈对机构发起的确认交易进行确认和对应的余额账户转账。
*/
class Request2095 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 原申请方交易流水号
     * M 1~32
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原申请交易通联流水号
     * M 1~32
    */
    public $org_resp_trace_num = '';

    /**
     * @var string 原交易日期
     * M 8 yyyyMMdd
    */
    public $org_trans_date = '';

    /**
     * @var string 确认交易类型
     * M 1 0：全部确认（转入方账户信息根据转账申请交易上送信息进行交易处理） 2：全部撤销（原路退回转账申请转出方余额账户）
    */
    public $cfm_processing_code = '';

    /**
     * @var string 支付模式
     * M 1 2：余额支付
    */
    public $pay_mode = '';

    /**
     * @var string 交易币种
     * M 3 156
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
     * M 1~12 单位：分
    */
    public $amt_tran = '';

    /**
     * @var string 分润金额
     * O 1~12 单位：分
    */
    public $trace_fee = '';

    /**
     * @var string 分润明细
     * O JSON 串，确认阶段上送明细应与申请阶段保持一致分 润 从 转 账 金 额 中 内扣。即转账金额 100 元，分润 1 元，则转入方实际收到 99 元
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
