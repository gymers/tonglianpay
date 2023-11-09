<?php

namespace Gymers\TonglianPay\Responses;

class Response1088 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 签约类型
    */
    public $sign_type = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账号
     * 换卡类型为：快捷换卡、信任换卡、商委-线下换卡、网关换卡时，均返回账号；
    */
    public $acct_num = '';

    /**
     * @var string 手机号码
    */
    public $tel_num = '';

    /**
     * @var string 原银行编码
    */
    public $org_bnk_id = '';

    /**
     * @var string 原账户
    */
    public $org_acct_num = '';

    /**
     * @var string 合作商户号
    */
    public $coop_id = '';

    /**
     * @var string 系统标识
    */
    public $sys_id = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
