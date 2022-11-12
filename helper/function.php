<?php

if (!function_exists('cleanData')) {
    function cleanData(&$val)
    {
        return is_array($val) ? array_map('cleanData', $val) : htmlentities(stripslashes(strip_tags(trim($val))), ENT_QUOTES);
    }
}
