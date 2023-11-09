<?php

namespace Gymers\TonglianPay\Responses;

class Response1072 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 企业基本信息
     * 以json格式返回企业基本信息，json格式下附
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
    public $cor_base_info = '';

    /**
     * @var string 交易工作日
    */
    public $date_settlmt = '';
}
