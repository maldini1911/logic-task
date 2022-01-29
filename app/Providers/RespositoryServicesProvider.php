<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RespositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {   
        /** Start Repository Dashboard */
        $this->app->bind(
            'App\Http\Interfaces\AuthInterface',
            'App\Http\Repositories\AuthRepository'
        );

        /** Start Repository Admin */
        $this->app->bind(
            'App\Http\Interfaces\DashboardInterface',
            'App\Http\Repositories\DashboardRepository'
        );

        /** Start Repository Provider */
        $this->app->bind(
            'App\Http\Interfaces\StudentInterface',
            'App\Http\Repositories\StudentRepository'
        );

        /** Start Repository Location */
        $this->app->bind(
            'App\Http\Interfaces\StudentGradeInterface',
            'App\Http\Repositories\StudentGradeRepository'
        );

        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
