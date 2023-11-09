<?php

namespace Gymers\TonglianPay\Requests;

use Gymers\TonglianPay\Application\Config;
use Gymers\TonglianPay\Utils\SignUtil;

class Request
{
    /**
     * @var string 统一请求前缀
    */
    public const PREFIX = 'Request';

    /**
     * @var string 申请方流水号 M 1~32
    */
    public $req_trace_num = '';

    /**
     * 组装签名
     * @param object $config
     * @param object $object
     *
     * @return object
    */
    public static function signCode(Config $config, object $object)
    {
        $sign_code = '';
        switch (get_class($object)) {
            case BatchSignTxFileUploadAction::class:
                $sign_code = SignUtil::getSign($config, $object->upload_file);
                break;
            case BatchSignTxFileDownloadAction::class:
                $sign_code = SignUtil::getSign($config, $object->inst_id . $object->trans_date . $object->batch_no);
                break;
            case BatchPurchaseFileUploadAction::class:
                $sign_code = SignUtil::getSign($config, $object->upload_file);
                break;
            case BatchPurchaseFileDownloadAction::class:
                $sign_code = SignUtil::getSign($config, $object->inst_id . $object->trans_date . $object->batch_no);
                break;
            case BatchRepaymentFileUploadAction::class:
                $sign_code = SignUtil::getSign($config, $object->upload_file);
                break;
            case BatchRepaymentFileDownloadAction::class:
                $sign_code = SignUtil::getSign($config, $object->inst_id . $object->trans_date . $object->batch_no);
                break;
            case BrokerReconFileUpload::class:
                break;
            case BatchTxQuery::class:
                $sign_code = SignUtil::getSign($config, $object->inst_id . $object->bus_code . $object->processing_code . $object->begin_time . $object->end_time);
                break;
            case OrgDownloadReconFile::class:
                $sign_code = SignUtil::getSign($config, $object->inst_id . $object->trans_date . $object->file_type);
                break;
            default:
                break;
        }

        if (!empty($sign_code)) {
            $object->sign_code = $sign_code;
        }

        return $object;
    }
}
