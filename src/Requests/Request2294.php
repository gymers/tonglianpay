<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 还款交易
*/
class Request2294 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
     * O 20
    */
    public $sign_num = '';

    /**
     * @var string 还款类型
     * M 1 0：还款 5：信任还款 7：退货
    */
    public $repayment_type = '';

    /**
     * @var string 支付模式
     * M 1 0：银行卡支付 2：余额支付 3：份额支付 A：订单-机构自付（线上） E.银联 token 支付 H.JSAPI 支付 I.小程序支付 J.主扫支付 K.被扫支付 L.H5 支付 M.APP 支付 8.B2B 支付 9.B2C 支付 N：POS 支付 O：扫码支付
    */
    public $pay_mode = '';

    /**
     * @var string 银行编码
     * C 8 A:支付宝 W:微信
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * C 1 1：借记卡 2：贷记卡 3：存折 6：对公账户 7：单位结算卡 21：银联 token-借记 22：银联 token-贷 记
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30
    */
    public $acct_num = '';

    /**
     * @var string 联行号
     * C 12 对公账户必填
    */
    public $cnaps_code = '';

    /**
     * @var string 交易子账户
     * C 17 余额支付【交易子账户】和【银行编码、账号类型、账户】二选一必填
    */
    public $acct_sub_no = '';

    /**
     * @var string 手机号码
     * O 11
    */
    public $tel_num = '';

    /**
     * @var string 交易币种
     * M 3 156：人民币
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
     * C 1~12 1) 单位：分 2) 交易金额、营销金额、支付金额不能同时为 0
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
     * @var string 分账明细
     * C 分账明细 json 串，格式见分账功能说明
     *
     * 分账 json 明细格式如下：
     * sep_no 分账序号 C 3 1、分账序号必须为 3 位例如 000 001 2、只有一条分账 分账序号必须为 000 3、如果有多条分账 分账序号需从 001 开始，依次递增
     * sep_acct_type 分账账户类型 M 1 0：产品结算 1：机构结算账户 2：供应商结算账户 6：平台商户结算账户
     * sep_merch_code 归属方代码 C 1~200与账户类型所上送信息相关：账户类型 0-产品结算时（不填写）账户类型上送 1-机构结算账户 时，填机构编码（选填）账户类型上送 2-供应商结算账户 时，填供应商编码（必填）账户类型上送 6-平台商户结算账户时，填平台商户编码（必填），且第一条分账 json与主报文平台商户编码 mcht_no 保持一致
     * sep_bank_id 账号所属银行 C 8 账户类型 0-产品结算时（不填写）
     * sep_acct_num 账号 C 1~30 与账户类型所上送信息相关： 账户类型 0-产品结算时（不填写） 账户类型上送 1-机构结算账户 时，填机构结算账户账号 账户类型上送 2-供应商结算账户 时，填供应商结算账户账号 账户类型上送 6-平台商户结算账户 时，填平台商户结算账户账号
     * sep_product_code 产品编码 C 25 账户类型 0-产品结算，所属供应商产品受额度控制时必填，详情与生态圈业务人员联系确认
     * product_name 产品名称 C 100 不填写默认显示机构简称网关支付必填，用于在订单支付页面展示产品信息
     * product_desc 产品描述 C 200 不填写默认显示机构简称网关支付必填，用于在订单支付页面展示产品详情描述
     * sep_acct_sub_num 分账交易子账号 O 17
     * sep_trans_amount 分账交易金额 C 1~12 单位：分
     * sep_pay_amount 分账支付金额 C 1~12 单位：分
     * sep_promotion_amount 分账营销金额 C 1~12 单位：分
     * sep_trace_fee 分润金额 C 1~12 单位：分
     * sep_proportion 分账比例 O
     * sep_order_num 分账订单号 O
    */
    public $sep_detail = '';

    /**
     * @var string 分润明细
     * C 分润明细json串，格式见分润功能说明
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
     *
    */
    public $trace_detail = '';

    /**
     * @var string 原申请方流水号
     * C 1-32 还款类型为 7-退货时必填
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原申请日期
     * C 8 还款类型为 7-退货时必填
    */
    public $org_trans_date = '';

    /**
     * @var string 原交易通联流水号
     * C 1-32 还款类型为 7-退货时必填
    */
    public $org_resp_trace_num = '';

    /**
     * @var string 营销金额
     * O 1~12 单位：分
    */
    public $promotion_fee = '';

    /**
     * @var string 产品引入方
     * M 1 0：机构引入
    */
    public $prod_import_flag = '';

    /**
     * @var string 交易订单号
     * O 1~32 无交易逻辑，按机构业务场景，有需求时可上送
    */
    public $order_num = '';

    /**
     * @var string 供应商编码
     * O 8~9
    */
    public $supply_inst_code = '';

    /**
     * @var string 产品编码
     * M 1~25
    */
    public $product_num = '';

    /**
     * @var string 交易份额
     * O 1~12
    */
    public $trans_units = '';

    /**
     * @var string 现金账户代码
     * C 1~20 份额支付必填
    */
    public $product_code_cash_acct = '';

    /**
     * @var string 后台应答地址
     * M 1~1024
    */
    public $resp_url = '';

    /**
     * @var string ip地址
     * O 7~15 客户 IP 地址
    */
    public $ip_addr = '';

    /**
     * @var string 附加信息
     * 1 O 1~1024
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
     * @var string 户名
     * C 2~80
    */
    public $hld_name = '';

    /**
     * @var string 证件类型
     * C 2 01：身份证 其他类型详见 5.2 证件类型字典
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * C 1~25
    */
    public $cer_num = '';

    /**
     * @var string 开户行所在省
     * O 1~20 不带“省”或“自治区”，如 广东，广西，内蒙古等。建议根据后附的中国邮政区号表内的“省洲名称”列的内容填写。
    */
    public $province = '';

    /**
     * @var string 开户行所在市
     * O 1~100 不带“市”，如 广州，南宁等。 如果是直辖市，则填区，如北京（市）朝阳（区）。建议根据后附的中国邮政区号表内的“地区名称”列的内容填写。
    */
    public $city = '';

    /**
     * @var string 开户行名称
     * O 1~500 开户行详细名称，也叫网点，如 中国建设银行广州东山广场分理处
    */
    public $bnk_name = '';

    /**
     * @var string 拓展参数
     * O json 字符串，一般用于渠道的活动参数填写；根据附录拓展参数说明填写
    */
    public $extend_params = '';

    /**
     * @var string 附言
     * O
    */
    public $summary = '';
}
