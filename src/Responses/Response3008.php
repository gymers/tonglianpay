<?php

namespace Gymers\TonglianPay\Responses;

class Response3008 extends Response
{
    /**
     * @var string 担保资金合计
     * 单位为分
    */
    public $guarantee_amount = '';

    /**
     * @var string 交易金额合计
     * 单位为分
    */
    public $trans_amount = '';

    /**
     * @var string 营销金额合计
     * 单位为分
    */
    public $promotion_amount = '';
}
