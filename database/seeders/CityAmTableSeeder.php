<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityAmTableSeeder extends Seeder
{
    static array $values = [
        "1300029" => "ALVARAES",
        "1300060" => "AMATURA",
        "1300086" => "ANAMA",
        "1300102" => "ANORI",
        "1300144" => "APUI",
        "1300201" => "ATALAIA DO NORTE",
        "1300300" => "AUTAZES",
        "1300409" => "BARCELOS",
        "1300508" => "BARREIRINHA",
        "1300607" => "BENJAMIN CONSTANT",
        "1300631" => "BERURI",
        "1300680" => "BOA VISTA DO RAMOS",
        "1300706" => "BOCA DO ACRE",
        "1300805" => "BORBA",
        "1300839" => "CAAPIRANGA",
        "1300904" => "CANUTAMA",
        "1301001" => "CARAUARI",
        "1301100" => "CAREIRO",
        "1301159" => "CAREIRO DA VARZEA",
        "1301209" => "COARI",
        "1301308" => "CODAJAS",
        "1301407" => "EIRUNEPE",
        "1301506" => "ENVIRA",
        "1301605" => "FONTE BOA",
        "1301654" => "GUAJARA",
        "1301704" => "HUMAITA",
        "1301803" => "IPIXUNA",
        "1301852" => "IRANDUBA",
        "1301902" => "ITACOATIARA",
        "1301951" => "ITAMARATI",
        "1302009" => "ITAPIRANGA",
        "1302108" => "JAPURA",
        "1302207" => "JURUA",
        "1302306" => "JUTAI",
        "1302405" => "LABREA",
        "1302504" => "MANACAPURU",
        "1302553" => "MANAQUIRI",
        "1302603" => "MANAUS",
        "1302702" => "MANICORE",
        "1302801" => "MARAA",
        "1302900" => "MAUES",
        "1303007" => "NHAMUNDA",
        "1303106" => "NOVA OLINDA DO NORTE",
        "1303205" => "NOVO AIRAO",
        "1303304" => "NOVO ARIPUANA",
        "1303403" => "PARINTINS",
        "1303502" => "PAUINI",
        "1303536" => "PRESIDENTE FIGUEIREDO",
        "1303569" => "RIO PRETO DA EVA",
        "1303601" => "SANTA ISABEL DO RIO NEGRO",
        "1303700" => "SANTO ANTONIO DO ICA",
        "1303809" => "SAO GABRIEL DA CACHOEIRA",
        "1303908" => "SAO PAULO DE OLIVENCA",
        "1303957" => "SAO SEBASTIAO DO UATUMA",
        "1304005" => "SILVES",
        "1304062" => "TABATINGA",
        "1304104" => "TAPAUA",
        "1304203" => "TEFE",
        "1304237" => "TONANTINS",
        "1304260" => "UARINI",
        "1304302" => "URUCARA",
        "1304401" => "URUCURITUBA"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '4'
            ]);
        }
    }
}
