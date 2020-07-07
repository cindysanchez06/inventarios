<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class createUserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function user_create_user()
    {
        $this->withoutExceptionHandling();
        $this->post(route('usuario.store'), ['name' => 'Katherine', 'email' => 'katherine@gmail.com', 'password' => '123456', 'rol_id' => 2]);
        $this->assertDatabaseHas('users', [
            'name' => 'Katherine'
        ]);
    }
}
