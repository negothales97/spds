<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("admins")->insert([
            [	
                "name"       	=> "SPDS",
                "email"       	=> "spds@spds.com",
                "password"      => bcrypt("010203"),
            ], 
        ]);
    }
}
