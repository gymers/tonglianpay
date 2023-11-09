<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 机构备付金余额查询
 *
 * 机构上送查询请求，查询备付金使用情况，生态圈反馈当前工作日机构备付金余额、可用额度。
*/
class Request3007 extends Request
{
    /**
     * @var string 历史记录日期
     * O 8 yyyyMMdd 允许查询历史日期最长 30 天，不填默认查询上一自然日
    */
    public $query_date = '';

    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string ip地址
     * O 7~15
    */
    public $ip_addr = '';

    /**
     * @var string 附加信息
     * O 1~1024
    */
    public $addtnl_data1 = '';
}
