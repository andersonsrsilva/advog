<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityDfTableSeeder extends Seeder
{
    static $cities = [
        "5300108" => "BRASILIA"
    ];
        
    public function run()
    {
        foreach (self::$cities as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '7'
            ]);
        }
    }
}
