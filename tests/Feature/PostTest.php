<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    //PAGE RETURN TESTS

    public function test_post_index_page_is_working_and_data_is_passed_correctly(): void
    {
        $post = Post::factory()->create();

        $response = $this->get('/admin/post');
        $response->assertStatus(200);

        $response->assertViewHas('posts', function ($collection) use ($post) {
            return $collection->contains($post);
        });
    }

    public function test_post_show_route_is_successful_and_data_is_passed_correctly(): void
    {
        $post = Post::factory()->create();
        $response = $this->get("/admin/post/$post->id");

        $response->assertStatus(200);
        $response->assertViewHas('post', function ($collection) use ($post) {
            return $collection->id == $post->id;
        });
    }

    public function test_post_edit_route_is_successful_and_data_is_passed_correctly(): void
    {
        $post = Post::factory()->create();
        $response = $this->get("/admin/post/$post->id/edit");

        $response->assertStatus(200);
        $response->assertViewHas('post', function ($collection) use ($post) {
            return $collection->id == $post->id;
        });
    }

    // CRUD ROUTES TESTS

    public function test_post_store_with_proper_data_is_successful(): void
    {
        Storage::fake('public');
        $post = [
            'user_id' => 1,
            'title' => fake()->text(100),
            'description' => fake()->paragraph(),
        ];

        $file = UploadedFile::fake()->create('test_file.jpg');

        $response = $this->post('/admin/post', array_merge($post, ['images' => [$file]]));

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
        $update_data = [
            'title' => 'New Title',
            'description' => 'New Description'
        ];

        $file = UploadedFile::fake()->create('test_file.jpg');

        $response = $this->put("/admin/post/$post->id", array_merge($update_data, ['images' => [$file]]));
        $response->assertRedirect();

        //check if data has been updated
        $updated_post = Post::find($post->id);
        $this->assertTrue($updated_post->title == $update_data['title']);
    }

    public function test_post_delete_is_successful(): void
    {
        $post = Post::factory()->create();
        $response = $this->delete("/admin/post/$post->id");

        $response->assertRedirect();
        //check if data has been deleted from database
        $this->assertNull(Post::find($post->id));
    }
}
