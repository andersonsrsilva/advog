<?php

namespace App\Helpers;

class StringUtils
{
    public static function clean($string) {
        $string = str_replace(' ', '-', $string);
        return str_replace(array('%', '@', '\'', ';', '<', '>', '-', '.', '(', ')'), '', $string);
     }
}
