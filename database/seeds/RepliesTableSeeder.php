<?php

use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = User::all()->pluck('id')->toArray();
        $post_id = Post::all()->pluck('id')->toArray();

        $faker = app(Faker\Generator::class);

        $replies = factory(Reply::class, 1000)->make()->each(function($reply)
            use ($user_id, $post_id, $faker)
        {
            $reply->user_id = $faker->randomElement($user_id);
            $reply->post_id = $faker->randomElement($post_id);
        });

        Reply::insert($replies->toArray());
    }
}
