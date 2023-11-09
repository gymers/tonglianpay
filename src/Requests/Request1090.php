<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 换手机号
 *
 * 用户银行预留手机号发生变更，通过生态圈提供的接口，变更生态圈中的已绑定卡的手机号码。
*/
class Request1090 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
     * M 20
    */
    public $sign_num = '';

    /**
     * @var string 银行编码
     * M 8
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * M 1 1：借记卡
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * M 1~30
    */
    public $acct_num = '';

    /**
     * @var string 手机号码
     * M 11
    */
    public $tel_num = '';

    /**
     * @var string 原手机号码
     * M 11
    */
    public $org_tel_num = '';

    /**
     * @var string 后台应答地址
     * O 1~1024
    */
    public $resp_url = '';

    /**
     * @var string 附加信息
     * O 1~1024
    */
    public $addtnl_data1 = '';

    /**
     * @var string ip地址
     * O 7~15
    */
    public $ip_addr = '';
}
