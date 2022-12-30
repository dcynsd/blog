<?php

namespace App\Providers;

use App\Models\Post;
use App\Observers\PostObserver;
use App\Services\NavigationService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::share('navigations', app(NavigationService::class)->getNavBars());
        View::share('currentPost', null);
        View::share('currentModel', null);

        $this->registerObservers();
    }

    private function registerObservers()
    {
        Post::observe(PostObserver::class);
    }
}
