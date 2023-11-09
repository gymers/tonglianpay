<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 商户信息查询
 *
 * 接收机构发起的商户信息查询申请，生态圈对商户的相关信息进行查询。
*/
class Request3015 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 请求类型
     * M 1 1：商户信息查询
    */
    public $req_type = '';
}
