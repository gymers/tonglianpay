<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 开通产品管理
 *
 * 生态圈接收机构产品信息管理的申请，对商户开通的产品进行管理
*/
class Request1122 extends Request
{
    /**
     * @var string 平台商户/供应商编码
     * M 1~19
    */
    public $mcht_no = '';

    /**
     * @var string 请求类型
     * M 1 1：查询 2：新增 3：修改 4：删除
    */
    public $req_type = '';

    /**
     * @var string 开通产品
     * C json串，见 4.3.4 字段说明；新增、修改、删除时必传
     *
     * 开通产品json格式
     * prod_num 开通产品 M 1~15 详见附录 5.5 产品类型
     * rate 费率 C 1~8 单位：百分之，产品类型为线下pos 消费-贷时为空
     * credit_rate 贷记卡费率 C 1~8 单位：百分之，产品类型为线下pos 消费-贷时必填
     * max_amt 封顶 O 1~12 单位：元
     * start_time 生效时间 R 8 数据格式 yyyyMMdd，产品信息查询时返回
     * end_time 失效时间 R 8 数据格式 yyyyMMdd，产品信息查询时返回
     * json串：[{产品 1 信息},{产品 2 信息}……{产品 n 信息}]
     *
    */
    public $prod_info = '';

    /**
     * @var string 后台应答地址
     * C 1~1024
    */
    public $resp_url = '';
}
