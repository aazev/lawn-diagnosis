<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void {
        parent::setUp();

        config([
            'filesystems.disks.avatars.root' => storage_path('framework/testing/disks/testing')
        ]);
    }

    public function test_it_user_can_register(): void
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->postJson('/api/register', $userData);

        $response->assertStatus(201)
                 ->assertJson([
                    'message' => 'Successfully created user!',
                    'user' => [
                        'name' => 'John Doe',
                        'email' => 'johndoe@example.com',
                        'id' => true,
                        'created_at' => true,
                        'updated_at' => true,
                    ]
                ]);

        $this->assertDatabaseHas('users', ['email' => 'johndoe@example.com']);
    }

    public function test_it_returns_generated_avatar_if_user_does_not_have_one(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get("/api/user/avatar");

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'image/png'); // Assuming the generated avatar is a PNG. Adjust if needed.
    }

    public function test_it_returns_user_chosen_avatar_if_set(): void
    {
        // Fake the storage for avatars
        Storage::fake('avatars');

        $file = UploadedFile::fake()->image('avatar.jpg');

        // Store the fake image to a user's avatar
        $user = User::factory()->create(['avatar' => $file->store('/', 'avatars')]);

        $response = $this->actingAs($user)->get("/api/user/avatar");

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'image/jpeg'); // Assuming the uploaded avatar is a JPG. Adjust if needed.

        // Assert the file was returned
        Storage::disk('avatars')->assertExists($user->avatar);
    }
}
