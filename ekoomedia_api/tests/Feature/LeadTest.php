<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeadTest extends TestCase
{
    /**
     * Prueba de función para guardar el lead
     *
     * @return void
     */
    public function testsLeadsAreCreatedCorrectly()
    {
        $this->withoutExceptionHandling();
        $payload = [
            'lead_name' => 'test_name',
            'lead_email' => 'test@test.com',
            'lead_nickname' => 'test',
            'lead_cellphone' => '3004445556',
            'lead_age' => 55                
        ];

        $this->json('POST', '/api/leads', $payload)
            ->assertStatus(200)
            ->assertJson(['id' => 1, 
                'lead_name' => 'test_name',
                'lead_email' => 'test@test.com',
                'lead_nickname' => 'test',
                'lead_cellphone' => '3004445556',
                'lead_age' => 55
            ]);        
    }
}
