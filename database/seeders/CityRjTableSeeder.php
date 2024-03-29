<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityRjTableSeeder extends Seeder
{
    static array $values = [
        "3300100" => "ANGRA DOS REIS",
        "3300159" => "APERIBE",
        "3300209" => "ARARUAMA",
        "3300225" => "AREAL",
        "3300233" => "ARMACAO DOS BUZIOS",
        "3300258" => "ARRAIAL DO CABO",
        "3300308" => "BARRA DO PIRAI",
        "3300407" => "BARRA MANSA",
        "3300456" => "BELFORD ROXO",
        "3300506" => "BOM JARDIM",
        "3300605" => "BOM JESUS DO ITABAPOANA",
        "3300704" => "CABO FRIO",
        "3300803" => "CACHOEIRAS DE MACACU",
        "3300902" => "CAMBUCI",
        "3300936" => "CARAPEBUS",
        "3300951" => "COMENDADOR LEVY GASPARIAN",
        "3301009" => "CAMPOS DOS GOYTACAZES",
        "3301108" => "CANTAGALO",
        "3301157" => "CARDOSO MOREIRA",
        "3301207" => "CARMO",
        "3301306" => "CASIMIRO DE ABREU",
        "3301405" => "CONCEICAO DE MACABU",
        "3301504" => "CORDEIRO",
        "3301603" => "DUAS BARRAS",
        "3301702" => "DUQUE DE CAXIAS",
        "3301801" => "ENGENHEIRO PAULO DE FRONTIN",
        "3301850" => "GUAPIMIRIM",
        "3301876" => "IGUABA GRANDE",
        "3301900" => "ITABORAI",
        "3302007" => "ITAGUAI",
        "3302056" => "ITALVA",
        "3302106" => "ITAOCARA",
        "3302205" => "ITAPERUNA",
        "3302254" => "ITATIAIA",
        "3302270" => "JAPERI",
        "3302304" => "LAJE DO MURIAE",
        "3302403" => "MACAE",
        "3302452" => "MACUCO",
        "3302502" => "MAGE",
        "3302601" => "MANGARATIBA",
        "3302700" => "MARICA",
        "3302809" => "MENDES",
        "3302858" => "MESQUITA",
        "3302908" => "MIGUEL PEREIRA",
        "3303005" => "MIRACEMA",
        "3303104" => "NATIVIDADE",
        "3303203" => "NILOPOLIS",
        "3303302" => "NITEROI",
        "3303401" => "NOVA FRIBURGO",
        "3303500" => "NOVA IGUACU",
        "3303609" => "PARACAMBI",
        "3303708" => "PARAIBA DO SUL",
        "3303807" => "PARATY",
        "3303856" => "PATY DO ALFERES",
        "3303906" => "PETROPOLIS",
        "3303955" => "PINHEIRAL",
        "3304003" => "PIRAI",
        "3304102" => "PORCIUNCULA",
        "3304110" => "PORTO REAL",
        "3304128" => "QUATIS",
        "3304144" => "QUEIMADOS",
        "3304151" => "QUISSAMA",
        "3304201" => "RESENDE",
        "3304300" => "RIO BONITO",
        "3304409" => "RIO CLARO",
        "3304508" => "RIO DAS FLORES",
        "3304524" => "RIO DAS OSTRAS",
        "3304557" => "RIO DE JANEIRO",
        "3304607" => "SANTA MARIA MADALENA",
        "3304706" => "SANTO ANTONIO DE PADUA",
        "3304755" => "SAO FRANCISCO DE ITABAPOANA",
        "3304805" => "SAO FIDELIS",
        "3304904" => "SAO GONCALO",
        "3305000" => "SAO JOAO DA BARRA",
        "3305109" => "SAO JOAO DE MERITI",
        "3305133" => "SAO JOSE DE UBA",
        "3305158" => "SAO JOSE DO VALE DO RIO PRETO",
        "3305208" => "SAO PEDRO DA ALDEIA",
        "3305307" => "SAO SEBASTIAO DO ALTO",
        "3305406" => "SAPUCAIA",
        "3305505" => "SAQUAREMA",
        "3305554" => "SEROPEDICA",
        "3305604" => "SILVA JARDIM",
        "3305703" => "SUMIDOURO",
        "3305752" => "TANGUA",
        "3305802" => "TERESOPOLIS",
        "3305901" => "TRAJANO DE MORAES",
        "3306008" => "TRES RIOS",
        "3306107" => "VALENCA",
        "3306156" => "VARRE-SAI",
        "3306206" => "VASSOURAS",
        "3306305" => "VOLTA REDONDA"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '19'
            ]);
        }
    }
}
