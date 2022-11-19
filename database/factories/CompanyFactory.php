<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'active'=>rand(0,1),
            'description' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro alias ratione fuga repellat dolores mollitia? Harum accusantium possimus expedita natus, nobis, molestias aperiam facilis doloribus, ut officiis reiciendis asperiores saepe.',
        ];
    }
}
