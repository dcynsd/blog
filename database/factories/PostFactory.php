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
        $sentence = $this->faker->sentence();

        // 随机取一个月以内的时间
        $updatedAt = $this->faker->dateTimeThisMonth();
        // 为创建时间传参，意为最大不超过 $updated_at，因为创建时间需永远比更改时间要早
        $createdAt = $this->faker->dateTimeThisMonth($updatedAt);

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
            'title' => $sentence,
            'sub_title' => $sentence,
            'image' => $this->faker->randomElement($images),
            'content' => $this->faker->text(),
            'excerpt' => $sentence,
            'is_issued' => true,
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
        ];
    }
}
