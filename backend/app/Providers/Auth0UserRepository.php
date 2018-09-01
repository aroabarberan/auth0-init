<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Auth0UserRepository extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            Auth0\Login\Contract\Auth0UserRepository::class,
            Auth0\Login\Repository\Auth0UserRepository::class
        );
    }
}
