<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 在线签约
 *
 * 接收机构发起的在线签约申请，生态圈收到成功后会推送签约短信完成相关协议的签约。
*/
class Request1100 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 协议类型
     * M 1~10
     * ESBO：业务合作协议
     * ESBC：委托结算业务合作协议
     * TSSA：结算账户授权委托书及声明
    */
    public $elect_sign_type = '';

    /**
     * @var string 业务合作协议json
     * C
     *
     * 业务合作协议json数组如下：
     * org_resp_trace_num 委托结算关系绑定流水号 O 1~32 委托结算关系绑定接口返回的受理方交易流水号
    */
    public $open_agreeement = '';

    /**
     * @var string 委托结算业务合作协议json
     * C
     *
     * 委托结算业务合作协议json数组如下：
     * org_resp_trace_num 委托结算关系绑定流水号 M 1~32 委托结算关系绑定接口返回的受理方交易流水号
     * relation_ship 签署方与商户关系 O JOR：联营关系 CR：合作关系
    */
    public $cooperate_agreement = '';

    /**
     * @var string 结算账户授权委托书及声明json
     * C
     *
     * 结算账户授权委托书及声明json数组如下：
     * auth_reason 授权原因 M
     * acct_name 被授权账户 1-户名 O 2~80
     * acct_num 被授权账户 1-账号 O 1~30
     * cnaps_code 被授权账户 1-开户行 O 1~500
     * settle_param 被授权账户 1-结算参数 O 1~8
    */
    public $acct_auth_agreement = '';

    /**
     * @var string 后台应答地址
     * M 1~1024
    */
    public $resp_url = '';
}
