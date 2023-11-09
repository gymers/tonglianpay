<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 结算账户取现
 *
 * 机构当天发起结算账户取现的申请，生态圈根据取现到账类型，实时/D+1 日/T+1日扣减商户的可用可取金额，并代发资金至客户银行卡。
*/
class Request2297 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 平台商户编码
     * C 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 取现到账类型
     * M 1~10 D0：资金准实时到卡 D1：资金 D+1 日到卡 T1：资金 T+1 日到卡
    */
    public $pay_time = '';

    /**
     * @var string 账户标识
     * M 1 0：余额账户
    */
    public $charge_flag = '';

    /**
     * @var string 银行编码
     * C 8
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * C 1 1：借记卡 6：对公账户
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30
    */
    public $acct_num = '';

    /**
     * @var string 联行号
     * C 12 对公必填
    */
    public $cnaps_code = '';

    /**
     * @var string 手机号码
     * C 11 对公非必填,个人用户必填
    */
    public $tel_num = '';

    /**
     * @var string 交易子账号
     * C 17 单卡单账号时交易子账号和银行编码、账户类型、账号二选一必填；单卡多账号时机构选填
    */
    public $acct_sub_no = '';

    /**
     * @var string 交易币种
     * M 3 156：人民币
    */
    public $cur_type = '';

    /**
     * @var string 交易金额
     * M 1~12
    */
    public $amt_tran = '';

    /**
     * @var string 后台应答地址
     * M 1~1024
    */
    public $resp_url = '';

    /**
     * @var string ip地址
     * O 7~15
    */
    public $ip_addr = '';

    /**
     * @var string 附加信息
     * O 1~1024
    */
    public $addtnl_data1 = '';

    /**
     * @var string 附言
     * O 交易附言，对应在银行摘要中
    */
    public $summary = '';
}
