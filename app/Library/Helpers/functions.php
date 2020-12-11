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
