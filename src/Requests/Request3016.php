<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 授权码获取用户 openID
 *
 * 通过授权码或付款码获取用户 openID
*/
class Request3016 extends Request
{
    /**
     * @var string 平台商户编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 支付授权码
     * M 1~32
    */
    public $pay_auth_code = '';

    /**
     * @var string 授权码类型
     * M 2 01：微信付款码
    */
    public $auth_type = '';

    /**
     * @var string 微信支付appid
     * C 1~16 授权码类型为 01 时上送
    */
    public $sub_appid = '';
}
