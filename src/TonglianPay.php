<?php

namespace Gymers\TonglianPay;

use Gymers\TonglianPay\Application\Application;
use Gymers\TonglianPay\Application\Config;

class TonglianPay
{
    public static function config($config)
    {
        return new Application(new Config($config));
    }
}