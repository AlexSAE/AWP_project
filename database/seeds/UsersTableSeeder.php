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
                'name'      => 'Aleksandar',
                'pic'       => '../img/user.phg',
                'email'     => 'aleks@aleks.app',
                'password'  => app('hash')->make('aleks'),
                'languages' => 'sr,en,de',
            ],
            [
                'id'        => 2,
                'type_id'   => 2,
                'name'      => 'Mile',
                'pic'       => '../img/user.phg',
                'email'     => 'mile@aleks.app',
                'password'  => app('hash')->make('mile'),
                'languages' => 'sr,en,de',
            ],
            [
                'id'        => 3,
                'type_id'   => 2,
                'name'      => 'Pera',
                'pic'       => '../img/user.phg',
                'email'     => 'pera@aleks.app',
                'password'  => app('hash')->make('pera'),
                'languages' => 'de',
            ]

        ];

        \App\User::insert($users);
    }
}
