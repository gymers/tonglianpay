<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 机构自付订单确认
 *
 * 对2085交易支付模式为，4.银行卡-机构自付(实名) A.订单-机构自付(线上)，对2089交易支付模式为，4.银行卡-机构自付(实名),A.订单-机构自付（线上），对2080交易支付模式为 A.订单-机构自付（线上），进行支付确认动作。
*/
class Request2086 extends Request
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
     * @var string 交易金额
     * C 1~12 单位：分
    */
    public $amt_tran = '';

    /**
     * @var string 机构自付渠道标识
     * C 1~20 机构自付类交易所使用渠道标识
    */
    public $channel_code = '';

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
