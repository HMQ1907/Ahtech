<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginFeatureTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testUserCanLoginWithValidCredentials()
    {
        $user = User::factory()->create([
            'email' => 'testuser@example.com',
            'password' => Hash::make('password123'),
            'is_active' => 1,
            'is_delete' => 0,
        ]);

        $response = $this->post(route('login'), [
            'email' => 'testuser@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('product.index'));

        $this->assertAuthenticatedAs($user);
    }
}
