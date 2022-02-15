<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        create([
            'questions' => \Str::random(10),
            'answers'=> \Str::random(10),
        ]);

    }
}
