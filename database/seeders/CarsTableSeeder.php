<?php

namespace Database\Seeders;
use App\Models\Car;
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
        $a = new Car();
        $a->make = 'Fiat';
        $a->model = 22;
        $a->person_id = 1;
        $a->save();

        Car::factory()->count(50)->create();
    }
}
