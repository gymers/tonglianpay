<?php

namespace Gymers\TonglianPay\Utils;

use Monolog\Handler\FirePHPHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class LogUtil
{
    public static function info($log_path, $message, $context)
    {
        $log = new Logger('tonglian');
        $log->pushHandler(new StreamHandler($log_path, Logger::INFO, true, 0777));
        $log->pushHandler(new FirePHPHandler());

        return $log->addInfo($message, $context);
    }
}
