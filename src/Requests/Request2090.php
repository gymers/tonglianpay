<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 预约购买确认
 *
 * 对于机构产品的预约购买，需要等待机构发起预约确认交易指令后，才可以进行后续操作，生态圈对机构发起的确认交易进行确认和清算。
*/
class Request2090 extends Request
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
     * @var string 原申请方交易流水号
     * M 1~32
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原申请方交易订单号
     * M 1~32
    */
    public $org_order_num = '';

    /**
     * @var string 原交易类型
     * M 4
    */
    public $org_processing_code = '';

    /**
     * @var string 原交易日期
     * M 8 yyyyMMdd
    */
    public $org_trans_date = '';

    /**
     * @var string 确认交易类型
     * M 1
     * 0：全部确认
     * 1：部分确认
     * 2：全部撤销
     * 3：部分撤销
    */
    public $cfm_processing_code = '';

    /**
     * @var string 交易金额
     * C 1~12
     * 1) 单位：分
     * 2) 交易金额、营销金额、支付金额不能同时为 0
    */
    public $amt_tran = '';

    /**
     * @var string 支付金额
     * C 1~12 单位：分
    */
    public $pay_amount = '';

    /**
     * @var string 营销金额
     * O 1~12 单位：分
    */
    public $promotion_fee = '';

    /**
     * @var string 分润金额
     * O 1~12 单位：分
    */
    public $trace_fee = '';

    /**
     * @var string 分账明细
     * C 分账明细 json 串，格式后附; 格式见分账功能说明
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
     * @var string 解冻资金退回方式
     * C 1 0.到银行卡；2.到余额账户；3.到现金宝；4.到机构自付；A.订单-机构自付（线上）;H.JSAPI 支付；I.小程序支付；J.主扫支付；K.被扫支付；L.H5支付；M.APP 支付
    */
    public $back_mode = '';

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
