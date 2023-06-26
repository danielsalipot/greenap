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
        View::composer(['inc.more-posts-carousel',
                        'home',
                        'post',
                        'show'],
            function ($view){
                $posts = Post::with('users','assets')->get();
                $sponsor_member = Sponsor::where('tier','member')->get();
                $sponsor_partner = Sponsor::where('tier','partner')->get();
                $view->with('posts',$posts)
                    ->with('sponsor_member', $sponsor_member)
                    ->with('sponsor_partner', $sponsor_partner);
        });
    }
}
