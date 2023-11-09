<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 特殊角色信息采集接口
 *
 * 主要功能是对机构下非机构、供应商、平台商户性质，但在业务层面交易性质特殊的客户进行管理。
 * 通过该接口进行信息采集满足合规需要，后续可进一步放开此类客户的交易权限。
 * 具体特殊角色类型目前支持“转账方”、“”分润方。涉及分润、转账、预约转账的交易权限
*/
class Request1098 extends Request
{
    /**
     * @var string 特殊角色类型
     * M 2
     * 01：分润方
     * 02：转账方
    */
    public $special_role_type = '';

    /**
     * @var string 特殊角色基本信息
     * M json串不同特殊角色json串内容字段不同，按要录入的角色类型上送
     *
     * 分润方基本信息json(注：附件采用机构上送 url 地址，生态圈主动访问该地址下载的方式传输。)
     * properties 性质 M 01：个人 02：企业
     * real_name 姓名 M
     * cer_type 证件类型 M 生态圈证件类型字典
     * cer_num 证件号 M
     * id_validate_start 证件有效期限起 O yyyy-mm-dd
     * id_validate_end 证件有效期限止 O yyyy-mm-dd 或长期
     * tel_num 手机号 C 个人必填
     * register_address 注册地址 C 02 企业必填
     * legal_name 法人姓名 C 02 企业必填
     * legal_cer_type 法人证件类型 C 02 企业必填
     * legal_cer_num 法人证件号码 C 02 企业必填
     * legal_id_validate_start 法人证件有效期始 C 02 企业必填
     * legal_id_validate_end 法人证件有效期止 C 02 企业必填
     * agreement_validate_end 协议有效期止 O yyyy-mm-dd 不上送情况下默认为一年有效期，上送情况下为上送有效期，允许同一人重新上送更新协议有效期；过期后，生态圈会更新分润方状态为失效
     * account_name 户名 M
     * bank_code 银行 M
     * bank_card_no 账号 M
     * cnaps_code 联行号 C 企业必填
     * id_front_url 证件正面 O 个人为身份证 企业为法人身份证
     * id_back_url 证件反面 O 个人为身份证 企业为法人身份证
     * settle_accout_url 账户证明材料 C
     * person_auth_url 个人真人认证材料 O 个人手持身份证，人脸识别结果等
     * busi_license_url 营业执照 O 企业必传
     * agreement_no 协议编号 M 特殊角色与机构协议编号
     * agreement_url 协议文件 O
     * other_url 其他 O
     *
     * 转账方基本信息json(注：附件采用机构上送 url 地址，生态圈主动访问该地址下载的方式传输。)
     * properties 性质 M 01：个人 02：企业
     * real_name 姓名 M
     * cer_type 证件类型 M 生态圈证件类型字典
     * cer_num 证件号 M
     * id_validate_start 证件有效期限起 O yyyy-mm-dd
     * id_validate_end 证件有效期限止 O yyyy-mm-dd 或长期
     * tel_num 手机号 C 个人必填
     * register_address 注册地址 C 02 企业必填
     * legal_name 法人姓名 C 02 企业必填
     * legal_cer_type 法人证件类型 C 02 企业必填
     * legal_cer_num 法人证件号码 C 02 企业必填
     * legal_id_validate_start 法人证件有效期始 C 02 企业必填
     * legal_id_validate_end 法人证件有效期止 C 02 企业必填
     * agreement_validate_end 协议有效期止 O yyyy-mm-dd 不上送情况下默认为一年有效期，上送情况下为上送有效期，允许同一人重新上送更新协议有效期；过期后，生态圈会更新分润方状态为失效
     * account_name 户名 M
     * bank_code 银行 M
     * bank_card_no 账号 M
     * cnaps_code 联行号 C 企业必填
     * id_front_url 证件正面 O 个人为身份证 企业为法人身份证
     * id_back_url 证件反面 O 个人为身份证 企业为法人身份证
     * settle_accout_url 账户证明材料 C
     * person_auth_url 个人真人认证材料 O 个人手持身份证，人脸识别结果等
     * busi_license_url 营业执照 O 企业必传
     * agreement_no 协议编号 M 特殊角色与机构协议编号
     * agreement_url 协议文件 O
     * other_url 其他 O
    */
    public $special_role_info = '';

    /**
     * @var string 后台应答地址
     * M 1~1024
    */
    public $resp_url = '';
}
