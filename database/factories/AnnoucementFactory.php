<?php

namespace Database\Factories;

use App\Models\Category;
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
            'slug'=>$this->faker->slug,
            'tags'=>$this->faker->word,
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->text
          
        ];
    }
}
