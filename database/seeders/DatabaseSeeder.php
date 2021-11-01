<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create(['name'=>'Test','email'=>'test@test.com']);
        \App\Models\User::factory(10)->create();
        $this->call(PeopleTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(CarsTableSeeder::class);

    }
}
