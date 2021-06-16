<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id=array_values(User::pluck('id')->toArray());
        return [
            'title' => $this->faker->word(3),
            'body' => $this->faker->text(500),
            'user_id'=>array_rand($user_id),
            'is_visible'=>array_rand([0,1])
        ];
    }
}
