<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityMaTableSeeder extends Seeder
{
    static $cities = [
        "2100055" => "ACAILANDIA",
        "2100105" => "AFONSO CUNHA",
        "2100154" => "AGUA DOCE DO MARANHAO",
        "2100204" => "ALCANTARA",
        "2100303" => "ALDEIAS ALTAS",
        "2100402" => "ALTAMIRA DO MARANHAO",
        "2100436" => "ALTO ALEGRE DO MARANHAO",
        "2100477" => "ALTO ALEGRE DO PINDARE",
        "2100501" => "ALTO PARNAIBA",
        "2100550" => "AMAPA DO MARANHAO",
        "2100600" => "AMARANTE DO MARANHAO",
        "2100709" => "ANAJATUBA",
        "2100808" => "ANAPURUS",
        "2100832" => "APICUM-ACU",
        "2100873" => "ARAGUANA",
        "2100907" => "ARAIOSES",
        "2100956" => "ARAME",
        "2101004" => "ARARI",
        "2101103" => "AXIXA",
        "2101202" => "BACABAL",
        "2101251" => "BACABEIRA",
        "2101301" => "BACURI",
        "2101350" => "BACURITUBA",
        "2101400" => "BALSAS",
        "2101509" => "BARAO DE GRAJAU",
        "2101608" => "BARRA DO CORDA",
        "2101707" => "BARREIRINHAS",
        "2101731" => "BELAGUA",
        "2101772" => "BELA VISTA DO MARANHAO",
        "2101806" => "BENEDITO LEITE",
        "2101905" => "BEQUIMAO",
        "2101939" => "BERNARDO DO MEARIM",
        "2101970" => "BOA VISTA DO GURUPI",
        "2102002" => "BOM JARDIM",
        "2102036" => "BOM JESUS DAS SELVAS",
        "2102077" => "BOM LUGAR",
        "2102101" => "BREJO",
        "2102150" => "BREJO DE AREIA",
        "2102200" => "BURITI",
        "2102309" => "BURITI BRAVO",
        "2102325" => "BURITICUPU",
        "2102358" => "BURITIRANA",
        "2102374" => "CACHOEIRA GRANDE",
        "2102408" => "CAJAPIO",
        "2102507" => "CAJARI",
        "2102556" => "CAMPESTRE DO MARANHAO",
        "2102606" => "CANDIDO MENDES",
        "2102705" => "CANTANHEDE",
        "2102754" => "CAPINZAL DO NORTE",
        "2102804" => "CAROLINA",
        "2102903" => "CARUTAPERA",
        "2103000" => "CAXIAS",
        "2103109" => "CEDRAL",
        "2103125" => "CENTRAL DO MARANHAO",
        "2103158" => "CENTRO DO GUILHERME",
        "2103174" => "CENTRO NOVO DO MARANHAO",
        "2103208" => "CHAPADINHA",
        "2103257" => "CIDELANDIA",
        "2103307" => "CODO",
        "2103406" => "COELHO NETO",
        "2103505" => "COLINAS",
        "2103554" => "CONCEICAO DO LAGO-ACU",
        "2103604" => "COROATA",
        "2103703" => "CURURUPU",
        "2103752" => "DAVINOPOLIS",
        "2103802" => "DOM PEDRO",
        "2103901" => "DUQUE BACELAR",
        "2104008" => "ESPERANTINOPOLIS",
        "2104057" => "ESTREITO",
        "2104073" => "FEIRA NOVA DO MARANHAO",
        "2104081" => "FERNANDO FALCAO",
        "2104099" => "FORMOSA DA SERRA NEGRA",
        "2104107" => "FORTALEZA DOS NOGUEIRAS",
        "2104206" => "FORTUNA",
        "2104305" => "GODOFREDO VIANA",
        "2104404" => "GONCALVES DIAS",
        "2104503" => "GOVERNADOR ARCHER",
        "2104552" => "GOVERNADOR EDISON LOBAO",
        "2104602" => "GOVERNADOR EUGENIO BARROS",
        "2104628" => "GOVERNADOR LUIZ ROCHA",
        "2104651" => "GOVERNADOR NEWTON BELLO",
        "2104677" => "GOVERNADOR NUNES FREIRE",
        "2104701" => "GRACA ARANHA",
        "2104800" => "GRAJAU",
        "2104909" => "GUIMARAES",
        "2105005" => "HUMBERTO DE CAMPOS",
        "2105104" => "ICATU",
        "2105153" => "IGARAPE DO MEIO",
        "2105203" => "IGARAPE GRANDE",
        "2105302" => "IMPERATRIZ",
        "2105351" => "ITAIPAVA DO GRAJAU",
        "2105401" => "ITAPECURU MIRIM",
        "2105427" => "ITINGA DO MARANHAO",
        "2105450" => "JATOBA",
        "2105476" => "JENIPAPO DOS VIEIRAS",
        "2105500" => "JOAO LISBOA",
        "2105609" => "JOSELANDIA",
        "2105658" => "JUNCO DO MARANHAO",
        "2105708" => "LAGO DA PEDRA",
        "2105807" => "LAGO DO JUNCO",
        "2105906" => "LAGO VERDE",
        "2105922" => "LAGOA DO MATO",
        "2105948" => "LAGO DOS RODRIGUES",
        "2105963" => "LAGOA GRANDE DO MARANHAO",
        "2105989" => "LAJEADO NOVO",
        "2106003" => "LIMA CAMPOS",
        "2106102" => "LORETO",
        "2106201" => "LUIS DOMINGUES",
        "2106300" => "MAGALHAES DE ALMEIDA",
        "2106326" => "MARACACUME",
        "2106359" => "MARAJA DO SENA",
        "2106375" => "MARANHAOZINHO",
        "2106409" => "MATA ROMA",
        "2106508" => "MATINHA",
        "2106607" => "MATOES",
        "2106631" => "MATOES DO NORTE",
        "2106672" => "MILAGRES DO MARANHAO",
        "2106706" => "MIRADOR",
        "2106755" => "MIRANDA DO NORTE",
        "2106805" => "MIRINZAL",
        "2106904" => "MONCAO",
        "2107001" => "MONTES ALTOS",
        "2107100" => "MORROS",
        "2107209" => "NINA RODRIGUES",
        "2107258" => "NOVA COLINAS",
        "2107308" => "NOVA IORQUE",
        "2107357" => "NOVA OLINDA DO MARANHAO",
        "2107407" => "OLHO D AGUA DAS CUNHAS",
        "2107456" => "OLINDA NOVA DO MARANHAO",
        "2107506" => "PACO DO LUMIAR",
        "2107605" => "PALMEIRANDIA",
        "2107704" => "PARAIBANO",
        "2107803" => "PARNARAMA",
        "2107902" => "PASSAGEM FRANCA",
        "2108009" => "PASTOS BONS",
        "2108058" => "PAULINO NEVES",
        "2108108" => "PAULO RAMOS",
        "2108207" => "PEDREIRAS",
        "2108256" => "PEDRO DO ROSARIO",
        "2108306" => "PENALVA",
        "2108405" => "PERI MIRIM",
        "2108454" => "PERITORO",
        "2108504" => "PINDARE-MIRIM",
        "2108603" => "PINHEIRO",
        "2108702" => "PIO XII",
        "2108801" => "PIRAPEMAS",
        "2108900" => "POCAO DE PEDRAS",
        "2109007" => "PORTO FRANCO",
        "2109056" => "PORTO RICO DO MARANHAO",
        "2109106" => "PRESIDENTE DUTRA",
        "2109205" => "PRESIDENTE JUSCELINO",
        "2109239" => "PRESIDENTE MEDICI",
        "2109270" => "PRESIDENTE SARNEY",
        "2109304" => "PRESIDENTE VARGAS",
        "2109403" => "PRIMEIRA CRUZ",
        "2109452" => "RAPOSA",
        "2109502" => "RIACHAO",
        "2109551" => "RIBAMAR FIQUENE",
        "2109601" => "ROSARIO",
        "2109700" => "SAMBAIBA",
        "2109759" => "SANTA FILOMENA DO MARANHAO",
        "2109809" => "SANTA HELENA",
        "2109908" => "SANTA INES",
        "2110005" => "SANTA LUZIA",
        "2110039" => "SANTA LUZIA DO PARUA",
        "2110104" => "SANTA QUITERIA DO MARANHAO",
        "2110203" => "SANTA RITA",
        "2110237" => "SANTANA DO MARANHAO",
        "2110278" => "SANTO AMARO DO MARANHAO",
        "2110302" => "SANTO ANTONIO DOS LOPES",
        "2110401" => "SAO BENEDITO DO RIO PRETO",
        "2110500" => "SAO BENTO",
        "2110609" => "SAO BERNARDO",
        "2110658" => "SAO DOMINGOS DO AZEITAO",
        "2110708" => "SAO DOMINGOS DO MARANHAO",
        "2110807" => "SAO FELIX DE BALSAS",
        "2110856" => "SAO FRANCISCO DO BREJAO",
        "2110906" => "SAO FRANCISCO DO MARANHAO",
        "2111003" => "SAO JOAO BATISTA",
        "2111029" => "SAO JOAO DO CARU",
        "2111052" => "SAO JOAO DO PARAISO",
        "2111078" => "SAO JOAO DO SOTER",
        "2111102" => "SAO JOAO DOS PATOS",
        "2111201" => "SAO JOSE DE RIBAMAR",
        "2111250" => "SAO JOSE DOS BASILIOS",
        "2111300" => "SAO LUIS",
        "2111409" => "SAO LUIS GONZAGA DO MARANHAO",
        "2111508" => "SAO MATEUS DO MARANHAO",
        "2111532" => "SAO PEDRO DA AGUA BRANCA",
        "2111573" => "SAO PEDRO DOS CRENTES",
        "2111607" => "SAO RAIMUNDO DAS MANGABEIRAS",
        "2111631" => "SAO RAIMUNDO DO DOCA BEZERRA",
        "2111672" => "SAO ROBERTO",
        "2111706" => "SAO VICENTE FERRER",
        "2111722" => "SATUBINHA",
        "2111748" => "SENADOR ALEXANDRE COSTA",
        "2111763" => "SENADOR LA ROCQUE",
        "2111789" => "SERRANO DO MARANHAO",
        "2111805" => "SITIO NOVO",
        "2111904" => "SUCUPIRA DO NORTE",
        "2111953" => "SUCUPIRA DO RIACHAO",
        "2112001" => "TASSO FRAGOSO",
        "2112100" => "TIMBIRAS",
        "2112209" => "TIMON",
        "2112233" => "TRIZIDELA DO VALE",
        "2112274" => "TUFILANDIA",
        "2112308" => "TUNTUM",
        "2112407" => "TURIACU",
        "2112456" => "TURILANDIA",
        "2112506" => "TUTOIA",
        "2112605" => "URBANO SANTOS",
        "2112704" => "VARGEM GRANDE",
        "2112803" => "VIANA",
        "2112852" => "VILA NOVA DOS MARTIRIOS",
        "2112902" => "VITORIA DO MEARIM",
        "2113009" => "VITORINO FREIRE",
        "2114007" => "ZE DOCA"
    ];
        
    public function run()
    {
        foreach (self::$cities as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '10'
            ]);
        }
    }
}