<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 批量交易查询
 *
 * 提供批量交易查询接口，支持以日期范围和交易类型作为条件进行查询。
 *
 * 文件明细格式
 * 机构编码|申请方交易流水号|受理方交易流水号|交易类型|银行编码|账号|交易币种|交易金额|交易状态|返回码|返回信息
 * 字段说明：
 * 机构编码 M
 * 申请方交易流水号 M
 * 受理方交易流水号 M
 * 交易类型 M
 * 银行编码 M
 * 账号 M
 * 交易币种 O 156：人民币
 * 交易金额 O 单位：分
 * 交易状态 M 0：处理中 1：成功 2：失败
 * 交易返回码 M
 * 交易返回信息 M
 *
*/
class BatchTxQuery
{
    /**
     * @var string 业务代码
     * M JR
    */
    public $bus_code = '';

    /**
     * @var string 合作商户号
     * O
    */
    public $sub_merchant_id = '';

    /**
     * @var string 开始时间
     * M yyyyMMddHH24MISS
    */
    public $begin_time = '';

    /**
     * @var string 结束时间
     * M yyyyMMddHH24MISS
    */
    public $end_time = '';

    /**
     * @var string 交易类型 M
    */
    public $processing_code = '';
}
