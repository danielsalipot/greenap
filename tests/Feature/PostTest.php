<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    //PAGE RETURN TESTS

    public function test_post_index_page_is_working(): void
    {
        $response = $this->get('/admin/post');
        $response->assertStatus(200);

        // $post = Post::factory()->create();
        // $response->assertViewHas('posts', function ($collection) use ($post) {
        //     return $collection->contains($post);
        // });
    }

    public function test_post_show_route_is_successful(): void
    {
        $post = Post::factory()->create();
        $response = $this->get("/admin/post/$post->id");
        $response->assertStatus(200);
    }

    public function test_post_edit_route_is_successful(): void
    {
        $post = Post::factory()->create();
        $response = $this->get("/admin/post/$post->id/edit");
        $response->assertStatus(200);
    }

    // CRUD ROUTES TESTS

    public function test_post_store_with_proper_data_is_successful(): void
    {
        $post = [
            'user_id' => 1,
            'title' => fake()->text(100),
            'description' => fake()->paragraph(),
        ];

        $response = $this->post('/admin/post', $post);

        $response->assertRedirect('/admin/post');
        $this->assertDatabaseHas('posts', $post);
    }

    public function test_post_store_with_missing_data_is_unsuccessful(): void
    {
        $post = [
            'user_id' => 1,
            'title' => fake()->text(100),
        ];

        $response = $this->post('/admin/post', $post);
        $response->assertRedirect();
        $this->assertDatabaseMissing('posts', $post);
    }

    public function test_post_update_with_proper_data_is_successful(): void
    {
        $post = Post::factory()->create();
        $update_data = ['title' => 'New Title'];

        $response = $this->put("/admin/post/$post->id", $update_data);

        $response->assertStatus(200);
    }

    public function test_post_delete_is_successful(): void
    {
        $post = Post::factory()->create();
        $response = $this->delete("/admin/post/$post->id");

        $response->assertStatus(200);
    }
}
