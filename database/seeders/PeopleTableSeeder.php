<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Person();
        $a->title = 'Mr';
        $a->first_name = 'Keith';
        $a->surname = "Moon";
        $a->address= "Connaught Road";
        $a->save();

        $a = new Person();
        $a->title = 'Mr';
        $a->first_name = 'Bob';
        $a->surname = "Bobberton";
        $a->address= "Connaught Street";
        $a->save();

        $a = new Person();
        $a->title = 'Ms';
        $a->first_name = 'Frannnnn';
        $a->surname = "Frannertornsing";
        $a->address= "Frannergard Street";
        $a->save();
        
        $a = new Person();
        $a->title = 'Ms';
        $a->first_name = 'Frannnnn';
        $a->surname = "Frannertornsing";
        $a->address= "Frannergard Street";
        $a->save();

        $a = new Person();
        $a->title = 'Miss';
        $a->first_name = 'Frannnnn';
        $a->surname = "Frannertornsing";
        $a->address= "Frannergard Street";
        $a->save();

        $a = new Person();
        $a->title = 'Ms';
        $a->first_name = 'BlahVlah';
        $a->surname = "Brfnewfo";
        $a->address= "Ferdinand Street";
        $a->save();

        $a = new Person();
        $a->title = 'Miss';
        $a->first_name = 'MaMa';
        $a->surname = "Gerorosn";
        $a->address= "Gaoodosdodos Street";
        $a->save();

        $a = new Person();
        $a->title = 'Mrs';
        $a->first_name = 'Bobba';
        $a->surname = "Bobbarton";
        $a->address= "Feerdnsfcmsdc Street";
        $a->save();

        $a = new Person();
        $a->title = 'Mr';
        $a->first_name = 'Veveve';
        $a->surname = "Babvaa";
        $a->address= "Bergentons Street";
        $a->save();

        Person::factory() -> count(50) -> create();
    }
}
