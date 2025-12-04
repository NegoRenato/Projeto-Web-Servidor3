<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Contracts\LoginResponse;
use Illuminate\Http\RedirectResponse;

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
        // Lógica para mudar o redirecionamento do Login
        $this->app->instance(LoginResponse::class, new class implements LoginResponse {
            public function toResponse($request)
            {
                // TROQUE '/minha-pagina-segura' PELA URL QUE VOCÊ CRIOU
                return redirect('/minha-pagina-segura');
            }
        });
    }
}
