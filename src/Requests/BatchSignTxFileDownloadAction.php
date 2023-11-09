<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 批量开户回盘下载
 *
 * 提供批量开户的回盘文件下载。
 *
 * 文件明细格式
 * 申请方交易流水号|受理方交易流水号|合作商户号|通联会员号|签约类型|供应商标识|银行编码|账户类型|账号|户名|证件类型|证件号码|手机号码|供应商编码|扩展字段1|扩展字段2|扩展字段3|交易工作日|交易返回码|交易返回信息|附加信息1
*/
class BatchSignTxFileDownloadAction
{
    /**
     * @var string 交易日期
     * M yyyyMMdd
    */
    public $trans_date = '';

    /**
     * @var string 批次号
     * M O_D_ 交易日期_批次_机构编号_RBS
     * 1) 示例：O_D_20141001_00_70000001_RBS。
     * 2) 批次号从 00 开始。
     * 3) 回盘文件批次号：开户申请批次号后缀 BS 修改为RBS。示例：申请批次号：O_D_20141001_00_70000001_BS 回盘批次号：O_D_20141001_00_70000001_RBS
    */
    public $batch_no = '';
}
