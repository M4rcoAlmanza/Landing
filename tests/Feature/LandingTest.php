<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/lp');

        $response->assertStatus(200);
    }
    /**@test*/
    public function prueba_formulario_codigo()
    {
        $response = $this->get('/form');
        // $response->assertSeeText('CONTACTO');
        $response->assertStatus(201);
    }
}
