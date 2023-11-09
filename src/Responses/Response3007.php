<?php

namespace Gymers\TonglianPay\Responses;

class Response3007 extends Response
{
    /**
     * @var string 备付金总额度
     * 备付金总额度=实际机构备付金余额+垫资额度，无垫资合作情况下，垫资额度为 0，备付金总额度=实际备付金余额；1. 单位为分 2. ∞表示无上限
    */
    public $total_lim = '';

    /**
     * @var string 结算在途金额
     * 机构待结算金额；
    */
    public $pending_amt = '';

    /**
     * @var string 渠道账户余额
     * 使用机构自付支付方式时，该余额可体现机构自付资金是否到账；
    */
    public $channel_amt = '';

    /**
     * @var string 已用额度
     * 合作垫资业务时，可查询已使用额度
    */
    public $used_lim = '';

    /**
     * @var string 可用额度
     * 合作垫资业务时，可查询剩余可用额度
    */
    public $available_lim = '';
}
