<?php
if (!function_exists('debug_pre_print_r')) {
    function debug_pre_print_r($str)
    {
        echo "<pre>";
        if (is_array($str)) {
            print_r($str);
        } else {
            var_dump($str);
        }
        echo "</pre>";
    }
}
if (!function_exists('debug_vardump_pre')) {
    function debug_vardump_pre($str = '')
    {
        echo "<pre>";
        var_dump($str);
        echo "</pre>";
    }
}
if (!function_exists('debug_pre_print_r_die')) {
    function debug_pre_print_r_die($str = '')
    {
        debug_pre_print_r($str);
        die;
    }
}
