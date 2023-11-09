<?php

namespace Gymers\TonglianPay\Responses;

class Response3009 extends Response
{
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
     * @var string 查询结果
     * 以 JSON 方式返回,具体见下个章节<JSON 报文>。
     *
     * JSON 报文
     * bnk_id 银行编码
     * acct_num 账号
     * acct_sub_no 交易子账号
     * packet_id 转账中间账户 ID
     * total_amount 转账申请总金额
     * remain_amount 转账申请剩余金额
     * total_num 转入方总个数
     * remain_num 待确认个数
     * expire_hour 有效期 小时
    */
    public $qur_rst = '';
}
