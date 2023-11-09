<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 增卡
*/
class Request1182 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 签约类型
     * M 1
     * 2：快捷签约
     * 3：信任签约
     * 4：网关签约
     * 8：商委-线下
    */
    public $sign_type = '';

    /**
     * @var string 通联会员号
     * M 20
    */
    public $sign_num = '';

    /**
     * @var string 交易子账号
     * M 17
    */
    public $acct_sub_no = '';

    /**
     * @var string 银行编码
     * M 8
    */
    public $bnk_id = '';

    /**
     * @var string 户名
     * M 2~80 当会员类型为 2 个体工商户，且账户类型为 1、2 时，户名必须为法人姓名。
    */
    public $hld_name = '';

    /**
     * @var string 账户类型
     * M 1
     * 1：借记卡
     * 2：贷记卡
     * 6：对公账户账户类型 6 仅支持签约类型 3
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30 4：网关签约非必填，其他必填
    */
    public $acct_num = '';

    /**
     * @var string 联行号
     * C 12 对公账户必填
    */
    public $cnaps_code = '';

    /**
     * @var string 姓名
     * C 2~80 对公账户必填
    */
    public $real_name = '';

    /**
     * @var string 证件类型
     * M 2
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * M 1~25
     * 01：身份证
     * 14：营业执照
     * 15：登记证书
     * 16：批文 其他类型详见 5.2 证件类型字典
    */
    public $cer_num = '';

    /**
     * @var string 手机号码
     * C 11 对公账户非必填
    */
    public $tel_num = '';

    /**
     * @var string CVV2
     * O 3
    */
    public $cvv2 = '';


    /**
     * @var string 有效期
     * O 8
    */
    public $expiry_date = '';

    /**
     * @var string 供应商标识
     * O 1
     * 0：不开通供应商账户
     * 2：供应商产品账户 不填默认为 0
    */
    public $prod_flag = '';

    /**
     * @var string 供应商编码
     * C 8~9 开户标识为 2 时必填
    */
    public $supply_inst_code = '';

    /**
     * @var string 客户经理手机号
     * O
    */
    public $account_manager_tel = '';

    /**
     * @var string 客户经理编码
     * O
    */
    public $account_manager_code = '';

    /**
     * @var string ip地址
     * O 7~15
    */
    public $ip_addr = '';

    /**
     * @var string 附加信息
     * 1 O 1~1024
    */
    public $addtnl_data1 = '';
}
