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
    public function definition()
    {
        $updatedAt = fake()->dateTimeBetween('2017-01-01', 'now', 'Asia/Shanghai');
        $createdAt = fake()->dateTimeBetween($updatedAt, 'now', 'Asia/Shanghai');

        $images = [
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/vdysjx.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/1cm6iu.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/sdqryn.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/n7a9bv.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/4xvpqo.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/73twhs.png?w=1920',
        ];

        return [
            'category_id' => fake()->randomElement([1, 2, 3, 4]),
            'title' => fake()->sentence(),
            'sub_title' => fake()->sentence(),
            'image' => fake()->randomElement($images),
            'content' => fake()->paragraphs(7, true),
            'is_issued' => true,
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}
