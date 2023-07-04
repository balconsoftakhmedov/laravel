<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('example', function( $view ){
            $view->with('amount', 15);
      $view->with('sum', 150);
        });
        Blade::directive('mycurrencys', function($expression){
                 [$amount, $currency] = array_map('trim', explode(',', $expression));

        // Возвращаем сформированную строку
        return "<?php echo number_format($amount, 2) . ' ' . strtoupper($currency); ?>";

        });
    }
}
