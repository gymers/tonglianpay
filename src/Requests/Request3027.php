<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 终端信息查询
 *
 * 商户查询报备终端的相关信息。
*/
class Request3027 extends Request
{
    /**
     * @var string 平台商户编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 终端号
     * M 8 商户下唯一
    */
    public $term_no = '';
}
