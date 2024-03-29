<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityAcTableSeeder extends Seeder
{
    static array $values = [
        "1200013" => "ACRELANDIA",
        "1200054" => "ASSIS BRASIL",
        "1200104" => "BRASILEIA",
        "1200138" => "BUJARI",
        "1200179" => "CAPIXABA",
        "1200203" => "CRUZEIRO DO SUL",
        "1200252" => "EPITACIOLANDIA",
        "1200302" => "FEIJO",
        "1200328" => "JORDAO",
        "1200336" => "MANCIO LIMA",
        "1200344" => "MANOEL URBANO",
        "1200351" => "MARECHAL THAUMATURGO",
        "1200385" => "PLACIDO DE CASTRO",
        "1200393" => "PORTO WALTER",
        "1200401" => "RIO BRANCO",
        "1200427" => "RODRIGUES ALVES",
        "1200435" => "SANTA ROSA DO PURUS",
        "1200450" => "SENADOR GUIOMARD",
        "1200500" => "SENA MADUREIRA",
        "1200609" => "TARAUACA",
        "1200708" => "XAPURI",
        "1200807" => "PORTO ACRE"
     ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '1'
            ]);
        }
    }
}
