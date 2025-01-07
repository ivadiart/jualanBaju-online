<?php

if (!function_exists('nominal')) {
    function nominal($angka)
    {
        return number_format($angka, 0, ',', '.');
    }
}