<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 批量还款
 *
 * 解析机构提交的批量还款文件，通过生态圈支付渠道，批量处理文件明细中的还款申请。1) T-1 日 15 点~T 日 15 点机构提交的批量还款文件，生态圈扣于 T 日 15 点~17 点通过支付通道进行资金代发
*/
class BatchRepaymentFileUploadAction
{
    /**
     * @var string 交易日期
     * M yyyyMMdd
    */
    public $trans_date = '';

    /**
     * @var string 批次号
     * M O_D_ 交易日期_批次_机构编号_ST
     * 1) 示例：O_D_20141001_00_70000001_ST
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
     * @var string 交易金额
     * M 单位:分
    */
    public $total_amount = '';

    /**
     * @var string 交易份额
     * O 注：可为 0
    */
    public $total_units = '';

    /**
     * @var string 营销金额
     * O 注：可为 0
    */
    public $total_discount = '';

    /**
     * @var string 文件明细
     * M 明细格式见下一个章节
     *
     * 文件明细格式
     * 申请方交易流水号|合作商户号|通联会员号|还款类型|支付模式|银行编码|账号类型|账号|联行号|交易币种|交易金额|营销金额|交易份额|现金账户代码|结算账户银行编码|结算账户账号|结算账户归属方类型|结算账户归属方代码|扩展字段 3|附加信息 1|户名|证件类型|证件号码|交易子账号
     * 字段说明：
     * 申请方交易流水号 M
     * 合作商户号 C
     * 通联会员号 C 还款类型为 0 时，必填
     * 还款类型 M 0：还款 5：信任还款
     * 支付模式 M 0：银行卡支付 3：份额支付
     * 银行编码 M
     * 账户类型 M 1：借记卡
     * 账号 M
     * 联行号 O
     * 交易币种 M 156：人民币
     * 交易金额 M 单位：分
     * 营销金额 O 单位：分 注：可为 0
     * 交易份额 O 注：可为 0
     * 现金账户编码 C 支付模式为现金账户时，必填
     * 结算账户银行编码 C 还款类型为 0 时，必填
     * 结算账户账号 C 机构逆向还款资金转出结算账户
     * 还款类型为 0 时，必填
     * 结算账户归属方类型 C
     * 结算账户归属方代码 C
     * 扩展字段 3 O
     * 附加信息 1 O
     * 户名 C 还款类型为 5 时，必填
     * 证件类型 C 还款类型为 5 时，必填
     * 证件号码 C 还款类型为 5 时，必填
    */
    public $upload_file = '';
}
