<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(KnowledgesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(HierarchiesTableSeeder::class);
        $this->call(SubknowledgesTableSeeder::class);
        $this->call(OccupationAreasTableSeeder::class);
    }
}
