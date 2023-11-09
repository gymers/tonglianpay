<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 供应商开户
 *
 * 生态圈接收机构供应商开户申请，校验交易子账户和通联会员号绑定关系无误后，将相关开户信息发往基金公司进行开户。开户成功后，该交易子账户即可支持该供应商的相关交易。
*/
class Request1183 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 供应商编码
     * M 8~9
    */
    public $supply_inst_code = '';

    /**
     * @var string 交易子账号
     * M 17
    */
    public $acct_sub_no = '';

    /**
     * @var string 通联会员号
     * M 20 个人/企业/产品在完成实名绑卡后都会生成唯一会员号
    */
    public $sign_num = '';

    /**
     * @var string 机构/产品标识
     * C 1：产品
    */
    public $org_product_flag = '';

    /**
     * @var string 产品类型
     * C 产品标识 1，必填
    */
    public $product_type = '';

    /**
     * @var string 产品代码
     * C 产品标识 1，必填
    */
    public $product_num = '';

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
