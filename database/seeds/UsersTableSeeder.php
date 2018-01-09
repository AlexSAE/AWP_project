<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'        => 1,
                'type_id'   => 1,
                'name'      => 'Aleksandar Jeremenko',
                'about'     => 'Cool dude',
                'pic'       => '../img/agent1.jpg',
                'email'     => 'aleks@aleks.app',
                'password'  => app('hash')->make('aleks'),
                'languages' => 'sr,en,de',
            ],
            [
                'id'        => 2,
                'type_id'   => 2,
                'name'      => 'Mile Miletic',
                'about'     => 'Cool dude',
                'pic'       => '../img/agent1.jpg',
                'email'     => 'mile@aleks.app',
                'password'  => app('hash')->make('mile'),
                'languages' => 'sr,en,de',
            ],
            [
                'id'        => 3,
                'type_id'   => 2,
                'name'      => 'Pera Peric',
                'about'     => 'Cool dude',
                'pic'       => '../img/agent1.jpg',
                'email'     => 'pera@aleks.app',
                'password'  => app('hash')->make('pera'),
                'languages' => 'de',
            ]

        ];

        \App\User::insert($users);
    }
}
