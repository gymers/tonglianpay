<?php

namespace Gymers\TonglianPay\Responses;

class Response3026 extends Response
{
    /**
     * @var string 渠道类型
     * 微信：WXP
     * 支付宝：ALP
     * 银联：UNP
     * 返回码为 0000 时有返回
    */
    public $channel_type = '';

    /**
     * @var string 渠道号
     * 渠道类型为微信时不为空
    */
    public $channel_no = '';

    /**
     * @var string 对应类型子商户号
     * 返回码为 0000 时有返回
    */
    public $channel_mcht_no = '';

    /**
     * @var string 错误信息
     * 返回码为 0000 时有返回
    */
    public $audit_msg = '';

    /**
     * @var string 结算 id
     * 有值时返回
     * 返回码为 0000 时有返回
    */
    public $settle_id = '';
}
