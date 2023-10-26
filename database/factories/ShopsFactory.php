<?php

namespace Database\Factories;

use App\Models\Shops;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shops>
 */
class ShopsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Shops::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['chemical', 'googles', 'furniture', 'safety']),
            'condition' => $this->faker->randomElement(['bad', 'normal', 'good', 'excellent']),
            'description' => $this->faker->sentence,
            'defects' => $this->faker->text,
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'image' => $this->faker->imageUrl(), // You can customize this based on your requirements
        ];
    }
}
