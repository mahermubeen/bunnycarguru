<?php

use Illuminate\Database\Seeder;

class CarBatteryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_batteries')->insert([
            ['car_id' => '1', 'battery_id' => '1'],
            ['car_id' => '1', 'battery_id' => '2'],
            ['car_id' => '1', 'battery_id' => '4'],
            ['car_id' => '1', 'battery_id' => '1'],
            ['car_id' => '2', 'battery_id' => '1'],
            ['car_id' => '2', 'battery_id' => '4'],
            ['car_id' => '3', 'battery_id' => '4'],
            ['car_id' => '3', 'battery_id' => '1'],
            ['car_id' => '4', 'battery_id' => '2'],
            ['car_id' => '4', 'battery_id' => '3'],
            ['car_id' => '4', 'battery_id' => '1'],
        ]);
    }
}
