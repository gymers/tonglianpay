<?php

namespace Gymers\TonglianPay\Requests;

/**
 * 人像核验
 *
 * 用户银行预留手机号发生变更，通过生态圈提供的接口，变更生态圈中的已绑定卡的手机号码。
*/
class Request1074 extends Request
{
    /**
     * @var string 合作商户号
     * C 8~10
    */
    public $sub_merchant_id = '';

    /**
     * @var string 姓名
     * M 2~80
    */
    public $real_name = '';

    /**
     * @var string 证件类型
     * M 2 01：身份证
    */
    public $cer_type = '';

    /**
     * @var string 证件号码
     * M 1~25
    */
    public $cer_num = '';

    /**
     * @var string 人脸照
     * M 11 100KB以内base64
    */
    public $face_photo = '';
}
