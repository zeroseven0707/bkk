<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ticket' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,3),
            'petugas_id' => mt_rand(1,4)

            
            // 'excerpt' => $this->faker->paragraph(),
            // // 'body' => '<p>'.implod('</p><p>',$this->faker->paragraph(mt_rand(5,10))).'</p>',
            // 'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
            //             ->map(fn($p) => "<p>$p</p>")
            //             ->implode(''),

        ];
    }
}
