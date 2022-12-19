<?php

namespace App\Providers;

use App\Models\Story;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'layouts.app', function ($view) {
                $view->with([
                    'stories'=>  Story::all(),
                ]);
            }
        );
        Paginator::useBootstrap();
    }
}
