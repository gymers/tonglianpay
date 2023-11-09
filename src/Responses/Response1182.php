<?php

namespace Gymers\TonglianPay\Responses;

class Response1182 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 签约类型
    */
    public $sign_type = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 交易子账号
    */
    public $acct_sub_no = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账号
     * 增开类型为：快捷增卡、信任增卡、商委增卡、网关增卡均返回账号；
    */
    public $acct_num = '';

    /**
     * @var string 户名
    */
    public $hld_name = '';

    /**
     * @var string 证件类型
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
    */
    public $cer_num = '';

    /**
     * @var string 手机号码
    */
    public $tel_num = '';

    /**
     * @var string 供应商标识
    */
    public $prod_flag = '';

    /**
     * @var string 供应商编码
    */
    public $supply_inst_code = '';

    /**
     * @var string 客户经理手机号
    */
    public $account_manager_tel = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
