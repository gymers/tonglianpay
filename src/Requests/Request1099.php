<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 委托结算关系绑定
 *
 * 主要功能是对机构/平台商户下特殊客户的信息进行采集，满足合规需要的同时实现机构/平台商户结算给特殊客户的功能。具体委托结算方类型目前支持机构、个人会员、企业会员以及平台商户，涉及分润、分账的交易权限
*/
class Request1099 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 绑定方信息json
     * M
     *
     * 其中，绑定方信息json 数组如下：
     * sep_role_type 委托结算方类型 M 1 0：机构 1：个人会员 2：企业会员 3：平台商户
     * sep_acct_type 委托结算账户类型 M 1 允许上送的账户类型 包括： 1：机构结算账户 3：客户账户 6：平台商户结算账户
     * sep_merch_code 委托结算归属方代码 M 1~200 与委托结算账户类型所上送信息相关：账户类型上送 1-机构结算账户时，填机构编码（委托结算关系绑定接口必填）账户类型上送 3-客户账户时，填通联会员号（必填）账户类型上送 6-平台商户结算账户时， 填平台商户编码（必填）
     * sep_settle_role_info 委托结算角色编码 O 由商户提前跟业务方确定后上送
     * sep_max_proportion 委托结算方最大分账比例 O 1~8 单位：百分之，0-100之内的数字
     * acct_sub_no 交易子账号 O 17 个人会员或企业会员填写时则绑定到卡号
     * agreement_no 协议编号 O 委托结算方与机构协议编号
     * agreement_url 协议文件 O
     * supplyment_one 补充信息 1 O
     * appendix_one 补充文件 1 O
     * supplyment_two 补充信息 2 O
     * appendix_two 补充文件 2 O
     * supplyment_three 补充信息 3 O
     * appendix_three 补充文件 3 O
    */
    public $bind_info = '';

    /**
     * @var string 后台应答地址
     * M 1~1024
    */
    public $resp_url = '';
}
