<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        $email = $faker->email;
        $nickname = strtok($email, "@");
        return [
            'lead_name' => $faker->name,
            'lead_email' => $email,
            'lead_nickname' => $nickname,
            'lead_cellphone' => '3004445556',
            'lead_age' => 55                
        ];
    }
}
