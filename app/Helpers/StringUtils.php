<?php

namespace App\Helpers;

class StringUtils
{
    public static function clean($string) {
        return str_replace(array('%', '@', '\'', ';', ' ', '<', '>', '-', '.', '(', ')'), '', $string);
     }

    public static function cleanMoney($string) {
        $string = str_replace('.', '', $string);
        return str_replace(',', '.', $string);
    }
}
