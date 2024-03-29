<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityMsTableSeeder extends Seeder
{
    static array $values = [
        "5000203" => "AGUA CLARA",
        "5000252" => "ALCINOPOLIS",
        "5000609" => "AMAMBAI",
        "5000708" => "ANASTACIO",
        "5000807" => "ANAURILANDIA",
        "5000856" => "ANGELICA",
        "5000906" => "ANTONIO JOAO",
        "5001003" => "APARECIDA DO TABOADO",
        "5001102" => "AQUIDAUANA",
        "5001243" => "ARAL MOREIRA",
        "5001508" => "BANDEIRANTES",
        "5001904" => "BATAGUASSU",
        "5002001" => "BATAYPORA",
        "5002100" => "BELA VISTA",
        "5002159" => "BODOQUENA",
        "5002209" => "BONITO",
        "5002308" => "BRASILANDIA",
        "5002407" => "CAARAPO",
        "5002605" => "CAMAPUA",
        "5002704" => "CAMPO GRANDE",
        "5002803" => "CARACOL",
        "5002902" => "CASSILANDIA",
        "5002951" => "CHAPADAO DO SUL",
        "5003108" => "CORGUINHO",
        "5003157" => "CORONEL SAPUCAIA",
        "5003207" => "CORUMBA",
        "5003256" => "COSTA RICA",
        "5003306" => "COXIM",
        "5003454" => "DEODAPOLIS",
        "5003488" => "DOIS IRMAOS DO BURITI",
        "5003504" => "DOURADINA",
        "5003702" => "DOURADOS",
        "5003751" => "ELDORADO",
        "5003801" => "FATIMA DO SUL",
        "5003900" => "FIGUEIRAO",
        "5004007" => "GLORIA DE DOURADOS",
        "5004106" => "GUIA LOPES DA LAGUNA",
        "5004304" => "IGUATEMI",
        "5004403" => "INOCENCIA",
        "5004502" => "ITAPORA",
        "5004601" => "ITAQUIRAI",
        "5004700" => "IVINHEMA",
        "5004809" => "JAPORA",
        "5004908" => "JARAGUARI",
        "5005004" => "JARDIM",
        "5005103" => "JATEI",
        "5005152" => "JUTI",
        "5005202" => "LADARIO",
        "5005251" => "LAGUNA CARAPA",
        "5005400" => "MARACAJU",
        "5005608" => "MIRANDA",
        "5005681" => "MUNDO NOVO",
        "5005707" => "NAVIRAI",
        "5005806" => "NIOAQUE",
        "5006002" => "NOVA ALVORADA DO SUL",
        "5006200" => "NOVA ANDRADINA",
        "5006259" => "NOVO HORIZONTE DO SUL",
        "5006275" => "PARAISO DAS AGUAS",
        "5006309" => "PARANAIBA",
        "5006358" => "PARANHOS",
        "5006408" => "PEDRO GOMES",
        "5006606" => "PONTA PORA",
        "5006903" => "PORTO MURTINHO",
        "5007109" => "RIBAS DO RIO PARDO",
        "5007208" => "RIO BRILHANTE",
        "5007307" => "RIO NEGRO",
        "5007406" => "RIO VERDE DE MATO GROSSO",
        "5007505" => "ROCHEDO",
        "5007554" => "SANTA RITA DO PARDO",
        "5007695" => "SAO GABRIEL DO OESTE",
        "5007703" => "SETE QUEDAS",
        "5007802" => "SELVIRIA",
        "5007901" => "SIDROLANDIA",
        "5007935" => "SONORA",
        "5007950" => "TACURU",
        "5007976" => "TAQUARUSSU",
        "5008008" => "TERENOS",
        "5008305" => "TRES LAGOAS",
        "5008404" => "VICENTINA"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '12'
            ]);
        }
    }
}
