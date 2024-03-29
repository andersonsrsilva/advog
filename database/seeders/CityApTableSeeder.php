<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityApTableSeeder extends Seeder
{
    static array $values = [
        "1600055" => "SERRA DO NAVIO",
        "1600105" => "AMAPA",
        "1600154" => "PEDRA BRANCA DO AMAPARI",
        "1600204" => "CALCOENE",
        "1600212" => "CUTIAS",
        "1600238" => "FERREIRA GOMES",
        "1600253" => "ITAUBAL",
        "1600279" => "LARANJAL DO JARI",
        "1600303" => "MACAPA",
        "1600402" => "MAZAGAO",
        "1600501" => "OIAPOQUE",
        "1600535" => "PORTO GRANDE",
        "1600550" => "PRACUUBA",
        "1600600" => "SANTANA",
        "1600709" => "TARTARUGALZINHO",
        "1600808" => "VITORIA DO JARI"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '3'
            ]);
        }
    }
}
