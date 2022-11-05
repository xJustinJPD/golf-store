<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bag>
 */
class BagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'make' => $this->faker->text(50),
            'bag_image' => "public\images\golfbag_placeholder.jpg",
            'desc' => $this->faker->text(200),
            'type' => $this->faker->text(25)
        ];
    }
}
