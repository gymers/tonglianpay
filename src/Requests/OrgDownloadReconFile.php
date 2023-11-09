<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 文件联机下载
 *
 * 提供交易对账文件、资金对账单的联机下载接口。
*/
class OrgDownloadReconFile
{
    /**
     * @var string 交易日期
     * M yyyyMMdd
    */
    public $trans_date = '';

    /**
     * @var string 文件类型
     * M
     * 0：交易对账文件
     * 13：余额对账文件
     * 14：结算单（原资金对账单）
     * 15：对账单
    */
    public $file_type = '';

    /**
     * @var string 批次号
     * O 机构编码_业务类型_日期_批次规则：机构编码_业务类型_日期_批次，如：70000001_JR_20141007_01。
    */
    public $batch_no = '';

    /**
     * @var string 供应商编码
     * O 支持上送供应商/平台商户编码。若上传，应与批次号中的机构编码信息一致
    */
    public $supply_inst_code = '';
}
