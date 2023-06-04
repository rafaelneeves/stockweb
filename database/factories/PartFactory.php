<?php

namespace Database\Factories;

use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    protected $model = Part::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number_part' => rand(100000, 999999),
            'name' => fake()->word(),
            'brand_id' => rand(1, 10),
            'company_id' => rand(1, 10),
            'amount' => rand(0, 100),
            'price' => fake()->randomFloat(2),
        ];
    }
}
