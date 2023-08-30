<?php

namespace Tests\Feature;

use App\Models\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageTest extends TestCase
{
    use RefreshDatabase;
    //PAGE RETURN TESTS

    public function test_message_index_page_is_working_and_data_is_passed_correctly(): void
    {
        $message = Message::factory()->create();

        $response = $this->get('/message');
        $response->assertStatus(200);

        $response->assertViewHas('messages', function ($collection) use ($message) {
            return $collection->contains($message);
        });
    }

    public function test_message_show_route_is_successful_and_data_is_passed_correctly(): void
    {
        $message = Message::factory()->create();
        $response = $this->get("/message/$message->id");

        $response->assertStatus(200);
        $response->assertViewHas('message', function ($collection) use ($message) {
            return $collection->id == $message->id;
        });
    }

    public function test_message_edit_route_is_successful_and_data_is_passed_correctly(): void
    {
        $message = Message::factory()->create();
        $response = $this->get("/message/$message->id/edit");

        $response->assertStatus(200);
        $response->assertViewHas('message', function ($collection) use ($message) {
            return $collection->id == $message->id;
        });
    }

    // CRUD ROUTES TESTS

    public function test_message_store_with_proper_data_is_successful(): void
    {
        $message = [
            'sender_name' => fake()->name(),
            'sender_email' => fake()->email(),
            'subject' => fake()->text(),
            'message' => fake()->paragraphs(3, true),
        ];

        $response = $this->post('/message', $message);

        $response->assertRedirect();
        $this->assertDatabaseHas('messages', $message);
    }

    public function test_message_store_with_missing_data_is_unsuccessful(): void
    {
        $message = [
            'subject' => fake()->text(),
            'message' => fake()->paragraphs(3, true),
        ];

        $response = $this->post('/message', $message);

        $response->assertRedirect();
        $this->assertDatabaseMissing('messages', $message);
    }

    public function test_message_update_with_proper_data_is_successful(): void
    {
        $message = Message::factory()->create();
        $update_data = [
            'sender_name' => fake()->name(),
            'sender_email' => fake()->email(),
            'subject' => fake()->text(),
            'message' => fake()->paragraphs(3, true),
        ];

        $response = $this->put("/message/$message->id", $update_data);
        $response->assertRedirect();

        //check if data has been updated
        $updated_message = Message::find($message->id);
        $this->assertTrue($updated_message->subject == $update_data['subject']);
    }

    public function test_message_delete_is_successful(): void
    {
        $message = Message::factory()->create();
        $response = $this->delete("/message/$message->id");

        $response->assertRedirect();
        //check if data has been deleted from database
        $this->assertNull(Message::find($message->id));
    }
}
