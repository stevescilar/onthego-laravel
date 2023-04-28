<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' =>fake()->name($gender ='male'|'female'),
           'company_name' =>fake()->company,
           'contact' =>fake()->phoneNumber,
           'email' =>fake()->email
        ];
    }
}
