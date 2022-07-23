<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityToTableSeeder extends Seeder
{
    static array $values = [
        "1700251" => "ABREULANDIA",
        "1700301" => "AGUIARNOPOLIS",
        "1700350" => "ALIANCA DO TOCANTINS",
        "1700400" => "ALMAS",
        "1700707" => "ALVORADA",
        "1701002" => "ANANAS",
        "1701051" => "ANGICO",
        "1701101" => "APARECIDA DO RIO NEGRO",
        "1701309" => "ARAGOMINAS",
        "1701903" => "ARAGUACEMA",
        "1702000" => "ARAGUACU",
        "1702109" => "ARAGUAINA",
        "1702158" => "ARAGUANA",
        "1702208" => "ARAGUATINS",
        "1702307" => "ARAPOEMA",
        "1702406" => "ARRAIAS",
        "1702554" => "AUGUSTINOPOLIS",
        "1702703" => "AURORA DO TOCANTINS",
        "1702901" => "AXIXA DO TOCANTINS",
        "1703008" => "BABACULANDIA",
        "1703057" => "BANDEIRANTES DO TOCANTINS",
        "1703073" => "BARRA DO OURO",
        "1703107" => "BARROLANDIA",
        "1703206" => "BERNARDO SAYAO",
        "1703305" => "BOM JESUS DO TOCANTINS",
        "1703602" => "BRASILANDIA DO TOCANTINS",
        "1703701" => "BREJINHO DE NAZARE",
        "1703800" => "BURITI DO TOCANTINS",
        "1703826" => "CACHOEIRINHA",
        "1703842" => "CAMPOS LINDOS",
        "1703867" => "CARIRI DO TOCANTINS",
        "1703883" => "CARMOLANDIA",
        "1703891" => "CARRASCO BONITO",
        "1703909" => "CASEARA",
        "1704105" => "CENTENARIO",
        "1704600" => "CHAPADA DE AREIA",
        "1705102" => "CHAPADA DA NATIVIDADE",
        "1705508" => "COLINAS DO TOCANTINS",
        "1705557" => "COMBINADO",
        "1705607" => "CONCEICAO DO TOCANTINS",
        "1706001" => "COUTO MAGALHAES",
        "1706100" => "CRISTALANDIA",
        "1706258" => "CRIXAS DO TOCANTINS",
        "1706506" => "DARCINOPOLIS",
        "1707009" => "DIANOPOLIS",
        "1707108" => "DIVINOPOLIS DO TOCANTINS",
        "1707207" => "DOIS IRMAOS DO TOCANTINS",
        "1707306" => "DUERE",
        "1707405" => "ESPERANTINA",
        "1707553" => "FATIMA",
        "1707652" => "FIGUEIROPOLIS",
        "1707702" => "FILADELFIA",
        "1708205" => "FORMOSO DO ARAGUAIA",
        "1708254" => "FORTALEZA DO TABOCAO",
        "1708304" => "GOIANORTE",
        "1709005" => "GOIATINS",
        "1709302" => "GUARAI",
        "1709500" => "GURUPI",
        "1709807" => "IPUEIRAS",
        "1710508" => "ITACAJA",
        "1710706" => "ITAGUATINS",
        "1710904" => "ITAPIRATINS",
        "1711100" => "ITAPORA DO TOCANTINS",
        "1711506" => "JAU DO TOCANTINS",
        "1711803" => "JUARINA",
        "1711902" => "LAGOA DA CONFUSAO",
        "1711951" => "LAGOA DO TOCANTINS",
        "1712009" => "LAJEADO",
        "1712157" => "LAVANDEIRA",
        "1712405" => "LIZARDA",
        "1712454" => "LUZINOPOLIS",
        "1712504" => "MARIANOPOLIS DO TOCANTINS",
        "1712702" => "MATEIROS",
        "1712801" => "MAURILANDIA DO TOCANTINS",
        "1713205" => "MIRACEMA DO TOCANTINS",
        "1713304" => "MIRANORTE",
        "1713601" => "MONTE DO CARMO",
        "1713700" => "MONTE SANTO DO TOCANTINS",
        "1713809" => "PALMEIRAS DO TOCANTINS",
        "1713957" => "MURICILANDIA",
        "1714203" => "NATIVIDADE",
        "1714302" => "NAZARE",
        "1714880" => "NOVA OLINDA",
        "1715002" => "NOVA ROSALANDIA",
        "1715101" => "NOVO ACORDO",
        "1715150" => "NOVO ALEGRE",
        "1715259" => "NOVO JARDIM",
        "1715507" => "OLIVEIRA DE FATIMA",
        "1715705" => "PALMEIRANTE",
        "1715754" => "PALMEIROPOLIS",
        "1716109" => "PARAISO DO TOCANTINS",
        "1716208" => "PARANA",
        "1716307" => "PAU D ARCO",
        "1716505" => "PEDRO AFONSO",
        "1716604" => "PEIXE",
        "1716653" => "PEQUIZEIRO",
        "1716703" => "COLMEIA",
        "1717008" => "PINDORAMA DO TOCANTINS",
        "1717206" => "PIRAQUE",
        "1717503" => "PIUM",
        "1717800" => "PONTE ALTA DO BOM JESUS",
        "1717909" => "PONTE ALTA DO TOCANTINS",
        "1718006" => "PORTO ALEGRE DO TOCANTINS",
        "1718204" => "PORTO NACIONAL",
        "1718303" => "PRAIA NORTE",
        "1718402" => "PRESIDENTE KENNEDY",
        "1718451" => "PUGMIL",
        "1718501" => "RECURSOLANDIA",
        "1718550" => "RIACHINHO",
        "1718659" => "RIO DA CONCEICAO",
        "1718709" => "RIO DOS BOIS",
        "1718758" => "RIO SONO",
        "1718808" => "SAMPAIO",
        "1718840" => "SANDOLANDIA",
        "1718865" => "SANTA FE DO ARAGUAIA",
        "1718881" => "SANTA MARIA DO TOCANTINS",
        "1718899" => "SANTA RITA DO TOCANTINS",
        "1718907" => "SANTA ROSA DO TOCANTINS",
        "1719004" => "SANTA TEREZA DO TOCANTINS",
        "1720002" => "SANTA TEREZINHA DO TOCANTINS",
        "1720101" => "SAO BENTO DO TOCANTINS",
        "1720150" => "SAO FELIX DO TOCANTINS",
        "1720200" => "SAO MIGUEL DO TOCANTINS",
        "1720259" => "SAO SALVADOR DO TOCANTINS",
        "1720309" => "SAO SEBASTIAO DO TOCANTINS",
        "1720499" => "SAO VALERIO",
        "1720655" => "SILVANOPOLIS",
        "1720804" => "SITIO NOVO DO TOCANTINS",
        "1720853" => "SUCUPIRA",
        "1720903" => "TAGUATINGA",
        "1720937" => "TAIPAS DO TOCANTINS",
        "1720978" => "TALISMA",
        "1721000" => "PALMAS",
        "1721109" => "TOCANTINIA",
        "1721208" => "TOCANTINOPOLIS",
        "1721257" => "TUPIRAMA",
        "1721307" => "TUPIRATINS",
        "1722081" => "WANDERLANDIA",
        "1722107" => "XAMBIOA"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '27'
            ]);
        }
    }
}
