<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Sponsor;
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
        View::composer(['inc.more-posts-carousel','home'], function ($view){
            $posts = Post::with('assets','users')->get();
            $sponsors = Sponsor::all();
                $view->with('posts',$posts);
                $view->with('sponsors',$sponsors);
        });
    }
}
