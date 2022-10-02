<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\ViewComposer\CategoryViewComposer;
use App\View\ViewComposer\RecentPostViewComposer;
use App\View\ViewComposer\TagViewComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('includes.partitials.category', CategoryViewComposer::class);
        view()->composer('includes.partitials.recentPost', RecentPostViewComposer::class);
        view()->composer('includes.partitials.tag', TagViewComposer::class);
    }
}
