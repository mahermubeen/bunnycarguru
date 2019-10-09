<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            ['city' => 'Dubai'],
            ['city' => 'Sharjah'],
            ['city' => 'Ajman'],
            ['city' => 'Abu Dhabi'],
        ]);
    }
}
