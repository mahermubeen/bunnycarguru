<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'test', 'password' => 'test'],
            ['email' => 'mubeen@gmail.com', 'password' => 'mubeen'],
        ]);
    }
}
