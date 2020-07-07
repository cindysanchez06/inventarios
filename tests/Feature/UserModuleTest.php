<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    function listUsers()
    {
        $response = $this->get('/usuario');
        $response->assertStatus(200);
    }

    function editUser()
    {
        $response = $this->get('/usuario/1/edit');
        $response->assertStatus(200);
        $response->assertSee("Editando el usuario: {$id}");
    }

    function createUser()
    {
        $response = $this->get('/usuario/create');
        $response->assertStatus(200);
    }


}
