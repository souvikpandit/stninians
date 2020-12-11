<?php

if (!function_exists('PrayuktySelect')) {
    function PrayuktySelect($model_name,$field_name,$where)
    {
        try {
            if ($where=='all') {
                $response = $model_name::all();
            }
            else {
                $response = $model_name::where($field_name,$where)->get();
            }
            return $response;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
