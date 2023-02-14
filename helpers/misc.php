<?php
if (!function_exists('_debug_pre_print_r_')) {
    function _debug_pre_print_r_($var)
    {
        echo "<pre>";
        if (is_array($var)) {
            print_r($var);
        } else {
            var_dump($var);
        }
        echo "</pre>";
    }
}
if (!function_exists('_debug_var_dump_pre_')) {
    function _debug_var_dump_pre_($var)
    {
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}
if (!function_exists('_debug_pre_print_r_die_')) {
    function _debug_pre_print_r_die_($var)
    {
        _debug_pre_print_r_($var);
        die;
    }
}
if (!function_exists('_debug_var_export_')) {
    function _debug_var_export_($var)
    {
        echo "<pre>";
        var_export($var);
        echo "</pre>";
    }
}
