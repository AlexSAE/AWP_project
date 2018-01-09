<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id'          => 1,
                'user_id'     => 1,
                'title'       => 'English language translator',
                'languages'   => 'en',
                'description' => 'We need an English translator ASAP.'
            ],
            [
                'id'          => 2,
                'user_id'     => 1,
                'title'       => 'German language translator',
                'languages'   => 'de',
                'description' => 'We need a German translator ASAP.'            ]
        ];

        \App\Post::insert($posts);
    }
}
