<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 预约转账余额查询
 *
 * 一对多转账场景时，接收机构发起的预约转账余额查询操作申请，生态圈支持对个人总红包、单个红包的查询。
*/
class Request3009 extends Request
{
    /**
     * @var string 通联会员号
     * M 20
    */
    public $sign_num = '';

    /**
     * @var string 银行编码
     * C 8 查询交易账户下某卡的预约转账申请资金余额必填
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * C 1 查询交易账户下某卡的预约转账申请资金余额必填
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30 查询交易账户下某卡的预约转账申请资金余额必填
    */
    public $acct_num = '';

    /**
     * @var string 交易子账号
     * C 17 查询交易账户下某子账户的预约转账申请资金余额必填
    */
    public $acct_sub_no = '';

    /**
     * @var string 转账中间账户ID
     * C 查询某个具体转账中间账户资金余额必填
    */
    public $packet_id = '';

    /**
     * @var string 附加信息
     * 1 O 1~1024
    */
    public $addtnl_data1 = '';
}
