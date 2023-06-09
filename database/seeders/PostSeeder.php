<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostAsset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->count(60)->create();

        $posts = Post::all();

        $assets_batch = [];
        foreach ($posts as $post) {
            $limit = rand(1, 3);
            for ($i = 0; $i < $limit; $i++) {
                $assets_batch[] = [
                    'post_id' => $post->id,
                    'link' => 'samples/post/image_' . rand(1, 3) . '.jpg'
                ];
            }
        }

        PostAsset::insert($assets_batch);
    }
}
