<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 预约转账申请
*/
class Request2094 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 转账类型
     * M 1
     * 0：一对一转账
     * 1：一对多转账-普通
     * 2：一对多转账-随机
    */
    public $transfer_type = '';

    /**
     * @var string 通联会员号
     * M 20
    */
    public $sign_num = '';

    /**
     * @var string 支付模式
     * M 1 2：余额支付
    */
    public $pay_mode = '';

    /**
     * @var string 银行编码
     * C 8
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * C 1 1：借记卡 6：对公账户
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30
    */
    public $acct_num = '';

    /**
     * @var string 转出交易子账号
     * C 17
     * ⚫ 交 易子账户 与银行 编码、账户类型、账户二选一必填
     * ⚫ 如果存在多个子账户，操作具体的转入子账户需要上送
    */
    public $acct_sub_no = '';

    /**
     * @var string 手机号码
     * O 11
    */
    public $tel_num = '';

    /**
     * @var string 目标账户通联会员号
     * C 20 当转账类型为 0.普通时，必填
    */
    public $destination_sign_num = '';

    /**
     * @var string 目标账户银行编码
     * C 8 转入方参数，转账类型为 0时选填
    */
    public $destination_bnk_id = '';

    /**
     * @var string 目标账户类型
     * C 1 1：借记卡6：对公账户 转入方参数，转账类型为 0时选填
    */
    public $destination_acct_type = '';

    /**
     * @var string 目标账号
     * C 1~30 转入方参数，转账类型为 0时选填
    */
    public $destination_acct_num = '';

    /**
     * @var string 目标交易子账号
     * C 17
     * ⚫ 交 易子账户 与银行 编码、账户类型、账户二选一必填
     * ⚫ 如果存在多个子账户，转入具体的转入子账户需要上送，否则可能导致转账差错
    */
    public $destination_acct_sub_no = '';

    /**
     * @var string 目标手机号码
     * O 11 转入方参数，转账类型为 0时选填
    */
    public $destination_tel_num = '';

    /**
     * @var string 交易币种
     * M 3 156
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
     * C 1~12 转出账户申请转账的金额
    */
    public $amt_tran = '';

    /**
     * @var string 分润金额
     * O 1~12 单位：分
    */
    public $trace_fee = '';

    /**
     * @var string 分润明细
     * O JSON 串，如转账需要分润则需要在预约转账申请和确认阶段上送分润明细，并且两次上送需保持一致。分润从转账金额中内扣。即转账金额 100 元，分润 1 元，则转入方实际收到 99 元
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
     * @var string 目标账户明细
     * C Json串转账类型 1、2 时必上送
     *
     * 目标账户明细JSON
     * packet_id 账户 ID O 28 系统自动生成
     * packet_num 账户个数 M 1~12
     * packet_per_amount 单笔交易金额 M 1~12当转账类型为 1：一对多-普通时，交易金额=单笔转账金额*转账个数；当转账类型为 2：一对多-随机时，不允许上送
     * packet_expire_time 有效期 M 1~12 单位：小时目前生态圈支持预约转账申请最大有效期为 14 天。
    */
    public $transfer_detail = '';

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
