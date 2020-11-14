<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Lead;

class LeadTest extends TestCase
{
    private $dummy_lead = array(
        'lead_name' => 'test_name',
        'lead_email' => 'test@test.com',
        'lead_nickname' => 'test',
        'lead_cellphone' => '3004445556',
        'lead_age' => 55 
    );
    /**
     * Prueba de función para guardar el lead
     *
     * @return void
     */
    public function testsLeadsAreCreatedCorrectly()
    {
        $this->withoutExceptionHandling();
        $payload = $this->dummy_lead; 

        $this->json('POST', '/api/leads', $payload)
            ->assertStatus(201)
            ->assertJson($this->dummy_lead);        
    }
    /**
     * Prueba de función para eliminar el lead
     * 
     * @return void
     */
    public function testsLeadsAreDeletedCorrectly()
    {               
        $lead = Lead::factory()->create();

        $this->json('DELETE', '/api/leads/' . $lead->id, [])
            ->assertStatus(204);
    }
    /**
     * Prueba de función para listar los leads
     * 
     * @return void
     */
    public function testLeadsAreListedCorrectly()
    {
        Lead::factory()->create();

        $response = $this->json('GET', '/api/leads', [])
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['id', 
                    'lead_name', 
                    'lead_email', 
                    'lead_nickname',
                    'lead_cellphone',
                    'lead_age',
                    'created_at', 
                    'updated_at'],
            ]);
    }
}
