<?php

if (!function_exists('PrayuktyDateFormat')) {
    function PrayuktyDateFormat($created_at)
    {
        try {
            return $created_at->diffForHumans();
            return $response;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

if (!function_exists('GetDefaultImage')) {
    function GetDefaultImage()
    {
        try {
            return 'website-assets/images/about/history.jpg';
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

if (!function_exists('GetDefaultText')) {
    function GetDefaultText()
    {
        try {
            return "Powerd By Prayukty";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

if (!function_exists('GetDefaultSession')) {
    function GetDefaultSession()
    {
        try {
            return "2021-2022";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
