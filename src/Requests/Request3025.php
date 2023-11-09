<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 微信参数配置
 *
 * 接收机构发起的微信参数配置申请，生态圈对商户的微信参数进行配置。
*/
class Request3025 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 配置类型
     * M 1
     * 1：支付域名
     * 2：支付 appid
     * 3：推荐小程序
    */
    public $config_type = '';

    /**
      * @var string 配置值
      * M 200 根据配置类型提供对应的值
     */
    public $config_value = '';

    /**
     * @var string 支付appid
     * C 40 关注/推荐关注时，若指定支付 appid 则需要填写
    */
    public $sub_appid = '';
}
