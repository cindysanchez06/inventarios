<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */
    function listUsers()
    {
        $response = $this->get('/usuario');
        $response->assertStatus(200);
    }

    /** @test */
    function editUser()
    {
        $response = $this->get('/usuario/1/edit');
        $response->assertStatus(200);
    }

    /** @test */
    function createUser()
    {
        $response = $this->get('/usuario/create');
        $response->assertStatus(200);
    }


}
