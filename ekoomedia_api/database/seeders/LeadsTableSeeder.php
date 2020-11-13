<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Lead;

class LeadsTableSeeder extends Seeder
{    
    //Llenano de la tabla de leads con 10 registros de pruebba
    public function run()
    {        
        Lead::truncate();

        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 10; $i++) {
            $email = $faker->email;
            $nickname = strtok($email, "@");
            Lead::create([
                'lead_name' => $faker->name,
                'lead_email' => $email,
                'lead_nickname' => $nickname,
                'lead_cellphone' => '3004445556',
                'lead_age' => 55                
            ]);
        }
    }
}
