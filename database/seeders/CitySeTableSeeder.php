<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeTableSeeder extends Seeder
{
    static array $values = [
        "2800100" => "AMPARO DE SAO FRANCISCO",
        "2800209" => "AQUIDABA",
        "2800308" => "ARACAJU",
        "2800407" => "ARAUA",
        "2800506" => "AREIA BRANCA",
        "2800605" => "BARRA DOS COQUEIROS",
        "2800670" => "BOQUIM",
        "2800704" => "BREJO GRANDE",
        "2801009" => "CAMPO DO BRITO",
        "2801108" => "CANHOBA",
        "2801207" => "CANINDE DE SAO FRANCISCO",
        "2801306" => "CAPELA",
        "2801405" => "CARIRA",
        "2801504" => "CARMOPOLIS",
        "2801603" => "CEDRO DE SAO JOAO",
        "2801702" => "CRISTINAPOLIS",
        "2801900" => "CUMBE",
        "2802007" => "DIVINA PASTORA",
        "2802106" => "ESTANCIA",
        "2802205" => "FEIRA NOVA",
        "2802304" => "FREI PAULO",
        "2802403" => "GARARU",
        "2802502" => "GENERAL MAYNARD",
        "2802601" => "GRACHO CARDOSO",
        "2802700" => "ILHA DAS FLORES",
        "2802809" => "INDIAROBA",
        "2802908" => "ITABAIANA",
        "2803005" => "ITABAIANINHA",
        "2803104" => "ITABI",
        "2803203" => "ITAPORANGA D AJUDA",
        "2803302" => "JAPARATUBA",
        "2803401" => "JAPOATA",
        "2803500" => "LAGARTO",
        "2803609" => "LARANJEIRAS",
        "2803708" => "MACAMBIRA",
        "2803807" => "MALHADA DOS BOIS",
        "2803906" => "MALHADOR",
        "2804003" => "MARUIM",
        "2804102" => "MOITA BONITA",
        "2804201" => "MONTE ALEGRE DE SERGIPE",
        "2804300" => "MURIBECA",
        "2804409" => "NEOPOLIS",
        "2804458" => "NOSSA SENHORA APARECIDA",
        "2804508" => "NOSSA SENHORA DA GLORIA",
        "2804607" => "NOSSA SENHORA DAS DORES",
        "2804706" => "NOSSA SENHORA DE LOURDES",
        "2804805" => "NOSSA SENHORA DO SOCORRO",
        "2804904" => "PACATUBA",
        "2805000" => "PEDRA MOLE",
        "2805109" => "PEDRINHAS",
        "2805208" => "PINHAO",
        "2805307" => "PIRAMBU",
        "2805406" => "POCO REDONDO",
        "2805505" => "POCO VERDE",
        "2805604" => "PORTO DA FOLHA",
        "2805703" => "PROPRIA",
        "2805802" => "RIACHAO DO DANTAS",
        "2805901" => "RIACHUELO",
        "2806008" => "RIBEIROPOLIS",
        "2806107" => "ROSARIO DO CATETE",
        "2806206" => "SALGADO",
        "2806305" => "SANTA LUZIA DO ITANHY",
        "2806404" => "SANTANA DO SAO FRANCISCO",
        "2806503" => "SANTA ROSA DE LIMA",
        "2806602" => "SANTO AMARO DAS BROTAS",
        "2806701" => "SAO CRISTOVAO",
        "2806800" => "SAO DOMINGOS",
        "2806909" => "SAO FRANCISCO",
        "2807006" => "SAO MIGUEL DO ALEIXO",
        "2807105" => "SIMAO DIAS",
        "2807204" => "SIRIRI",
        "2807303" => "TELHA",
        "2807402" => "TOBIAS BARRETO",
        "2807501" => "TOMAR DO GERU",
        "2807600" => "UMBAUBA"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '26'
            ]);
        }
    }
}
