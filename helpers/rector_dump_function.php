<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

if (!function_exists('rd')) {
    function rd($var) {
        array_map([Tracy\Debugger::class, 'dump'], func_get_args());
        return $var;
    }
}

if (!function_exists('rdd')) {
    function rdd($var) {
        rd($var);
        die;
    }
}
