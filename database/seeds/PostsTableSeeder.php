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
                'title'       => 'Need an English language translator',
                'languages'   => 'en',
                'description' => 'Pinterest tbh jean shorts lumbersexual, heirloom unicorn try-hard occupy. Leggings ennui vaporware, austin seitan raw denim fashion axe man braid raclette bushwick street art retro small batch palo santo. Vegan paleo synth helvetica ennui cronut gochujang. Pug hella disrupt master cleanse chicharrones affogato.',
            ],
            [
                'id'          => 2,
                'user_id'     => 1,
                'title'       => 'Need a German language translator',
                'languages'   => 'de',
                'description' => 'Pinterest tbh jean shorts lumbersexual, heirloom unicorn try-hard occupy. Leggings ennui vaporware, austin seitan raw denim fashion axe man braid raclette bushwick street art retro small batch palo santo. Vegan paleo synth helvetica ennui cronut gochujang. Pug hella disrupt master cleanse chicharrones affogato.',
            ]
        ];

        \App\Post::insert($posts);
    }
}
