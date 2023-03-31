<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annoucement>
 */
class AnnoucementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
            'category'=> Category::factory(),
            'user'=> User::factory(),
            'slug'=>$this->faker->slug,
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->text
          
        ];
    }
}
