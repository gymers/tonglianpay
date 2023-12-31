<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 批量还款回盘下载
 *
 * 提供批量还款的回盘文件下载。
 *
 * 文件明细格式
 * 申请方交易流水号|受理方交易流水号|合作商户号|通联会员号|还款类型|支付模式|银行编码|账号类型|账号|联行号|交易币种|交易金额|营销金额|交易份额|现金账户代码|结算账户银行编码|结算账户账号|结算账户归属方类型|结算账户归属方代码|扩展字段 3|交易工作日|交易返回码|交易返回信息|附加信息 1|交易子账号
*/
class BatchRepaymentFileDownloadAction
{
    /**
     * @var string 交易日期
     * M yyyyMMdd
    */
    public $trans_date = '';

    /**
     * @var string 批次号
     * M O_D_ 交易日期_批次_机构编号_RST
     * 1) 示例：O_D_20141001_00_70000001_RST
     * 2) 批次号从 00 开始。
     * 3) 回盘文件批次号：还款申请批次号后缀 ST 修改为RST。示例：申请批次号：O_D_20141001_00_70000001_ST 回盘批次号：O_D_20141001_00_70000001_RST
    */
    public $batch_no = '';
}
