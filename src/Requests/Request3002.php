<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 资金余额查询
 *
 * 接收机构发起的资金余额查询操作申请，生态圈支持对个人总账户、个人卡账户、机构各类账户的查询。
*/
class Request3002 extends Request
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
     * C 8 查询交易账户下某卡资金余额必填
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * C 1 查询交易账户下某卡资金余额必填 1：借记卡
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30 查询交易账户下某卡资金余额必填
    */
    public $acct_num = '';

    /**
     * @var string 交易子账户
     * C 17 查询某个指定交易子账户余额
    */
    public $acct_sub_no = '';

    /**
     * @var string 附加信息
     * 1 O 1~1024
    */
    public $addtnl_data1 = '';
}
