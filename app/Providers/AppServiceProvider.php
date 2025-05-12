<?php

namespace App\Providers;

use App\Models\TransportType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrapFive();
        Model::preventLazyLoading(!$this->app->isProduction());

        View::composer('app.nav', function ($view) {
            $transportTypes = TransportType::orderBy('id')
                ->get();

            $view->with([
                'transportTypes' => $transportTypes,
            ]);
        });
    }
}
