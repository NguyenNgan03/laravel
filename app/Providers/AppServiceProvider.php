<?php

namespace App\Providers;
use App\View\Components\Alert;

use App\View\Components\Inputs\Button;
// use App\View\Components\Forms\Button as FormButton;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
        //
        // Blade::directive('datetime', function ($expression) {
        //     $expression = trim($expression,'\'');
        //     $expression = trim($expression, '"');

        //     $dateObject = date_create($expression);
        //     if (!empty($dateObject)) {
        //         $dateFormat =  $dateObject->format('d/m/Y H:i:s');
        //         return $dateFormat ;
        //     }
        //     return false;
        // });

        Blade::if('env', function ($value) {
            if (config('app.env') == $value){
                return true;
            }
            return false;
        });

        Blade::component('package-alert', Alert::class);
        Blade::component('button', Button::class);
        // Blade::component('forms-button',FormButton::class);


    }
}
