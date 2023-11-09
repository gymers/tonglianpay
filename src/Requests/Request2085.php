<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 购买交易
*/
class Request2085 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
     * C 20
    */
    public $sign_num = '';

    /**
     * @var string 购买类型
     * M 1
     * 0：购买
     * 3：信任购买
     * 4：线上订单支付
     * 5：终端支付
     * 6：码牌支付
    */
    public $purchase_type = '';

    /**
     * @var string 支付模式
     * M 1
     * 0：银行卡支付
     * 2：余额支付
     * 3：份额支付
     * 5：联合支付
     * 7：认证支付
     * 8.B2B 支付
     * 9.B2C 支付
     * A.订单-机构自付（线上）
     * E.银联 token 支付
     * F.银联 token 认证支付
     * H.JSAPI 支付
     * I.小程序支付
     * J.主扫支付
     * K.被扫支付
     * L.H5 支付
     * M.APP 支付
     * N.线下刷卡支付
     * O 线下.扫码支付
     * P.码牌支付
     * Q.半屏支付
     * R.H5 收银台支付
    */
    public $pay_mode = '';

    /**
     * @var string 支付限制
     * C 0-9
     * no_credit：指定不能使用贷记卡支付；
     * to_credit：限定使用贷记卡支付；不填时默认同时支持借记卡和贷记卡支付；
     * 支付方式为A~Z、8和9时 可选填不传时默认支持贷记卡与借记卡，上送：no_credit；
    */
    public $pay_limit = '';

    /**
     * @var string 银行编码
     * M 8 A:支付宝 W:微信
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * M 1
     * 1：借记卡
     * 2：贷记卡
     * 6：对公账户
     * 21：银联 token-借记
     * 22：银联 token-贷记 购买类型 4 不填
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30 购买类型 4 不填
    */
    public $acct_num = '';

    /**
     * @var string CVV2
     * O 3
    */
    public $cvv2 = '';

    /**
     * @var string 有效期
     * O 8
     * 账户类型为 2 时，购买类型为 0 时非必填
     * 购买类型为 3 时必填
    */
    public $expiry_date = '';

    /**
     * @var string 手机号码
     * C 11 支付模式为认证支付时必填；
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
     * 1) 单位：分
     * 2) 交易金额、营销金额、支付金额不能同时为 0
     * 3) 交易金额、支付金额不能同时有值
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
     * @var string 平台商户编码
     * C 1~19
    */
    public $mcht_no = '';

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
     * @var string 现金账户代码
     * C 1~20
    */
    public $product_code_cash_acct = '';

    /**
     * @var string 交易订单号
     * M 1~32
    */
    public $order_num = '';

    /**
     * @var string 订单支付信息
     * C JSON串; 购买类型4 订单支付必填，格式见订单支付功能说明
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
     * @var string 订单有效期
     * O 8 单位分钟：默认为 60分钟，最大 120 分钟
    */
    public $order_valid_time = '';

    /**
     * @var string 终端信息
     * C JSON串，格式详见订单支付功能说明 支付模式 K 必填
     *
     * 终端信息（terminfo）JSON 说明
     * termno 终端号 8 位数字 否 8
     * devicetype 设备类型 01：自动柜员机（含 ATM 和CDM）和多媒体自助终端 02：传统 POS 03：mPOS 04：智能 POS 05：II 型固定电话 06：云闪付终端；07：保留使用；08：手机 POS；09：刷脸付终端；15 10：条码支付受理终端；11：条码支付辅助受理终端；12：行业终端（公交、地铁用于指定行业的终端）；13：MIS 终端； 否 2
     * termsn 终端序列号 是 50 终端类型（device_type）填写为 02、03、04、05、06、08、09 或 10 时，必须填写终端序列号。
     * encryptrandnum 加密随机因子 仅在被扫支付类交易报文中出现：若付款码为 19 位数字，则取后 6 位；若付款码为 EMV 二维码，则取其 tag 57 的卡号/token 号的后 6 位 是 10
     * secrettext 密文数据 仅在被扫支付类交易报文中出现：64bit 的密文数据，对终端硬件序列号和加密随机因子加密后的结果。本子域取值为：64bit 密文数据进行base64 编码后的结果。 是 16
     * appversion 终端程序版本号 是 8 终端应用程序的版本号。应用程序变更应保证版本号不重复。当长度不足时，右补空格。
     * location 经纬度 +37.12/-121.213 是 32 受理终端设备实时经纬度信息，格式为纬度/经度，+表示北纬、东经，-表示南纬、西经。
     * deviceip 终端 IP 是 40 商户端终端设备 IP 地址。注：如经、维度信息未上送，该字段必送。
    */
    public $term_info = '';

    /**
     * @var string 支付授权码
     * M
    */
    public $pay_auth_code = '';

    /**
     * @var string 风险信息json
     * C 当支付模式为 E.银联token 支付必须上送
    */
    public $risk_info = '';

    /**
     * @var string 联合商户号
     * C 1~30
    */
    public $co_icode = '';

    /**
     * @var string 户名
     * C 2~80 购买类型为 3 时必填
    */
    public $hld_name = '';

    /**
     * @var string 证件类型
     * C 2 购买类型为 3 时必填 01：身份证 其他类型详见 5.2 证件类型字典
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * C 1~25 购买类型为 3 时必填
    */
    public $cer_num = '';

    /**
     * @var string 前台请求地址
     * C 1~1024
    */
    public $reqs_url = '';

    /**
     * @var string 后台应答地址
     * C 1~1024
    */
    public $resp_url = '';

    /**
     * @var string ip地址
     * C 7~15 支付方式为：H.JSAPI 支付；I.小程序支付；J.主扫支付；K.被扫支付；L.H5 支付；M.APP 支付 选填 当支付模式为 E.银联token 支付、F.银联token 认证支付必须上送
    */
    public $ip_addr = '';

    /**
     * @var string 拓展参数
     * O json字符串，一般用于渠道的活动参数填写；根据附录拓展参数说明填写
    */
    public $extend_params = '';

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
