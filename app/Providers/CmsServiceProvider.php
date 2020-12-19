<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $school_info = PrayuktySelectOne('App\Models\website\Post','type','sc_info');
        $principle_desk = PrayuktySelectOne('App\Models\website\Post','type','principle_desk');
        $about = PrayuktySelectOne('App\Models\website\Post','type','about');
        View::share(['school_info'=> $school_info,'principle_desk'=>$principle_desk,'about'=>$about]);
    }
}
