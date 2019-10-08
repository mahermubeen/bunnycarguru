<?php

use Illuminate\Database\Seeder;

class TyreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tyres')->insert([
            ['name' => 'Avon'],
            ['name' => 'Bridgestone'],
            ['name' => 'Continental'],
            ['name' => 'Dunlop'],
            ['name' => 'Firestone'],
            ['name' => 'Goodyear'],
            ['name' => 'Hankook'],
            ['name' => 'Michelin'],
        ]);
    }
}
