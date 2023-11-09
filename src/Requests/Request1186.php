<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 账户管理
 *
 * 接收机构发起的账户操作申请，根据请求类型不同，生态圈对客户账户做相应的操作(冻结、解冻、销户)。以上操作不影响客户银行卡的支付功能。
 * 即客户记账账户销户成功后，仍可使用绑定银行卡发起纯支付业务请求。
*/
class Request1186 extends Request
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
     * @var string 变更类型
     * M 1.销户；2.冻结；3.解冻；
    */
    public $change_type = '';

    /**
     * @var string 银行编码
     * O 账户变更不需要填写
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * O 账户变更不需要填写
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * O 账户变更不需要填写
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
