<?php

namespace Database\Seeders;

use Database\Seeders\Auth\RolesSeeder;
use Database\Seeders\Auth\UsersRolesSeeder;
use Database\Seeders\Auth\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        //  $this->call(UsersSeeder::class);
        //  $this->call(RolesSeeder::class);
        //  $this->call(UsersRolesSeeder::class);
         $this->call(UfTableSeeder::class);
         $this->call(CityAcTableSeeder::class);
         $this->call(CityAlTableSeeder::class);
         $this->call(CityApTableSeeder::class);
         $this->call(CityAmTableSeeder::class);
         $this->call(CityBaTableSeeder::class);
         $this->call(CityCeTableSeeder::class);
         $this->call(CityDfTableSeeder::class);
    }
}
