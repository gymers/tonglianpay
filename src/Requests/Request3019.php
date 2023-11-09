<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 合规信息补录获取h5Url
 *
 * 接收机构发起的合规信息补录申请，生态圈返回 URL 网址给机构进行合规信息的补录。
*/
class Request3019 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

}
