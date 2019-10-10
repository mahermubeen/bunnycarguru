<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OilTableSeeder::class);
        $this->call(BatteryTableSeeder::class);
        $this->call(TyreTableSeeder::class);
        $this->call(CarBatteryTableSeeder::class);
        $this->call(CarOilTableSeeder::class);
        $this->call(CarTyreTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
    }
}
