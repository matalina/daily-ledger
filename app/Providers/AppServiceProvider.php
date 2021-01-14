<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(preg_match('/gitpod.io/',config('app.url'))) {
            \URL::forceRootUrl(config('app.url'));
            if (\Str::contains(\config('app.url'), 'https://')) {
                \URL::forceScheme('https');
            }
        }
    }
}
