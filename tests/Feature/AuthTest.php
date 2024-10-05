<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    /** @test */
    public function adminCanLoginWithCorrectCredentials()
    {
        $user = User::create([
            'name' => 'adminexamp',
            'email' => 'admin@example.com',
            'password' => 'password123',
            'email_verified_at' => now(),
        ]);

        $response = $this->post('/login', [
            'email' => 'admin@example.com',
            'password' => 'password123',
        ]);

        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function loginFailsWithIncorrectCredentials()
    {
        $user = User::create([
            'name' => 'adminexamp',
            'email' => 'admin1@example.com',
            'password' => 'password123',
            'email_verified_at' => now(),
        ]);

        $response = $this->post('/login', [
            'email' => 'admin1@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }
}
