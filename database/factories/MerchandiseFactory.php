<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandise>
 */
class MerchandiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand_name' => fake() ->name(),
            'product_name' => fake() ->name(),
            'retail_price' => fake()->numberBetween(1,10000),
            'wholesale_price' => fake()->numberBetween(1000,1000000),
            'wholesale_qty' =>fake()->numberBetween(1,700),
            'qty_stock' => fake()->numberBetween(1000,5000),
            'category_id' => fake()->numberBetween(1,5),
            'unit_id' =>fake()->numberBetween(1,5)

        ];
    }
}
