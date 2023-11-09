<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 批量开户
 *
 * 解析机构提交的批量开户文件，通过生态圈自有支付渠道验证成功后，生成生态圈业务签约关系。
*/
class BatchSignTxFileUploadAction
{
    /**
     * @var string 交易日期
     * M yyyyMMdd
    */
    public $trans_date = '';

    /**
     * @var string 批次号
     * M O_D_交易日期 _ 批 次 _ 机构编号_BS
     * 1) 示例：O_D_20141001_00_70000001_BS
     * 2) 批次号从 00 开始
     * 3) 批次号不可重复
    */
    public $batch_no = '';

    /**
     * @var string 交易笔数
     * M 数字 最大笔数 5000 笔
    */
    public $total_count = '';

    /**
     * @var string 文件明细
     * M
     *
     * 文件明细格式
     * 申请方交易流水号|合作商户号|签约类型|供应商标识|银行编码|账户类型|账号|联行号|户名|证件类型|证件号码|手机号码|供应商编码|扩展字段1|扩展字段2|扩展字段3|附加信息1
     * 字段说明：
     * 申请方交易流水号 M
     * 合作商户号 C
     * 签约类型 M 3：信任开户
     * 供应商标识 M 0
     * 银行编码 M
     * 账户类型 M 1：借记卡
     * 账号 M
     * 联行号 O
     * 户名 M
     * 证件类型 M
     * 证件号码 M
     * 手机号码 M
     * 供应商编码 O 填空值
     * 扩展字段 1 O
     * 扩展字段 2 O
     * 扩展字段 3 O
     * 附加信息 1 O
    */
    public $upload_file = '';
}
