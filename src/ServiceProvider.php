<?php

namespace SanderVanHooft\BladeNl2Br;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as Base;

class ServiceProvider extends Base
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Blade::directive('nl2br', function ($expression) {
            return sprintf('<?php echo nl2br(e(%s)); ?>', $expression);
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
