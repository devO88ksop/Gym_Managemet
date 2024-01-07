<?php

namespace App\Providers;

use App\Interfaces\PromotionInterface;
use App\Repositories\PromotionRepository;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PromoController;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind( PromotionInterface::class,PromotionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
