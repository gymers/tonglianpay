<?php

namespace Gymers\TonglianPay\Responses;

class Response3002 extends Response
{
    /**
     * @var string 合作商户号
    */
    public $sub_merchant_id = '';

    /**
     * @var string 通联会员号
    */
    public $sign_num = '';

    /**
     * @var string 银行编码
    */
    public $bnk_id = '';

    /**
     * @var string 账号
    */
    public $acct_num = '';

    /**
     * @var string 账户状态
    */
    public $acct_status = '';

    /**
     * @var string 查询结果
     * 以 JSON 方式返回,具体见下个章节<JSON 报文>。
     *
     * JSON 报文
     * bnk_id 银行编码
     * acct_num 账号
     * totalAmount 总金额
     * available_amt 可用资金
     * freeze_amt 冻结可用资金
     * disposable_amt 可取资金
     * freeze_withdraw_amt 冻结可取资金
    */
    public $qur_rst = '';
}
