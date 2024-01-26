<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' =>$this->faker->numberBetween(1, 2), // 1または2
            'name' => $this->faker->name,
            'information' => $this->faker->realText,
            'price' => $this->faker->numberBetween(1,10000),
            'sort_order' => function () {
                return rand(1, 100); // 適切な範囲を設定
            },
            'is_selling' => $this->faker->boolean
        ];
    }
}
