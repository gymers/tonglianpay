<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 个人认证
 *
 * 机构上送个人基础信息以及个人所属企业的企业通联会员号。生态圈调用认证机构接口，验证个人信息。实时应答机构请求验证的个人基础信息验证结果。
*/
class Request1071 extends Request
{
    /**
     * @var string 合作商户号
     * O 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 认证类型
     * M 2 01:个人
    */
    public $three_in_one = '';

    /**
     * @var string 是否渠道认证
     * C 1 0-否 1-是 不填默认为 1-是
    */
    public $channel_au_flag = '';

    /**
     * @var string 是否跟随认证企业
     * C 1 0-否 1-是 不填默认为 1-是
    */
    public $follow_enp_flag = '';

    /**
     * @var string 企业通联会员号
     * C 20 是否跟随认证企业，上送 1 时，必填
    */
    public $sign_num = '';

    /**
     * @var string 个人所属角色
     * C 1 0：普通，不填默认
     * 1：经办人
     * 2：法人
     * 3：复核员
    */
    public $transactor_flag = '';

    /**
     * @var string 姓名
     * M 2~80
    */
    public $real_name = '';

    /**
     * @var string 证件类型
     * M 2 01：身份证 其他类型详见 5.2 证件类型字典
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * M 1~25
    */
    public $cer_num = '';

    /**
     * @var string 手机号码
     * O 11
    */
    public $tel_num = '';

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
