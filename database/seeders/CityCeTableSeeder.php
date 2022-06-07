<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityCeTableSeeder extends Seeder
{
    static $cities = [
        "2300101" => "ABAIARA",
        "2300150" => "ACARAPE",
        "2300200" => "ACARAU",
        "2300309" => "ACOPIARA",
        "2300408" => "AIUABA",
        "2300507" => "ALCANTARAS",
        "2300606" => "ALTANEIRA",
        "2300705" => "ALTO SANTO",
        "2300754" => "AMONTADA",
        "2300804" => "ANTONINA DO NORTE",
        "2300903" => "APUIARES",
        "2301000" => "AQUIRAZ",
        "2301109" => "ARACATI",
        "2301208" => "ARACOIABA",
        "2301257" => "ARARENDA",
        "2301307" => "ARARIPE",
        "2301406" => "ARATUBA",
        "2301505" => "ARNEIROZ",
        "2301604" => "ASSARE",
        "2301703" => "AURORA",
        "2301802" => "BAIXIO",
        "2301851" => "BANABUIU",
        "2301901" => "BARBALHA",
        "2301950" => "BARREIRA",
        "2302008" => "BARRO",
        "2302057" => "BARROQUINHA",
        "2302107" => "BATURITE",
        "2302206" => "BEBERIBE",
        "2302305" => "BELA CRUZ",
        "2302404" => "BOA VIAGEM",
        "2302503" => "BREJO SANTO",
        "2302602" => "CAMOCIM",
        "2302701" => "CAMPOS SALES",
        "2302800" => "CANINDE",
        "2302909" => "CAPISTRANO",
        "2303006" => "CARIDADE",
        "2303105" => "CARIRE",
        "2303204" => "CARIRIACU",
        "2303303" => "CARIUS",
        "2303402" => "CARNAUBAL",
        "2303501" => "CASCAVEL",
        "2303600" => "CATARINA",
        "2303659" => "CATUNDA",
        "2303709" => "CAUCAIA",
        "2303808" => "CEDRO",
        "2303907" => "CHAVAL",
        "2303931" => "CHORO",
        "2303956" => "CHOROZINHO",
        "2304004" => "COREAU",
        "2304103" => "CRATEUS",
        "2304202" => "CRATO",
        "2304236" => "CROATA",
        "2304251" => "CRUZ",
        "2304269" => "DEPUTADO IRAPUAN PINHEIRO",
        "2304277" => "ERERE",
        "2304285" => "EUSEBIO",
        "2304301" => "FARIAS BRITO",
        "2304350" => "FORQUILHA",
        "2304400" => "FORTALEZA",
        "2304459" => "FORTIM",
        "2304509" => "FRECHEIRINHA",
        "2304608" => "GENERAL SAMPAIO",
        "2304657" => "GRACA",
        "2304707" => "GRANJA",
        "2304806" => "GRANJEIRO",
        "2304905" => "GROAIRAS",
        "2304954" => "GUAIUBA",
        "2305001" => "GUARACIABA DO NORTE",
        "2305100" => "GUARAMIRANGA",
        "2305209" => "HIDROLANDIA",
        "2305233" => "HORIZONTE",
        "2305266" => "IBARETAMA",
        "2305308" => "IBIAPINA",
        "2305332" => "IBICUITINGA",
        "2305357" => "ICAPUI",
        "2305407" => "ICO",
        "2305506" => "IGUATU",
        "2305605" => "INDEPENDENCIA",
        "2305654" => "IPAPORANGA",
        "2305704" => "IPAUMIRIM",
        "2305803" => "IPU",
        "2305902" => "IPUEIRAS",
        "2306009" => "IRACEMA",
        "2306108" => "IRAUCUBA",
        "2306207" => "ITAICABA",
        "2306256" => "ITAITINGA",
        "2306306" => "ITAPAGE",
        "2306405" => "ITAPIPOCA",
        "2306504" => "ITAPIUNA",
        "2306553" => "ITAREMA",
        "2306603" => "ITATIRA",
        "2306702" => "JAGUARETAMA",
        "2306801" => "JAGUARIBARA",
        "2306900" => "JAGUARIBE",
        "2307007" => "JAGUARUANA",
        "2307106" => "JARDIM",
        "2307205" => "JATI",
        "2307254" => "JIJOCA DE JERICOACOARA",
        "2307304" => "JUAZEIRO DO NORTE",
        "2307403" => "JUCAS",
        "2307502" => "LAVRAS DA MANGABEIRA",
        "2307601" => "LIMOEIRO DO NORTE",
        "2307635" => "MADALENA",
        "2307650" => "MARACANAU",
        "2307700" => "MARANGUAPE",
        "2307809" => "MARCO",
        "2307908" => "MARTINOPOLE",
        "2308005" => "MASSAPE",
        "2308104" => "MAURITI",
        "2308203" => "MERUOCA",
        "2308302" => "MILAGRES",
        "2308351" => "MILHA",
        "2308377" => "MIRAIMA",
        "2308401" => "MISSAO VELHA",
        "2308500" => "MOMBACA",
        "2308609" => "MONSENHOR TABOSA",
        "2308708" => "MORADA NOVA",
        "2308807" => "MORAUJO",
        "2308906" => "MORRINHOS",
        "2309003" => "MUCAMBO",
        "2309102" => "MULUNGU",
        "2309201" => "NOVA OLINDA",
        "2309300" => "NOVA RUSSAS",
        "2309409" => "NOVO ORIENTE",
        "2309458" => "OCARA",
        "2309508" => "OROS",
        "2309607" => "PACAJUS",
        "2309706" => "PACATUBA",
        "2309805" => "PACOTI",
        "2309904" => "PACUJA",
        "2310001" => "PALHANO",
        "2310100" => "PALMACIA",
        "2310209" => "PARACURU",
        "2310258" => "PARAIPABA",
        "2310308" => "PARAMBU",
        "2310407" => "PARAMOTI",
        "2310506" => "PEDRA BRANCA",
        "2310605" => "PENAFORTE",
        "2310704" => "PENTECOSTE",
        "2310803" => "PEREIRO",
        "2310852" => "PINDORETAMA",
        "2310902" => "PIQUET CARNEIRO",
        "2310951" => "PIRES FERREIRA",
        "2311009" => "PORANGA",
        "2311108" => "PORTEIRAS",
        "2311207" => "POTENGI",
        "2311231" => "POTIRETAMA",
        "2311264" => "QUITERIANOPOLIS",
        "2311306" => "QUIXADA",
        "2311355" => "QUIXELO",
        "2311405" => "QUIXERAMOBIM",
        "2311504" => "QUIXERE",
        "2311603" => "REDENCAO",
        "2311702" => "RERIUTABA",
        "2311801" => "RUSSAS",
        "2311900" => "SABOEIRO",
        "2311959" => "SALITRE",
        "2312007" => "SANTANA DO ACARAU",
        "2312106" => "SANTANA DO CARIRI",
        "2312205" => "SANTA QUITERIA",
        "2312304" => "SAO BENEDITO",
        "2312403" => "SAO GONCALO DO AMARANTE",
        "2312502" => "SAO JOAO DO JAGUARIBE",
        "2312601" => "SAO LUIS DO CURU",
        "2312700" => "SENADOR POMPEU",
        "2312809" => "SENADOR SA",
        "2312908" => "SOBRAL",
        "2313005" => "SOLONOPOLE",
        "2313104" => "TABULEIRO DO NORTE",
        "2313203" => "TAMBORIL",
        "2313252" => "TARRAFAS",
        "2313302" => "TAUA",
        "2313351" => "TEJUCUOCA",
        "2313401" => "TIANGUA",
        "2313500" => "TRAIRI",
        "2313559" => "TURURU",
        "2313609" => "UBAJARA",
        "2313708" => "UMARI",
        "2313757" => "UMIRIM",
        "2313807" => "URUBURETAMA",
        "2313906" => "URUOCA",
        "2313955" => "VARJOTA",
        "2314003" => "VARZEA ALEGRE",
        "2314102" => "VICOSA DO CEARA"
    ];
        
    public function run()
    {
        foreach (self::$cities as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '6'
            ]);
        }
    }
}