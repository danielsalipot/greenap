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
        View::composer(['inc.more-posts-carousel'],
            function ($view){
                $posts = Post::with('users','assets')
                            ->where('featured',0)
                            ->where('visibility',1)
                            ->where('status',1)
                            ->orderBy('created_at','desc')
                            ->get();

                $view->with('posts',$posts);
        });

        View::composer(['home','about'],
            function ($view){
                $sponsor_member = Sponsor::where('tier','member')->get();
                $sponsor_partner = Sponsor::where('tier','partner')->get();

                $view->with('sponsor_member', $sponsor_member)
                    ->with('sponsor_partner', $sponsor_partner);
            });

        View::composer(['inc.featured-posts-carousel','post'], function ($view){
            $ftPosts = Post::with('users', 'assets')
                            ->where('featured', 1)
                            ->where('status', 1)
                            ->where('visibility',1)
                            ->orderBy('updated_at', 'desc')
                            ->get();

            $view->with('ftPosts',$ftPosts);

        });
    }
}
