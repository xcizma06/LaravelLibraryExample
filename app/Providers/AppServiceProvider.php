<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {
        Factory::guessFactoryNamesUsing(function ($className) {
            return 'Database\\Factories\\' . class_basename($className) . 'Factory';
        });
    }

    public function boot(): void {
        //
    }
}
