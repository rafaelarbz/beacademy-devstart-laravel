<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $user->password
        ]);

        $this->actingAs($user);

        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    public function test_user_create()
    {
        $response = $this->post('/login/create', [
            'name' => 'Admin',
            'email' => 'admin@email.com.br',
            'password' => '123pass',
            'is_admin' => 1,
        ]);

        $response->assertStatus(200);
    }
}