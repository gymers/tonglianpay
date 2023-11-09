<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 企业认证
 *
 * 机构上送企业用户的三证或者一证信息,生态圈调用认证机构认证接口，验证企业基础信息。验证通过反馈企业基础信息。
*/
class Request1072 extends Request
{
    /**
     * @var string 合作商户号
     * O 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 企业名称
     * M 2~80
    */
    public $real_name = '';

    /**
     * @var string 法人姓名
     * M 2~80
    */
    public $cor_name = '';

    /**
     * @var string 认证类型
     * M 2 01:三证 02:一证
    */
    public $three_in_one = '';

    /**
     * @var string 营业执照号码
     * C 1~32 认证类型为 01 时必填
    */
    public $busi_license = '';

    /**
     * @var string 税务登记证
     * C 1~20 认证类型为 01 时必填
    */
    public $tax_register = '';

    /**
     * @var string 组织机构代码
     * C 1~20 认证类型为 01 时必填
    */
    public $org_code = '';

    /**
     * @var string 统一社会信用代码
     * C 1~32 认证类型为 02 时必填
    */
    public $uni_credit = '';

    /**
     * @var string 前台请求地址
     * O 1~1024
    */
    public $reqs_url = '';

    /**
     * @var string 后台应答地址
     * O 1~1024
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
}
