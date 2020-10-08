<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            
            // 'user_id'=>function () {
            //     return factory(App\User::class);
            // },              
            'user_id'=> factory(\App\Models\User::class), # not working but it doen't create any impact on our program
            'title'=>$this->faker->sentence,
            'excerpt'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph,

        ];
    }
}
