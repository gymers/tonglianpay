<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 商户进件状态查询
 *
 * 进件交易成功后，查询进件商户的审核状态；
*/
class Request3017 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 原进件请求流水号
     * O 1~32
    */
    public $org_req_trace_num = '';
}
