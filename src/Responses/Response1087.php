<?php

namespace Gymers\TonglianPay\Responses;

class Response1087 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 签约类型
    */
    public $sign_type = '';

    /**
     * @var string 供应商标识
    */
    public $prod_flag = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账号
     * 开户类型为：快捷开户、信任开户、商委-线下开户、网关签约时，均返回账号；签约类型为 6：银联云闪付一键绑卡时返回为银联 token；
    */
    public $acct_num = '';

    /**
     * @var string 掩码账号
     * 签约类型为 6：银联云闪付一键绑卡时返回，卡号前 6 后 4，中间*号补充
    */
    public $mask_acct_num = '';

    /**
     * @var string 手机号码
     * 开户类型为：快捷开户、信任开户、商委-线下开户、网关签约时，均返回账号；
    */
    public $tel_num = '';

    /**
     * @var string 掩码手机号
     * 签约类型为 6：银联云闪付一键绑卡时返回，境内手机号：前 3 后 4 明文，其余*替换
    */
    public $mask_tel_num = '';

    /**
     * @var string token失效时间
     * 签约类型为 6：银联云闪付一键绑卡时返回为银联 token 的失效时间；格式为yyyyMMddHHmmss
    */
    public $token_expire_time = '';

    /**
     * @var string 供应商编码
    */
    public $supply_inst_code = '';

    /**
     * @var string 户名
    */
    public $hld_name = '';

    /**
     * @var string 证件类型
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
    */
    public $cer_num = '';

    /**
     * @var string 合作商户号
    */
    public $coop_id = '';

    /**
     * @var string 系统标识
    */
    public $sys_id = '';

    /**
     * @var string 客户经理手机号
    */
    public $account_manager_tel = '';

    /**
     * @var string 通联会员号
     * 开户成功时返回通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 交易子账号
     * 开户成功时返回
    */
    public $acct_sub_no = '';

    /**
     * @var string 企业基本信息
     * 实名开户、信任开户，证件类型为 13，14，验证一致返回JSON。JSON 内容可见 4.5 企业认证返回信息
     *
     * 企业基本信息json格式
     * RegNumber 工商注册号 15 位数字
     * CreditCode 统一信用代码 18 位数字
     * KeyMan 法人姓名
     * RegCap 注册资本 [单位(万元)]
     * Currency 币种 156：人民币
     * EntStatus 营业状态
     * EntType 企业类型
     * EsDate 开业日期 yyyyMMdd
     * OpFrom 经营期限起 yyyyMMdd
     * OpTo 经营期限止 yyyyMMdd
     * Address 注册地址
     * RegOrg 登记机关
     * AbuItem 许可经营项目
     * CbuItem 一般经营项目
     * OpScope 经营(业务)范围
     * OpScopeAndForm 经营(业务)范围及方式
     * LastCheckYear 最后年检年度 yyyy
     * CanDate 注销日期 yyyyMMdd
     * RevDate 吊销日期 yyyyMMdd
     * IndustryPhyCode 行业门类代码
     * IndustryPhyName 行业门类名称
     * IndustryCoCode 国民经济行业代码
     * IndustryCoName 国民经济行业名称
     * RecCap 实收资本
     * OriRegNumber 原注册号
     * ApprDate 核准时间 yyyyMMdd
    */
    public $cor_base_jnfo = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
