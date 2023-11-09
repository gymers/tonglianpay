<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 银行账户验证
*/
class Request1096 extends Request
{
    /**
     * @var string 认证类型
     * C 1
     * 1：银行账户类别验证（不填，默认为 1）
     * 3：银行账户三要素验证
     * 4：银行账户四要素验证
     * 5：银行账户四要素短信验证
    */
    public $auth_type = '';

    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 银行编码
     * M 8
    */
    public $bnk_id = '';

    /**
     * @var string 户名
     * M 2~80
    */
    public $hld_name = '';

    /**
     * @var string 账户类别
     * C 1 1：Ⅰ类账户；
    */
    public $acct_level_type = '';

    /**
     * @var string 账户类型
     * C 1：借记卡
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * M 1~30
    */
    public $acct_num = '';

    /**
     * @var string 证件类型
     * C 2 01：身份证
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * C 1~25
    */
    public $cer_num = '';

    /**
     * @var string 手机号码
     * C 11
    */
    public $tel_num = '';
}
