<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'image_url' => fake()->imageUrl(640, 480, 'animals', true),
            'sku'   => '123abc',
            'price' => '99.99',
            'category' => fake()->lastName(),
            'active' => '1'
        ];
    }
}
