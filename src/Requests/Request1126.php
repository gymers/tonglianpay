<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 终端信息采集
 *
 * 商户将自有终端的设备信息报备至通联。
*/
class Request1126 extends Request
{
    /**
     * @var string 平台商户编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 操作类型
     * M 1 1：新增 2：修改 3：注销（仅需上送 term_no和 device_type 字段即可）
    */
    public $op_type = '';

    /**
     * @var string 终端号
     * M 8 商户下唯一
    */
    public $term_no = '';

    /**
     * @var string 设备类型
     * M 2
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
     * C 1~50 设备类型（devicetype）填写为 02、03、04、05、06、08、09 或 10 时，必须填写终端序列号。
    */
    public $term_sn = '';

    /**
     * @var string 终端状态
     * C 2 00：启用；01：注销；
    */
    public $term_state = '';

    /**
     * @var string 终端地址
     * C 1~100 省-市-区-详细地址，详细地址长度控制在 30 个汉字以内，例：上海市-上海市浦东新区-五星路 12 号
    */
    public $term_address = '';
}
