<?php

use Illuminate\Support\Facades\DB;

if (!function_exists('PrayuktySelect')) {
    function PrayuktySelect($model_name,$field_name,$where)
    {
        try {
            if ($where === 'all') {
                $response = $model_name::all();
            }
            else {
                //DB::enableQueryLog(); // Enable query log

                // Your Eloquent query executed by using get()

                $response = $model_name::where($field_name,$where)->get();

                //dd(DB::getQueryLog());
            }
            return $response;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

if (!function_exists('PrayuktySelectOrderBy')) {
    function PrayuktySelectOrderBy($model_name,$field_name,$where,$orderBy,$parameter)
    {
        try {
            if ($where=='all') {
                $response = $model_name::orderBy($orderBy, $parameter)->get();
            }
            else {
                $response = $model_name::where($field_name,$where)->orderBy($orderBy, $parameter)->get();
            }
            return $response;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

if (!function_exists('PrayuktySelectOne')) {
    function PrayuktySelectOne($model_name,$field_name,$where)
    {
        try {
            $response = $model_name::where($field_name,$where)->first();
            return $response;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
