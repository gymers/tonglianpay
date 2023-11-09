<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 终端信息管理
 *
 * 生态圈接收机构终端信息管理的申请，对商户的终端信息进行管理
*/
class Request1125 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 请求类型
     * M 1 1：查询 2：新增
    */
    public $req_type = '';

    /**
     * @var string 终端信息列表
     * C json串，见 4.3.8 字段说明；新增时必传
     *
     * 终端信息json格式
     * term_id 终端编号 O 8 新增终端时为空
     * term_num 门店终端数 C 1 新增终端时必填，单门店最大终端数 5
     * term_shop_id 所属门店 C 4 新增终端时必填
     * print_num 打印联数 O 1~2 默认为 2
     * reject_busi_type 禁用交易类型(多个使用逗号分隔) O 1~100 VSP002 消费撤销 VSP003 消费退货 VSP004 预授权 VSP005 预授权撤销 VSP006 预授权完成 VSP007 预授权完成撤销 VSP502 微信撤销 VSP503 微信退货 VSP512 支付宝撤销 VSP513 支付宝退货 VSP506 QQ 钱包撤销 VSP507 QQ 钱包退货 VSP552 银联扫码撤销 VSP553 银联扫码退货 VSP011 扫码预消费 VSP013 扫码预消费完成 VSP014 扫码预消费完成退货
    */
    public $term_info = '';

    /**
     * @var string 后台应答地址
     * C 1~1024
    */
    public $resp_url = '';
}
