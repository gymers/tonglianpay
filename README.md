# 通联支付sdk

## 环境要求

php >= 7.1

## 安装

```shell
composer require gymers/tonglianpay
```

## 示例程序一：微信被扫支付

```php
<?php
  
use Gymers\TonglianPay\Requests\Request2085;
use Gymers\TonglianPay\TonglianPay;

$config = [
    'inst_id' => '', // 机构编码
    'public_key_path' => '', // 公钥证书路径
    'private_key_path' => '', // 私钥证书路径
    'private_key_password' => '', // 私钥证书密码
    'random_number' => '', // 24位随机数
    'serial_number' => '', // 通联公钥序列号
    'platform_serial_number' => '', // 平台序列号
    'log_path' => '/logs/tonglian.log', // 日志文件
];

$request = new Request2085();  // Request+接口代码
$request->req_trace_num = '';
$request->purchase_type = '4';
$request->pay_mode = 'K';
$request->bnk_id = 'W';
$request->cur_type = '156';
$request->pay_amount = '';
$request->sep_detail = json_encode([[
    'sep_no' => '',
    'sep_acct_type' => '',
    'sep_merch_code' => '',
    'sep_bank_id' => '',
    'sep_acct_num' => '',
    'sep_pay_amount' => '',
    'product_name' => '',
]]);
$request->order_valid_time = '';
$request->pay_auth_code = '';
$request->mcht_no = '';
$request->prod_import_flag = '0';
$request->order_num = '';
$request->resp_url = '';

$response = TonglianPay::config($config)->request('', $request);
```

## 示例程序二：文件联机下载

```php
<?php

use Gymers\TonglianPay\Requests\OrgDownloadReconFile;
use Gymers\TonglianPay\TonglianPay;

$config = [
    'inst_id' => '', // 机构编码
    'public_key_path' => '', // 公钥证书路径
    'private_key_path' => '', // 私钥证书路径
    'private_key_password' => '', // 私钥证书密码
    'random_number' => '', // 24位随机数
    'serial_number' => '', // 通联公钥序列号
    'platform_serial_number' => '', // 平台序列号
    'log_path' => '/logs/tonglian.log', // 日志文件
];

$request = new OrgDownloadReconFile(); // 文件相关接口对应通联接口方法
$request->trans_date = '';
$request->file_type = '';

$response = TonglianPay::config($config)->request('', $request);
file_put_contents('1.zip', $response);
```



## 特别说明

> 1.通联接口文档分为商户类接口和交易类接口，两者各有独属的接口请求地址。但部分接口拥有单独的请求地址，且商户类接口和交易类接口存在个别接口请求地址互相调用，所以这里目前没有做单独的接口请求地址封装，需开发者自行参照通联接口文档要求填入request()方法里面uri参数。

> 2.通联目前支持RSA签名和SM3withSM2签名，目前该sdk仅支持RSA签名，请开发者在与通联对接时下载RSA相关证书。（注：如果有开发者找到SM3withSM2签名相关方法，可邮箱告知，这边做相对应的更新升级）
