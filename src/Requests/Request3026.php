<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 渠道子商户查询
 *
 * 接收机构发起的渠道子商户查询申请，生态圈对商户的渠道子商户号进行查询。
*/
class Request3026 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 渠道类型
     * M 3
     * 微信：WXP
     * 支付宝：ALP
     * 银联：UNP
    */
    public $channel_type = '';

    /**
      * @var string 结算id
      * C 4
      * 仅当该商户存在多个结算 id 无法创建子商户号时传
      * 详见附录 5.4 结算id对应商户特征
     */
    public $settle_id = '';
}
