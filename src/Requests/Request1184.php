<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 增开交易子账户
 *
 * 生态圈接收机构增开交易子账户申请，校验上送的主交易子账户和通联会员号绑定关系无误后，将在该主交易子账户下生成新的交易子账户（副）。
 * 同时在增开的同时若有同步开通该子账户供应商账户的需求，也可在此接口中一并实现。
*/
class Request1184 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 主交易子账号
     * M 17 通过开户接口生成
    */
    public $acct_sub_no = '';

    /**
     * @var string 通联会员号
     * M 20 个人/企业/产品在完成实名绑卡后都会生成唯一会员号
    */
    public $sign_num = '';

    /**
     * @var string 供应商标识
     * O 1
     * 0：不开通供应商账户
     * 2：供应商产品账户不填默认为 0
    */
    public $prod_flag = '';

    /**
     * @var string 供应商编码
     * C 开户标识为 2 时必填
    */
    public $supply_inst_code = '';

    /**
     * @var string 客户经理手机号
     * O 11
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
     * O 1~1024
    */
    public $addtnl_data1 = '';
}
