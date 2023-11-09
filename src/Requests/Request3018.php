<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 合规状态查询
 *
 * 接收机构发起的合规状态查询申请，生态圈对商户的合规状态进行查询。
*/
class Request3018 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

}
