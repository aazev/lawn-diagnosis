<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiTokenControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_token(): void
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => 'password'
        ]);

        $response = $this->actingAs($user)->postJson('/api/token', [
            'email' => 'test@example.com',
            'password' => 'password',
            'device_name' => 'test-device'
        ]);

        $response->assertStatus(200);
        $this->assertNotEmpty($response->content());
    }

    public function test_it_can_delete_specific_token(): void
    {
        $user = User::factory()->create();
        $tokenResult = $user->createToken('test-device');
        $token = $tokenResult->plainTextToken;
        $tokenId = $tokenResult->accessToken->id;

        $response = $this->actingAs($user)->deleteJson("/api/token/{$tokenId}");

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Token deleted']);
    }

    public function test_it_cannot_delete_nonexistent_token(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->delete('/api/token/9999'); // Assuming no token with ID 9999 exists

        $response->assertStatus(404);
    }

    public function test_it_can_delete_all_tokens(): void
    {
        $user = User::factory()->create();
        $user->createToken('test-device-1')->plainTextToken;
        $user->createToken('test-device-2')->plainTextToken;

        $response = $this->actingAs($user)->delete('/api/token');

        $response->assertStatus(200);
        $this->assertCount(0, $user->tokens()->get());
    }
}

