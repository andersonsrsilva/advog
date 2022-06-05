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
         $this->call(UsersSeeder::class);
         $this->call(RolesSeeder::class);
         $this->call(UsersRolesSeeder::class);
         $this->call(UfTableSeeder::class);
         $this->call(CityAcTableSeeder::class);
         $this->call(CityAlTableSeeder::class);
         $this->call(CityApTableSeeder::class);
         $this->call(CityAmTableSeeder::class);
         $this->call(CityBaTableSeeder::class);
         $this->call(CityCeTableSeeder::class);
         $this->call(CityDfTableSeeder::class);
         $this->call(CityEsTableSeeder::class);
         $this->call(CityGoTableSeeder::class);
         $this->call(CityMaTableSeeder::class);
         $this->call(CityMtTableSeeder::class);
         $this->call(CityMsTableSeeder::class);
         $this->call(CityMgTableSeeder::class);
         $this->call(CityPaTableSeeder::class);
         $this->call(CityPbTableSeeder::class);
         $this->call(CityPrTableSeeder::class);
         $this->call(CityPeTableSeeder::class);
         $this->call(CityPiTableSeeder::class);
         $this->call(CityRjTableSeeder::class);
         $this->call(CityRnTableSeeder::class);
         $this->call(CityRsTableSeeder::class);
         $this->call(CityRoTableSeeder::class);
         $this->call(CityRrTableSeeder::class);
         $this->call(CityScTableSeeder::class);
         $this->call(CitySpTableSeeder::class);
         $this->call(CitySeTableSeeder::class);
         $this->call(CityToTableSeeder::class);
    }
}
