<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 验证码验证
 *
 * 生态圈接收机构验证码验证申请，验证手机验证码正确性。
 * 开户类交易，验证码验证：验证成功，生态圈开通客户在对应机构下的业务签约关系。
 * 增卡类交易，验证码验证：验证成功，生态圈开通客户在对应机构对应交易子账号下的业务签约关系
 * 换卡类交易，验证码验证：验证成功，生态圈开通客户新卡在对应机构下的业务签约关系，作废原卡的业务签约关系。
 * 认证支付类交易（充值、购买、预约购买、转账），验证码验证：验证成功，该笔交易充值、购买成功。
*/
class Request3010 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 原交易编码
     * M 4 原交易processing_code
    */
    public $org_processing_code = '';

    /**
     * @var string 原交易流水号
     * M 1~32 原交易req_trace_num
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原交易日期
     * M 8 原交易 trans_date
    */
    public $org_trans_date = '';

    /**
     * @var string 短信验证码
     * M 6
    */
    public $verify_code = '';

    /**
     * @var string 前台请求地址
     * O 1~1024
    */
    public $reqs_url = '';

    /**
     * @var string 后台应答地址
     * O 1~1024
    */
    public $resp_url = '';

    /**
     * @var string 附加信息
     * O 1~1024
    */
    public $addtnl_data1 = '';
}
