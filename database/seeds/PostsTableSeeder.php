<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = \App\Models\User::all()->pluck('id')->toArray();

        $category_ids = \App\Models\Category::all()->pluck('id')->toArray();

        $faker = app(Faker\Generator::class);

        $posts = factory(Post::class, 100)->make()->each(function ($post)
        use($faker, $user_ids, $category_ids)
        {
            $post->user_id = $faker->randomElement($user_ids);

            $post->category_id = $faker->randomElement($category_ids);
        });

        Post::insert($posts->toArray());

    }

}

