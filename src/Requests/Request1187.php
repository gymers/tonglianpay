<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 解约
 *
 * 接收机构发起的银行卡解约操作申请，生态圈校验客户银行卡绑定账户是否存在余额、份额，做相应的解约操作。解绑成功后，客户的该银行卡无法在生态圈发起任何交易。如有交易需要，则需重新签约
 * 注：只有余额和份额为 0 的情况下，才可以进行银行卡解约
*/
class Request1187 extends Request
{
    /**
     * @var string 合作商户号
     * C 通联分配的合作商户编码
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
     * M 客户在生态圈的身份标识
    */
    public $sign_num = '';

    /**
     * @var string 银行编码
     * M
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * M
     * 1：借记卡；
     * 2：贷记卡
     * 21：银联 token-借记
     * 22：银联 token-贷记
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * M
    */
    public $acct_num = '';

    /**
     * @var string ip地址
     * O
    */
    public $ip_addr = '';

    /**
     * @var string 附加信息
     * O
    */
    public $addtnl_data1 = '';
}
