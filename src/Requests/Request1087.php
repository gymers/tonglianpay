<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 单笔开户交易
 *
*/
class Request1087 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 签约类型
     * M 1
     * 0：实名开户
     * 2：快捷开户
     * 3：信任开户
     * 4：网关签约
     * 6：银联云闪付一键绑卡
     * 8：商委-线下签约
    */
    public $sign_type = '';

    /**
     * @var string 会员类型
     * O 1
     * 1、企业，企业开户默认值
     * 2、个体工商户，
     * 3、个人，个人开户默认值
    */
    public $member_type = '';

    /**
     * @var string 供应商标识
     * O 1
     * 0：不开通供应商账户
     * 2：供应商产品账户不填默认为 0
    */
    public $prod_flag = '';

    /**
     * @var string 客户ID
     * C 1~30 客户在机构系统的唯一身份 ID签约类型为 6：银联云闪付一键绑卡时必填；
    */
    public $cus_id = '';

    /**
     * @var string 银行编码
     * C 8 0：实名开户非必填，其他必填
    */
    public $bnk_id = '';

    /**
     * @var string 户名
     * C 2~80 0：实名开户非必填，其他必填
    */
    public $hld_name = '';

    /**
     * @var string 账户类型
     * C 1 0：实名开户非必填，其他必填
     * 1：借记卡
     * 2：贷记卡
     * 6：对公账户
     * 21：银联 token-借记
     * 22：银联 token-贷记
    */
    public $acct_type = '';

    /**
     * @var string 账号
     * C 1~30 0：实名开户，4：网关签约（除银行编码 03080000 招商银行）6：银联云闪付一键绑卡非必填，其他必填
    */
    public $acct_num = '';

    /**
     * @var string 联行号
     * C 12 对公账户必填
    */
    public $cnaps_code = '';

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
     * @var string 姓名
     * C 2~80 0：实名开户必填
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
     * C 11 非对公开户必填
    */
    public $tel_num = '';

    /**
     * @var string 供应商编码
     * O 8~9 供应商标识为 2 时必填
    */
    public $supply_inst_code = '';

    /**
     * @var string 法人姓名
     * C 2~80 企业实名开户时必填
    */
    public $cor_name = '';

    /**
     * @var string 个人补充信息json
     * O Json串
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
     * @var string 风险信息json
     * C 签约类型为 6：银联云闪付一键绑卡时必填；必送字段:商户端用户注册时间、用户本次登录验证方式、设备标识
     *
     * 风险信息json格式
     * merUserRegDt 商户端用户注册时间 C 8 yyyyMMdd
     * usrLoginMethod 用户本次登录验证方式 C 5~2048 位图形式，可扩 展：11111; 登录密码|动码|人脸 |FACEID|指纹
     * deviceID 设备标识 C 1~64 移动终端设备的唯一标识
     * shippingProvinceCode 收货地址-省 C 6 有物流需按实际情况上送；无物流送默认值000000
    */
    public $risk_info = '';

    /**
     * @var string 人脸信息json
     * C 签约类型为 6：银联云闪付一键绑卡时必填；
     *
     * 人脸信息json格式
     * merFaceType 商户人脸验证类型 C 1 商户自验、使用第三方验证人脸或选择银联人验时必填 0：不验证人脸 1：商户自验 2：银联核对人脸验证
     * faceFlag 人脸验证标识 C 2 当商户人脸验证类型为1.商户自验时必填,取值为 00 00：商户已自验
     * faceOrderId 人脸验证交易订单号 C 1~40 当商户人脸验证类型为2.银联核对人脸验证时必填用户进行人脸验证的交易订单号
     * faceAppId 人脸识别云服务接入方ID C 1~20 当商户人脸验证类型为2.银联核对人脸验证时必填商户接入人脸识别云服务的接入方 ID
    */
    public $face_info = '';

    /**
     * @var string 前台请求地址
     * C 1~1024 4：网关签约 6：银联云闪付一键绑卡必填
    */
    public $reqs_url = '';

    /**
     * @var string 后台应答地址
     * C 1~1024 4：网关签约 6：银联云闪付一键绑卡必填
    */
    public $resp_url = '';

    /**
     * @var string ip地址
     * C 7~15 6：银联云闪付一键绑卡必填
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

    /**
     * @var string 客户经理手机号
     * O 11
    */
    public $account_manager_tel = '';
}
