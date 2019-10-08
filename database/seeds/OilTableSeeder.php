<?php

use Illuminate\Database\Seeder;

class OilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oils')->insert([
            ['name' => 'Mobil 1'],
            ['name' => 'Valvoline'],
            ['name' => 'Pennzoil'],
            ['name' => 'Amsoil'],
        ]);
    }
}
