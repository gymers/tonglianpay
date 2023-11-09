<?php

namespace Gymers\TonglianPay\Responses;

class Response3001 extends Response
{
    /**
     * @var string 原交易流水号
     * 原交易 req_trace_num
    */
    public $org_req_trace_num = '';

    /**
     * @var string 原交易通联流水号
     * 原交易 resp_trace_num
    */
    public $org_resp_trace_num = '';

    /**
     * @var string 原交易日期
     * 原交易 trans_date
    */
    public $org_trans_date = '';

    /**
     * @var string 原交易订单
     * 原交易 order_num
    */
    public $org_order_num = '';

    /**
     * @var string 原交易返回码
     * 0000：交易成功
    */
    public $qur_rst = '';

    /**
     * @var string 原交易返回信息
    */
    public $qur_rst_msg = '';

    /**
     * @var string 原银行商户流水
     * 若原交易有该流水信息，则查询返回
    */
    public $bank_req_code = '';

    /**
     * @var string 原交易银行渠道流水
     * 若原交易有该流水信息，则查询返回
    */
    public $channel_trade_code = '';

    /**
     * @var string 原通联会员号
     * 只有原交易是开户交易且交易成功时有值
    */
    public $org_sign_num = '';

    /**
     * @var string 原交易子账户
     * 只有原交易是开户交易且交易成功时有值
    */
    public $org_acct_sub_num = '';

    /**
     * @var string 原交易交易工作日
    */
    public $org_date_settlmt = '';

    /**
     * @var string 原银行编码
     * 只有原交易是开户交易且交易成功时有值
    */
    public $org_bnk_id = '';

    /**
     * @var string 原账户类型
     * 只有原交易是开户交易且交易成功时有值
    */
    public $org_acct_type = '';

    /**
     * @var string 原账号
     * 只有原交易是开户交易且交易成功时有值
    */
    public $org_acct_num = '';

    /**
     * @var string 原掩码账号
     * 只有原交易是开户交易开户类型为 6：银联云闪付一键绑卡且交易成功时有值
    */
    public $org_mask_acct_num = '';

    /**
     * @var string 原手机号码
     * 只有原交易是开户交易且交易成功时有值
    */
    public $org_tel_num = '';

    /**
     * @var string 原掩码手机号
     * 只有原交易是开户交易开户类型为 6：银联云闪付一键绑卡且交易成功时有值
    */
    public $org_mask_tel_num = '';

    /**
     * @var string 原 token 失效时间
     * 只有原交易是开户交易开户类型为 6：银联云闪付一键绑卡且交易成功时有值
    */
    public $org_token_expire_time = '';
}
