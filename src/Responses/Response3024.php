<?php

namespace Gymers\TonglianPay\Responses;

class Response3024 extends Response
{
    /**
     * @var string 微信平台商户或供应商号
     * 当前商户号交易的微信平台商户或供应商号
     * 返回码为 0000 时有返回
    */
    public $wechat_mcht_no = '';

    /**
     * @var string 默认 APPID
     * 交易未上送支付 appid 时，系统取默认
     * 返回码为 0000 时有返回
    */
    public $default_appid = '';

    /**
     * @var string 授权目录
     * 商户公众号 JSAPI 支付授权目录列表 ，json 格式数据，每个支付目录要求符合 URI格式规范，最多返回 5 个
     * 返回码为 0000 时有返回
    */
    public $auth_path_list = '';

    /**
     * @var string 关联APPID与关注
     * sub_appid 为绑定好的商户公众号、小程序、APP 支付等 APPID；
     * subscribe_appid 关注特约商户公众号的APPID；配置关系如果绑定多个以列表形式返回，如果不区分绑定则 sub_appid=NULL 的记录返回默认推荐关注的 APPID
     * 返回码为 0000 时有返回
    */
    public $appid_config_list = '';

    /**
     * @var string 错误信息
     * 返回码为 0000 时有返回
    */
    public $audit_msg = '';


}
