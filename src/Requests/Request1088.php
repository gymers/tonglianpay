<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 换卡类交易
*/
class Request1088 extends Request
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
     * @var string 签约类型
     * M 1
     * 2：快捷换卡
     * 3：信任换卡
     * 4：网关换卡
    */
    public $sign_type = '';

    /**
     * @var string 银行编码
     * M 8
    */
    public $bnk_id = '';

    /**
     * @var string 账户类型
     * M 1
     * 1：借记卡
     * 2：贷记卡
     * 6：对公账户 账户类型 6 仅支持签约类型 3
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30 网关换卡非必填（除银行编码 03080000 招商银行）
    */
    public $acct_num = '';

    /**
     * @var string 联行号
     * C 12 对公账户必填
    */
    public $cnaps_code = '';

    /**
     * @var string 户名
     * M 2~80 当会员类型为 2 个体工商户，且账户类型为1、2 时，户名必须为法人姓名。
    */
    public $hld_name = '';

    /**
     * @var string 证件类型
     * M 2
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * M 1~25
    */
    public $cer_num = '';

    /**
     * @var string 手机号码
     * C 11 网关换卡非必填（除银行编码 03080000 招商银行）
    */
    public $tel_num = '';

    /**
     * @var string 原银行编码
     * M 8
    */
    public $org_bnk_id = '';

    /**
     * @var string 原账户类型
     * M 1
    */
    public $org_acct_type = '';

    /**
     * @var string 原账号
     * M 1~30
    */
    public $org_acct_num = '';

    /**
     * @var string 原手机号码
     * M 11
    */
    public $org_tel_num = '';

    /**
     * @var string 前台请求地址
     * C 1~1024
    */
    public $reqs_url = '';

    /**
     * @var string 后台应答地址
     * C 1~1024
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
     * @var string 合作商户号
     * O 8~15
    */
    public $coop_id = '';

    /**
     * @var string 系统标识
     * O 1~5
    */
    public $sys_id = '';
}
