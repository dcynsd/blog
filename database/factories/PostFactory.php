<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $updatedAt = $this->faker->dateTimeBetween('2017-01-01', 'now', 'Asia/Shanghai');
        $createdAt = $this->faker->dateTimeBetween($updatedAt, 'now', 'Asia/Shanghai');

        $images = [
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/vdysjx.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/1cm6iu.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/sdqryn.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/n7a9bv.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/4xvpqo.png?w=1920',
            'https://rmt.dogedoge.com/fetch/fluid/storage/bg/73twhs.png?w=1920',
        ];

        return [
            'category_id' => $this->faker->randomElement([1, 2, 3, 4]),
            'title' => $this->faker->sentence(),
            'sub_title' => $this->faker->sentence(),
            'image' => $this->faker->randomElement($images),
            'content' => $this->faker->paragraphs(7, true),
            'is_issued' => true,
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}
