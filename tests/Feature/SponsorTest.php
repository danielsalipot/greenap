<?php

namespace Tests\Feature;

use App\Models\Sponsor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class SponsorTest extends TestCase
{
    use RefreshDatabase;

    //PAGE RETURN TESTS

    public function test_sponsor_index_page_is_working_and_data_is_passed_correctly(): void
    {
        $sponsor = Sponsor::factory()->create();

        $response = $this->get('/admin/sponsor');
        $response->assertStatus(200);

        $response->assertViewHas('sponsors', function ($collection) use ($sponsor) {
            return $collection->contains($sponsor);
        });
    }

    public function test_sponsor_show_route_is_successful_and_data_is_passed_correctly(): void
    {
        $sponsor = Sponsor::factory()->create();
        $response = $this->get("/admin/sponsor/$sponsor->id");

        $response->assertStatus(200);
        $response->assertViewHas('sponsor', function ($collection) use ($sponsor) {
            return $collection->id == $sponsor->id;
        });
    }

    public function test_sponsor_edit_route_is_successful_and_data_is_passed_correctly(): void
    {
        $sponsor = Sponsor::factory()->create();
        $response = $this->get("/admin/sponsor/$sponsor->id/edit");

        $response->assertStatus(200);
        $response->assertViewHas('sponsor', function ($collection) use ($sponsor) {
            return $collection->id == $sponsor->id;
        });
    }

    // CRUD ROUTES TESTS

    public function test_sponsor_store_with_proper_data_is_successful(): void
    {
        Storage::fake('public');
        $sponsor = [
            'name' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'tier' => "member",
        ];
        $file = UploadedFile::fake()->create('test_file.jpg');
        $data = array_merge($sponsor, ['logo' => $file]);
        $response = $this->post('/admin/sponsor', $data);

        $response->assertRedirect('/admin/sponsor');
    }

    public function test_sponsor_store_with_missing_data_is_unsuccessful(): void
    {
        $sponsor = [
            'name' => fake()->words(3, true),
            'tier' => "member",
        ];

        $response = $this->post('/admin/sponsor', $sponsor);
        $response->assertRedirect();
        $this->assertDatabaseMissing('sponsors', $sponsor);
    }

    public function test_sponsor_update_with_proper_data_is_successful(): void
    {
        $sponsor = Sponsor::factory()->create();
        $update_data = [
            'name' => 'New Sponsor',
            'description' => 'New Description',
            'tier' => 'new tier',
        ];

        $file = UploadedFile::fake()->create('test_file.jpg');
        $data = array_merge($update_data, ['logo' => $file]);

        $response = $this->put("/admin/sponsor/$sponsor->id", $data);
        $response->assertRedirect();

        $this->assertDatabaseHas('sponsors', $update_data);
    }

    public function test_sponsor_delete_is_successful(): void
    {
        $sponsor = Sponsor::factory()->create();
        $response = $this->delete("/admin/sponsor/$sponsor->id");

        $response->assertRedirect();
        //check if data has been deleted from database
        $this->assertNull(Sponsor::find($sponsor->id));
    }
}
