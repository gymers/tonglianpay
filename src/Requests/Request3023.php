<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 微信认证状态查询
 *
 * 接收机构发起的微信认证状态查询申请，生态圈对商户的微信认证状态进行查询。
*/
class Request3023 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 渠道类型
     * M 3 微信：WXP 支付宝：ALP
    */
    public $channel_type = '';


}
