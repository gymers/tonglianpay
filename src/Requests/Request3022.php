<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 电子协议查看
 *
 * 接收机构发起的电子协议查看申请，生态圈处理完毕后返回签约url
 * 注：商户进件成功后，需间隔一分钟后才能发起电子协议查看申请，返回的签约 URL 只有 7 天有效期，若过期需重新获取
*/
class Request3022 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 协议类型
     * M 1~10
     * TLBA：通联业务协议
     * ESBO：业务合作协议
     * ESBC：委托结算业务合作协议
    */
    public $elect_sign_type = '';

    /**
     * @var string 委托结算方类型
     * C 1 协议类型 ESBC 必填，允许上送的类型包括：1：个人会员 2：企业会员 3：平台商户
    */
    public $sep_role_type = '';

    /**
     * @var string 委托结算归属方代码
     * C 20 协议类型 ESBC 必填 企业会员和个人会员为通联会员号，平台商户为平台商户编码
    */
    public $sep_merch_code = '';

    /**
     * @var string 重定向 URL
     * O 1~256 有值时，签约完成点确定会重定向到传入的 ur
    */
    public $redirect_url = '';
}
