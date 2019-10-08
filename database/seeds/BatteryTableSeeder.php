<?php

use Illuminate\Database\Seeder;

class BatteryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batteries')->insert([
            ['name' => 'Varta'],
            ['name' => 'Bosch'],
            ['name' => 'Amaron'],
            ['name' => 'Trane'],
        ]);
    }
}
