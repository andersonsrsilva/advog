<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityRoTableSeeder extends Seeder
{
    static array $values = [
        "1100015" => "ALTA FLORESTA D OESTE",
        "1100023" => "ARIQUEMES",
        "1100031" => "CABIXI",
        "1100049" => "CACOAL",
        "1100056" => "CEREJEIRAS",
        "1100064" => "COLORADO DO OESTE",
        "1100072" => "CORUMBIARA",
        "1100080" => "COSTA MARQUES",
        "1100098" => "ESPIGAO D OESTE",
        "1100106" => "GUAJARA-MIRIM",
        "1100114" => "JARU",
        "1100122" => "JI-PARANA",
        "1100130" => "MACHADINHO D OESTE",
        "1100148" => "NOVA BRASILANDIA D OESTE",
        "1100155" => "OURO PRETO DO OESTE",
        "1100189" => "PIMENTA BUENO",
        "1100205" => "PORTO VELHO",
        "1100254" => "PRESIDENTE MEDICI",
        "1100262" => "RIO CRESPO",
        "1100288" => "ROLIM DE MOURA",
        "1100296" => "SANTA LUZIA D OESTE",
        "1100304" => "VILHENA",
        "1100320" => "SAO MIGUEL DO GUAPORE",
        "1100338" => "NOVA MAMORE",
        "1100346" => "ALVORADA D OESTE",
        "1100379" => "ALTO ALEGRE DOS PARECIS",
        "1100403" => "ALTO PARAISO",
        "1100452" => "BURITIS",
        "1100502" => "NOVO HORIZONTE DO OESTE",
        "1100601" => "CACAULANDIA",
        "1100700" => "CAMPO NOVO DE RONDONIA",
        "1100809" => "CANDEIAS DO JAMARI",
        "1100908" => "CASTANHEIRAS",
        "1100924" => "CHUPINGUAIA",
        "1100940" => "CUJUBIM",
        "1101005" => "GOVERNADOR JORGE TEIXEIRA",
        "1101104" => "ITAPUA DO OESTE",
        "1101203" => "MINISTRO ANDREAZZA",
        "1101302" => "MIRANTE DA SERRA",
        "1101401" => "MONTE NEGRO",
        "1101435" => "NOVA UNIAO",
        "1101450" => "PARECIS",
        "1101468" => "PIMENTEIRAS DO OESTE",
        "1101476" => "PRIMAVERA DE RONDONIA",
        "1101484" => "SAO FELIPE D OESTE",
        "1101492" => "SAO FRANCISCO DO GUAPORE",
        "1101500" => "SERINGUEIRAS",
        "1101559" => "TEIXEIROPOLIS",
        "1101609" => "THEOBROMA",
        "1101708" => "URUPA",
        "1101757" => "VALE DO ANARI",
        "1101807" => "VALE DO PARAISO"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '22'
            ]);
        }
    }
}
