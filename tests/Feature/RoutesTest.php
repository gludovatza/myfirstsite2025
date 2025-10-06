<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_basic_routes(): void
    {
        $response = $this->get('/');

        $response->assertViewIs('welcome');
    }

    function test_contact_route_exists() : void 
    {
        $response = $this->get('/contact');
        
        $response->assertStatus(200);
        $response->assertOk();
    }

    function test_contac_route_not_exists() : void 
    {
        $response = $this->get('/contac');
        
        $response->assertStatus(404);
        $response->assertNotFound();
    }

    function test_udvozlesen_lathato_a_nev() : void 
    {
        $response = $this->get('/udvozles');

        $response->assertSee('Attila');
    }

    function test_felhasznaloi_adat_lathato_e() : void
    {
        $response = $this->get('/felhasznaloiadat?felhasznalonev=gattila');

        $response->assertSee('gattila');
    }
}
