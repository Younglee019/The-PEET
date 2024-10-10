<?php

if (!function_exists('format_visitor_count')) {
    function format_visitor_count($count) {
        if ($count >= 1_000_000) {
            return number_format($count / 1_000_000, 1) . 'm';
        } elseif ($count >= 1_000) {
            return number_format($count / 1_000, 1) . 'k';
        } else {
            return $count;
        }
    }
}

