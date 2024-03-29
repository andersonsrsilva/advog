<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityPeTableSeeder extends Seeder
{
    static array $values = [
        "2600054" => "ABREU E LIMA",
        "2600104" => "AFOGADOS DA INGAZEIRA",
        "2600203" => "AFRANIO",
        "2600302" => "AGRESTINA",
        "2600401" => "AGUA PRETA",
        "2600500" => "AGUAS BELAS",
        "2600609" => "ALAGOINHA",
        "2600708" => "ALIANCA",
        "2600807" => "ALTINHO",
        "2600906" => "AMARAJI",
        "2601003" => "ANGELIM",
        "2601052" => "ARACOIABA",
        "2601102" => "ARARIPINA",
        "2601201" => "ARCOVERDE",
        "2601300" => "BARRA DE GUABIRABA",
        "2601409" => "BARREIROS",
        "2601508" => "BELEM DE MARIA",
        "2601607" => "BELEM DO SAO FRANCISCO",
        "2601706" => "BELO JARDIM",
        "2601805" => "BETANIA",
        "2601904" => "BEZERROS",
        "2602001" => "BODOCO",
        "2602100" => "BOM CONSELHO",
        "2602209" => "BOM JARDIM",
        "2602308" => "BONITO",
        "2602407" => "BREJAO",
        "2602506" => "BREJINHO",
        "2602605" => "BREJO DA MADRE DE DEUS",
        "2602704" => "BUENOS AIRES",
        "2602803" => "BUIQUE",
        "2602902" => "CABO DE SANTO AGOSTINHO",
        "2603009" => "CABROBO",
        "2603108" => "CACHOEIRINHA",
        "2603207" => "CAETES",
        "2603306" => "CALCADO",
        "2603405" => "CALUMBI",
        "2603454" => "CAMARAGIBE",
        "2603504" => "CAMOCIM DE SAO FELIX",
        "2603603" => "CAMUTANGA",
        "2603702" => "CANHOTINHO",
        "2603801" => "CAPOEIRAS",
        "2603900" => "CARNAIBA",
        "2603926" => "CARNAUBEIRA DA PENHA",
        "2604007" => "CARPINA",
        "2604106" => "CARUARU",
        "2604155" => "CASINHAS",
        "2604205" => "CATENDE",
        "2604304" => "CEDRO",
        "2604403" => "CHA DE ALEGRIA",
        "2604502" => "CHA GRANDE",
        "2604601" => "CONDADO",
        "2604700" => "CORRENTES",
        "2604809" => "CORTES",
        "2604908" => "CUMARU",
        "2605004" => "CUPIRA",
        "2605103" => "CUSTODIA",
        "2605152" => "DORMENTES",
        "2605202" => "ESCADA",
        "2605301" => "EXU",
        "2605400" => "FEIRA NOVA",
        "2605459" => "FERNANDO DE NORONHA",
        "2605509" => "FERREIROS",
        "2605608" => "FLORES",
        "2605707" => "FLORESTA",
        "2605806" => "FREI MIGUELINHO",
        "2605905" => "GAMELEIRA",
        "2606002" => "GARANHUNS",
        "2606101" => "GLORIA DO GOITA",
        "2606200" => "GOIANA",
        "2606309" => "GRANITO",
        "2606408" => "GRAVATA",
        "2606507" => "IATI",
        "2606606" => "IBIMIRIM",
        "2606705" => "IBIRAJUBA",
        "2606804" => "IGARASSU",
        "2606903" => "IGUARACI",
        "2607000" => "INAJA",
        "2607109" => "INGAZEIRA",
        "2607208" => "IPOJUCA",
        "2607307" => "IPUBI",
        "2607406" => "ITACURUBA",
        "2607505" => "ITAIBA",
        "2607604" => "ILHA DE ITAMARACA",
        "2607653" => "ITAMBE",
        "2607703" => "ITAPETIM",
        "2607752" => "ITAPISSUMA",
        "2607802" => "ITAQUITINGA",
        "2607901" => "JABOATAO DOS GUARARAPES",
        "2607950" => "JAQUEIRA",
        "2608008" => "JATAUBA",
        "2608057" => "JATOBA",
        "2608107" => "JOAO ALFREDO",
        "2608206" => "JOAQUIM NABUCO",
        "2608255" => "JUCATI",
        "2608305" => "JUPI",
        "2608404" => "JUREMA",
        "2608453" => "LAGOA DO CARRO",
        "2608503" => "LAGOA DE ITAENGA",
        "2608602" => "LAGOA DO OURO",
        "2608701" => "LAGOA DOS GATOS",
        "2608750" => "LAGOA GRANDE",
        "2608800" => "LAJEDO",
        "2608909" => "LIMOEIRO",
        "2609006" => "MACAPARANA",
        "2609105" => "MACHADOS",
        "2609154" => "MANARI",
        "2609204" => "MARAIAL",
        "2609303" => "MIRANDIBA",
        "2609402" => "MORENO",
        "2609501" => "NAZARE DA MATA",
        "2609600" => "OLINDA",
        "2609709" => "OROBO",
        "2609808" => "OROCO",
        "2609907" => "OURICURI",
        "2610004" => "PALMARES",
        "2610103" => "PALMEIRINA",
        "2610202" => "PANELAS",
        "2610301" => "PARANATAMA",
        "2610400" => "PARNAMIRIM",
        "2610509" => "PASSIRA",
        "2610608" => "PAUDALHO",
        "2610707" => "PAULISTA",
        "2610806" => "PEDRA",
        "2610905" => "PESQUEIRA",
        "2611002" => "PETROLANDIA",
        "2611101" => "PETROLINA",
        "2611200" => "POCAO",
        "2611309" => "POMBOS",
        "2611408" => "PRIMAVERA",
        "2611507" => "QUIPAPA",
        "2611533" => "QUIXABA",
        "2611606" => "RECIFE",
        "2611705" => "RIACHO DAS ALMAS",
        "2611804" => "RIBEIRAO",
        "2611903" => "RIO FORMOSO",
        "2612000" => "SAIRE",
        "2612109" => "SALGADINHO",
        "2612208" => "SALGUEIRO",
        "2612307" => "SALOA",
        "2612406" => "SANHARO",
        "2612455" => "SANTA CRUZ",
        "2612471" => "SANTA CRUZ DA BAIXA VERDE",
        "2612505" => "SANTA CRUZ DO CAPIBARIBE",
        "2612554" => "SANTA FILOMENA",
        "2612604" => "SANTA MARIA DA BOA VISTA",
        "2612703" => "SANTA MARIA DO CAMBUCA",
        "2612802" => "SANTA TEREZINHA",
        "2612901" => "SAO BENEDITO DO SUL",
        "2613008" => "SAO BENTO DO UNA",
        "2613107" => "SAO CAITANO",
        "2613206" => "SAO JOAO",
        "2613305" => "SAO JOAQUIM DO MONTE",
        "2613404" => "SAO JOSE DA COROA GRANDE",
        "2613503" => "SAO JOSE DO BELMONTE",
        "2613602" => "SAO JOSE DO EGITO",
        "2613701" => "SAO LOURENCO DA MATA",
        "2613800" => "SAO VICENTE FERRER",
        "2613909" => "SERRA TALHADA",
        "2614006" => "SERRITA",
        "2614105" => "SERTANIA",
        "2614204" => "SIRINHAEM",
        "2614303" => "MOREILANDIA",
        "2614402" => "SOLIDAO",
        "2614501" => "SURUBIM",
        "2614600" => "TABIRA",
        "2614709" => "TACAIMBO",
        "2614808" => "TACARATU",
        "2614857" => "TAMANDARE",
        "2615003" => "TAQUARITINGA DO NORTE",
        "2615102" => "TEREZINHA",
        "2615201" => "TERRA NOVA",
        "2615300" => "TIMBAUBA",
        "2615409" => "TORITAMA",
        "2615508" => "TRACUNHAEM",
        "2615607" => "TRINDADE",
        "2615706" => "TRIUNFO",
        "2615805" => "TUPANATINGA",
        "2615904" => "TUPARETAMA",
        "2616001" => "VENTUROSA",
        "2616100" => "VERDEJANTE",
        "2616183" => "VERTENTE DO LERIO",
        "2616209" => "VERTENTES",
        "2616308" => "VICENCIA",
        "2616407" => "VITORIA DE SANTO ANTAO",
        "2616506" => "XEXEU"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '17'
            ]);
        }
    }
}
