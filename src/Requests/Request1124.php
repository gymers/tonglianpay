<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 门店信息管理
 *
 * 生态圈接收机构门店信息管理的申请，对商户门店的信息进行管理
*/
class Request1124 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 请求类型
     * M 1 1：查询 2：新增 3：修改
    */
    public $req_type = '';

    /**
     * @var string 门店信息
     * C json串，见 4.3.5 字段说明；新增、修改时必传
     *
     * 门店信息json格式
     * shop_id 门店编号 C 4 进件、新增门店时为空，修改时必填
     * shop_name 门店名称 M 1~60 同一商户名称唯一
     * shop_address 门店地址 C 1~150 进件、新增门店时必填
     * shop_contactor 门店联系人 C 2~80 进件、新增门店时必填
     * shop_contactor_phone 门店联系人电话 C 11 进件、新增门店时必填
     * shop_area 所在区 C 1~10 进件、新增门店时必填详见附录 5.7 地区码
     * 以下字段仅在商户进件时需配置终端的门店信息中存在
     * print_num 打印联数 O 1~2 默认为 2, 仅在商户进件需配置终端时填写
     * term_num 门店终端数 O 1 单门店最大终端数 5, 仅在商户进件需配置终端时填写
     * reject_busi_type 禁用交易类型(多个使用逗号分隔) O 1~100 VSP002 消费撤销 VSP003 消费退货 VSP004 预授权 VSP005 预授权撤销 VSP006 预授权完成 VSP007 预授权完成撤销 VSP502 微信撤销 VSP503 微信退货 VSP512 支付宝撤销 VSP513 支付宝退货 VSP506 QQ 钱包撤销 VSP507 QQ 钱包退货 VSP552 银联扫码撤销 VSP553 银联扫码退货 VSP011 扫码预消费 VSP013 扫码预消费完成 VSP014 扫码预消费完成退货 仅在商户进件需配置终端时填写
    */
    public $shop_info = '';

    /**
     * @var string 后台应答地址
     * C 1~1024
    */
    public $resp_url = '';
}
