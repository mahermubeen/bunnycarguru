<?php

use Illuminate\Database\Seeder;

class CarTyreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_tyres')->insert([
            ['car_id' => '1', 'tyre_id' => '1'],
            ['car_id' => '1', 'tyre_id' => '2'],
            ['car_id' => '1', 'tyre_id' => '4'],
            ['car_id' => '1', 'tyre_id' => '1'],
            ['car_id' => '2', 'tyre_id' => '1'],
            ['car_id' => '2', 'tyre_id' => '4'],
            ['car_id' => '3', 'tyre_id' => '4'],
            ['car_id' => '3', 'tyre_id' => '1'],
            ['car_id' => '4', 'tyre_id' => '2'],
            ['car_id' => '4', 'tyre_id' => '3'],
            ['car_id' => '4', 'tyre_id' => '1'],
        ]);
    }
}
