<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('post.create', function ($user) {
            return $user->role === 'admin' || $user->role === 'editor';
        });

        Gate::define('post.delete', function ($user, $post) {
            return $user->role === 'admin' || $user->id === $post->user_id;
        });
    }
}
