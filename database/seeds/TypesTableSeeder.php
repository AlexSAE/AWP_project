<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'id'   => 1,
                'name' => 'Employer',
            ],
            [
                'id'   => 2,
                'name' => 'Translator',
            ]
        ];

        \App\Type::insert($types);
    }

    
}
