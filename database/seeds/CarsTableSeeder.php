<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            ['name' => 'Acura'],
            ['name' => 'Alfa Romeo'],
            ['name' => 'Austin Martin'],
            ['name' => 'Audi'],
            ['name' => 'BMW'],
            ['name' => 'Bentley'],
            ['name' => 'Borgward'],
            ['name' => 'Bugatti'],
            ['name' => 'CMC'],
            ['name' => 'Cadillac'],
            ['name' => 'Caterham'],
            ['name' => 'Changan'],
            ['name' => 'Cherry'],
            ['name' => 'Chevrolet'],
            ['name' => 'Chrysler'],
            ['name' => 'Daihatsu'],
            ['name' => 'Datsun'],
            ['name' => 'Dodge'],
            ['name' => 'Ferrari'],
            ['name' => 'Fiat'],
            ['name' => 'Fisker'],
            ['name' => 'Ford'],
            ['name' => 'Foton'],
            ['name' => 'GMC'],
            ['name' => 'Geely'],
            ['name' => 'Honda'],
            ['name' => 'Hummer'],
            ['name' => 'Hyundai'],
            ['name' => 'Infinity'],
            ['name' => 'Isuzu'],
            ['name' => 'JAC'],
            ['name' => 'JMC'],
            ['name' => 'Jaguar'],
            ['name' => 'Jeep'],
            ['name' => 'Kia'],
            ['name' => 'Lambourghini'],
            ['name' => 'Lancia'],
            ['name' => 'Land Rover'],
            ['name' => 'Lexus'],
            ['name' => 'Honda'],
            ['name' => 'Lincoln'],
            ['name' => 'Lotus'],
            ['name' => 'MG'],
            ['name' => 'Mini'],
            ['name' => 'Mahindra'],
            ['name' => 'Maserati'],
            ['name' => 'Maybach'],
            ['name' => 'Mazda'],
            ['name' => 'Mclaren'],
            ['name' => 'Mercedes'],
            ['name' => 'Mercury'],
            ['name' => 'Mitsubishi'],
            ['name' => 'Morgan'],
            ['name' => 'Nissan'],
            ['name' => 'Opel'],
            ['name' => 'Peugeot'],
            ['name' => 'Porche'],
            ['name' => 'Renault'],
            ['name' => 'Rolls Royce'],
            ['name' => 'Saab'],
            ['name' => 'Seat'],
            ['name' => 'Skoda'],
            ['name' => 'Subaru'],
            ['name' => 'Suzuki'],
            ['name' => 'Tata'],
            ['name' => 'Toyota'],
            ['name' => 'Volkswagen'],
            ['name' => 'Volvo']
        ]);
    }
}
