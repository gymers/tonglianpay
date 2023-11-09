<?php

namespace Gymers\TonglianPay\Responses;

class Response3027 extends Response
{
    /**
     * @var string 平台商户编码
    */
    public $mcht_no = '';

    /**
     * @var string 终端号
     * 商户下唯一
    */
    public $term_no = '';

    /**
     * @var string 设备类型
     * 01：自动柜员机（含 ATM 和 CDM）和多媒体自助终端；
     * 02：传统 POS；
     * 03：mPOS；
     * 04：智能 POS；
     * 05：II 型固定电话；
     * 06：云闪付终端；
     * 07：保留使用；
     * 08：手机 POS；
     * 09：刷脸付终端；
     * 10：条码支付受理终端；
     * 11：条码支付辅助受理终端；
     * 12：行业终端（公交、地铁用于指定行业的终端）；
     * 13：MIS 终端
    */
    public $device_type = '';

    /**
     * @var string 终端序列号
     * 设备类型（devicetype）填写为 02、03、04、05、06、08、09 或 10 时，必须填写终端序列号。
    */
    public $term_sn = '';

    /**
     * @var string 终端状态
     * 00：启用；01：注销；
    */
    public $term_state = '';

    /**
     * @var string 终端地址
     * 省-市-区-详细地址，详细地址长度控制在 30 个汉字以内，例：上海市-上海市-浦东新区-五星路 12 号
    */
    public $term_address = '';

    /**
     * @var string 微信报备状态
     * 1：成功 2：失败
    */
    public $wx_state = '';

    /**
     * @var string 微信报备错误信息
    */
    public $wx_msg = '';

    /**
     * @var string 支付宝报备状态
     * 1：成功 2：失败
    */
    public $al_state = '';

    /**
     * @var string 支付宝报备错误信息
    */
    public $al_msg = '';
}
