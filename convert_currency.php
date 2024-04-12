<?php 
// chuyen doi thanh vnd
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "<span>{$suffix}</span>"; // <span>đ</span>
        }
    }
}
 //echo currency_format(3700, 'USD');
 // echo currency_format(70000000000);
