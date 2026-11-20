<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => fake()->imageUrl(),
            'position' => function (array $attributes) {
                return Car::find($attributes['car_id'])->images()->count() + 1;
            }
        ];
    }
}
