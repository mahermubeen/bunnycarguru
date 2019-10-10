<?php

use Illuminate\Database\Seeder;

class CarOilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('car_oils')->insert([
            ['car_id' => '1', 'oil_id' => '1'],
            ['car_id' => '1', 'oil_id' => '2'],
            ['car_id' => '1', 'oil_id' => '4'],
            ['car_id' => '1', 'oil_id' => '1'],
            ['car_id' => '2', 'oil_id' => '1'],
            ['car_id' => '2', 'oil_id' => '4'],
            ['car_id' => '3', 'oil_id' => '4'],
            ['car_id' => '3', 'oil_id' => '1'],
            ['car_id' => '4', 'oil_id' => '2'],
            ['car_id' => '4', 'oil_id' => '3'],
            ['car_id' => '4', 'oil_id' => '1'],
        ]);
    }
}
