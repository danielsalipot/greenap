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
                $sponsors = Sponsor::all();

                $view->with('posts',$posts)
                    ->with('sponsors',$sponsors);
        });
    }
}
