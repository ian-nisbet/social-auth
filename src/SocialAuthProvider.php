<?php

namespace IanNisbet\SocialAuth;

use Illuminate\Support\ServiceProvider;

class SocialAuthProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        $this->loadRoutesFrom(__DIR__.'/../routes/social-auth.php');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/social-auth.php', 'social-auth');
    }
}
