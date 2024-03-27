<?php

namespace App\Providers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Arlert;
use App\View\Components\Inputs\Button;
// use App\View\Components\Forms\Button as FormButton;

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
        // Blade::directive('datatime', function ($expression) {
        //     $expression = trim($expression, '\'');
        //     $expression = trim($expression, '"');
        //     $dateObject = date_create($expression);

        //     if (!empty($dateObject)) {
        //         $dateFormat = $dateObject-> format('d/m/Y H:i:s');
        //         return $dateFormat ;
        //     }
        //     return false;
        // });
        Blade::if('env',function($value) {
            if(config('app.env') === $value){
                return true;
            }
            return false;
        });
        Blade::component('alert', Arlert::class);
        Blade::component('button', Button::class);
        //Blade::component('form-button', FormButton::class);
    }
}
