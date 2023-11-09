<?php

namespace Gymers\TonglianPay\Responses;

class Response3015 extends Response
{
    /**
     * @var string 收银宝商户号
    */
    public $syb_merchant_code = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 商户基础信息
     * M json串，见 4.3.1 字段说明
     *
     * 商户基础信息json格式
     * mcht_type 商户类型 M 1 1-平台商户 2-供应商 进件成功后不可修改
     * mcht_no 平台商户/供应商编码 C 1~19 供应商必填；平台商户编码由生态圈自己生成返回给机构，进件时为空；进件成功后不可修改
     * mcht_name 供应商/平台商户名称 M 1~100
     * mcht_short_name 供应商/平台商户简称 M 1~40
     * cer_name 营业执照名称 C 1~64 商户性质非个人时必填进件成功后不可修改
     * mcht_status 商户状态 R 1 0：正常 4：冻结 9：关闭 商户信息查询时返回，进件时无需上送
     * mcht_nature 供应商/平台商户性质 M 1 1：企业 2：个体工商户 3：个人 进件成功后不可修改
     * mccid 所属行业 M 1~8 详见附录 5.3 所属行业服务商可具体使用 mccid 范围请与客户经理确认；进件成功后不可修改
     * three_in_one 是否三证合一 C 1 商户性质非个人时必填 0：是（默认） 1：否 进件成功后不可修改
     * cer_type 证件类型 C 1 商户性质非个人时必填 1：营业执照 2：统一社会信用代码 进件成功后不可修改
     * cer_valid_start 证件有效期始 C 1~10 商户性质非个人时必填 yyyy-mm-dd
     * cer_valid_end 证件有效期止 C 1~10 商户性质非个人时必填 yyyy-mm-dd 长期时上送 9999-12-31
     * cer_num 证件号码 C 1~32 商户性质非个人时必填 进件成功后不可修改
     * pub_acct_info 对公账户信息 C 格式如下：对公账户号#支付行号#对公账户名称 商户类型为 1-平台商户并且商户性质为企业，结算账户对私时必填，作为商户信息扩展字段，与结算信息无关
     * tax_register_num 税务登记证号码 C 1~20 三证合一为否时必填进件成功后不可修改
     * tax_reg_valid_start 税务登记证有效期始 C 1~10 三证合一为否时必填
     * tax_reg_valid_end 税务登记证有效期止 C 1~10 三证合一为否时必填
     * organization_num 组织机构代码证号码 C 1~20 三证合一为否时必填进件成功后不可修改
     * orgn_valid_start 组织机构代码证有效期始 C 1~10 三证合一为否时必填
     * orgn_valid_end 组织机构代码证有效期止 C 1~10 三证合一为否时必填
     * register_capital 注册资本 C 1 商户性质非个人时必填 1: 注册资本<10万元 2: 10 万元<注册资本<20万元 3: 20万元<注册资本<50万元 4: 50万元<注册资本<100万元 5: 注册资本>100万元
     * employee_number 员工人数 C 1 商户性质非个人时必填 1: 员工数量<10 2: 10<员工数量<20 3: 20<员工数量<50 4: 50<员工数量<100 5: 员工数量>100
     * business_scope 实际经营范围 M 1~100
     * register_province 工商注册所在省 M 1~20 带“省”或“自治区”，如 广东省，广西省，内蒙古自治区等。如果是直辖市，则填市，如北京市。
     * register_city 工商注册所在市 M 1~100 带“市”，如广州市，南宁市等。 如果是直辖市，则填市，如北京市 北京市
     * mcht_address 商户经营地址 M 1~60
     * mcht_districtcode 商户经营地址所在区 M 1~10 详见附录 5.7 地区码
     * op_contactor 运营联系人 M 2~80
     * op_contactor_phone 运营联系人电话 M 11
     * cus_url 网站URL或平台地址 C 1~100 开通网关（含 B2B、APP）、快捷、云闪付 APP 或线上场景必填
     * web_name 网站或应用名称 C 1~50 开通网关（含 B2B、APP）、快捷、云闪付 APP 或线上场景必填
     * settle_mode 结算方向 O 1 1：结算到余额 2：结算到银行卡
     * settle_cut_time 日切时间 O 4 可上送日切点以客户经理沟通为准，时间点填写格式为 hhmm，样例：0800、2200
     * settle_period 结算周期 O 1 1：T+1 日 2：D+1 日
    */
    public $mcht_info = '';

    /**
     * @var string 相关人员信息
     * M json串，见 4.3.2 字段说明
     *
     * 相关人员信息json格式
     * legal_person 法人信息 M 法人信息 json
     * control_person 控制人信息 M 控制人信息 json
     * benefit_person 受益人信息 M 受益人信息 json
     * 下面是人员信息json字段说明 例：{'legal_person':{'name':'张三'}, 'control_person':{ 'same_as_legal':'0','name':'李四'},'benefit_person':{ 'same_as_legal':'1'}},
     * same_as_legal 是否同法人 M 1 1：是 0：否，仅控制人json和受益人json里有此字段
     * name 姓名 C 2~80
     * cer_type 证件类型 C 2 详见附录 5.2 证件类型
     * cer_num 证件号码 C 1~25
     * cer_valid_start 证件号码有效期始 C 1~10
     * cer_valid_end 证件号码有效期止 C 1~10
     * nationality 国籍 C 1 1-中国
     * sex 性别 C 1 1：男 2：女
     * phone 手机 C 11
     * career 职业 C 1 1：国家机关、党群组织、企业、事业单位人员 2：专业技术人员 3：办事人员和有关人员 4：商业、服务业人员 5：农、林、牧、渔、水利业生产人员 6：生产、运输设备操作人员及有关人员 7：军人 8：其他
     * province 所在省 C 1~20 带“省”或“自治区”，如 广东省，广西省，内蒙古自治区等。如果是直辖市，则填市，如北京市。
     * city 所在市 C 1~100 带“市”，如广州市，南宁市等。如果是直辖市，则填市，如北京市北京市
     * address 住址 C 1~100
    */
    public $related_person_info = '';
}
