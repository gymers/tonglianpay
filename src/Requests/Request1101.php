<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 修改会员资料
 *
 * 生态圈接收机构修改会员资料的申请，对会员的相关补充信息进行修改
*/
class Request1101 extends Request
{
    /**
     * @var string 通联会员号
     * M 11
    */
    public $sign_num = '';

    /**
     * @var string 操作类型
     * M 1 1-新增，2-修改
    */
    public $op_type = '';

    /**
     * @var string 个人补充信息json
     * O json串
     *
     * 个人补充信息json格式
     * per_base_info 个人基础信息json O
     * == 个人基础信息json
     * == id_validate_start 证件有效期始 O 1~10 格式为：yyyy-mm-dd
     * == id_validate_end 证件有效期止 O 1~10 格式为：yyyy-mm-dd 长期时上送 9999-12-31
     * == province 所在省 O 1~20 带 “ 省 ” 或 “ 自 治区”，如 广东 省，广西省，内蒙古自治区等。如 果是直辖市，则填市，如北京市。
     * == city 所在市 O 1~100 带“市”，如广州市，南宁市等。如果是直辖市，则填市，如北京市北京市。
     * == address 地址 O 1~100
     *
     * per_image_info 个人影像信息json O
     * == 个人影像信息json 注：附件采用机构上送 url 地址，生态圈主动访问该地址下载的方式传输
     * == id_front_url 身份证人像面 O url 照片
     * == id_back_url 身份证国徽面 O url 照片
     * == settle_accout_url 账户证明材料 O url 照片
     * == person_auth_url 个人认证材料 O url 照片
     * == other_url 其他 O url 照片
    */
    public $per_supply_info = '';

    /**
     * @var string 企业补充信息json
     * O Json串
     *
     * 企业补充信息json格式
     * enterprise_base_info 企业基础信息json O
     * == 企业基础信息json
     * == id_validate_start 证件有效期始 O 1~10 格式为：yyyy-mm-dd
     * == id_validate_end 证件有效期止 O 1~10 格式为：yyyy-mm-dd 长期时上送 9999-12-31
     * == register_province 工商注册所在省 O 1~20 带 “ 省 ” 或 “ 自 治区”，如 广东 省，广西省，内蒙古自治区等。如 果是直辖市，则填市，如北京市。
     * == register_city 工商注册所在市 O 1~100 带“市”，如广州市，南宁市等。如果是直辖市，则填市，如北京市北京市。
     * == register_address 注册地址 O 1~100
     * == cor_phone 法人手机号 O 11 和法人信息不一致时需要上传签字授权书
     *
     * enterprise_relation_info 相关人员信息json O
     * == 相关人员信息json 例：{"legal_person":{"name":"张三"…},"control_person":{"same_as_legal":"0","name":"李四"…},"benefit_person":{"same_as_legal":"1"}}
     * == legal_person 法人信息json O
     * ==== same_as_legal 是否同法人 M 1 1：是 0：否，仅控制人json和受益人json里有此字段
     * ==== name 姓名 O 2~80
     * ==== cer_type 证件类型 O 2
     * ==== cer_num 证件号码 O 1~25
     * ==== cer_valid_start 证件有效期始 O 1~10 格式为：yyyy-mm-dd
     * ==== cer_valid_end 证件有效期止 O 1~10 格式为：yyyy-mm-dd 长期时上送 9999-12-31
     * ==== province 所在省 O 1~20带 “ 省 ” 或 “ 自 治区”，如 广东 省，广西省，内蒙古自治区等。如 果是直辖市，则填市，如北京市。
     * ==== city 所在市 O 1~100带“市”，如广州市，南宁市等。如果是直辖市，则填市，如北京市北京市。
     * ==== address 地址 O 1~100
     * == control_person 控制人信息json O
     * ==== 同法人信息
     * == benefit_person 受益人信息json O
     * ==== 同法人信息
     *
     * enterprise_image_info 企业影像信息json O
     * == 企业影像信息json 注：附件采用机构上送 url 地址，生态圈主动访问该地址下载的方式传输。
     * ==legp_cer_front 法人身份证人像面 O 照片 url
     * ==legp_cer_back 法人身份证国徽面 O 照片 url
     * ==settle_accout_url 账户证明材料 O 照片 url
     * ==busi_license_url 营业执照照片 O 照片 url
     * ==author_pic 签字授权书 O 照片 url
     * ==legp_realname_url 法人实名认证材料 O 照片 url
     * ==other_url 其他 O 照片 url
    */
    public $enterprise_supply_info = '';

    /**
     * @var string 后台应答地址
     * C 1~1024
    */
    public $resp_url = '';

    /**
     * @var string ip地址
     * C 7~15
    */
    public $ip_addr = '';
}
