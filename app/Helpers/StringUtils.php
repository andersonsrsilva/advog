<?php

namespace App\Helpers;

class StringUtils
{
    public static function clean($string) {
        return str_replace(array('%', '@', '\'', ';', ' ', '<', '>', '-', '.', '(', ')'), '', $string);
     }
}
