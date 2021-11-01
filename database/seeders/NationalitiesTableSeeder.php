<?php

namespace Database\Seeders;
use App\Models\Nationality;
use App\Models\Person;
use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = new Nationality();
        $k->name = 'Italian';
        $k->save();
        $k->people()->attach(1);
        $k->people()->attach(23);
        $k->people()->attach(25);
        $k->people()->attach(27);
        $k->people()->attach(28);
        $k->people()->attach(33);


        $k = new Nationality();
        $k->name = 'French';
        $k->save();
        $k->people()->attach(3);
        $k->people()->attach(22);


        $k = new Nationality();
        $k->name = 'Welsh';
        $k->save();
        $k->people()->attach(5);
        $k->people()->attach(26);

        $k = new Nationality();
        $k->name = 'English';
        $k->save();
        $k->people()->attach(9);
        $k->people()->attach(34);

        $k = new Nationality();
        $k->name = 'Spanish';
        $k->save();
        $k->people()->attach(12);
        $k->people()->attach(7);


    }
}
