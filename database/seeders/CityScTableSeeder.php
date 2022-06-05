<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityScTableSeeder extends Seeder
{
    static $cities = [
        "4200051" => "ABDON BATISTA",
        "4200101" => "ABELARDO LUZ",
        "4200200" => "AGROLANDIA",
        "4200309" => "AGRONOMICA",
        "4200408" => "AGUA DOCE",
        "4200507" => "AGUAS DE CHAPECO",
        "4200556" => "AGUAS FRIAS",
        "4200606" => "AGUAS MORNAS",
        "4200705" => "ALFREDO WAGNER",
        "4200754" => "ALTO BELA VISTA",
        "4200804" => "ANCHIETA",
        "4200903" => "ANGELINA",
        "4201000" => "ANITA GARIBALDI",
        "4201109" => "ANITAPOLIS",
        "4201208" => "ANTONIO CARLOS",
        "4201257" => "APIUNA",
        "4201273" => "ARABUTA",
        "4201307" => "ARAQUARI",
        "4201406" => "ARARANGUA",
        "4201505" => "ARMAZEM",
        "4201604" => "ARROIO TRINTA",
        "4201653" => "ARVOREDO",
        "4201703" => "ASCURRA",
        "4201802" => "ATALANTA",
        "4201901" => "AURORA",
        "4201950" => "BALNEARIO ARROIO DO SILVA",
        "4202008" => "BALNEARIO CAMBORIU",
        "4202057" => "BALNEARIO BARRA DO SUL",
        "4202073" => "BALNEARIO GAIVOTA",
        "4202081" => "BANDEIRANTE",
        "4202099" => "BARRA BONITA",
        "4202107" => "BARRA VELHA",
        "4202131" => "BELA VISTA DO TOLDO",
        "4202156" => "BELMONTE",
        "4202206" => "BENEDITO NOVO",
        "4202305" => "BIGUACU",
        "4202404" => "BLUMENAU",
        "4202438" => "BOCAINA DO SUL",
        "4202453" => "BOMBINHAS",
        "4202503" => "BOM JARDIM DA SERRA",
        "4202537" => "BOM JESUS",
        "4202578" => "BOM JESUS DO OESTE",
        "4202602" => "BOM RETIRO",
        "4202701" => "BOTUVERA",
        "4202800" => "BRACO DO NORTE",
        "4202859" => "BRACO DO TROMBUDO",
        "4202875" => "BRUNOPOLIS",
        "4202909" => "BRUSQUE",
        "4203006" => "CACADOR",
        "4203105" => "CAIBI",
        "4203154" => "CALMON",
        "4203204" => "CAMBORIU",
        "4203253" => "CAPAO ALTO",
        "4203303" => "CAMPO ALEGRE",
        "4203402" => "CAMPO BELO DO SUL",
        "4203501" => "CAMPO ERE",
        "4203600" => "CAMPOS NOVOS",
        "4203709" => "CANELINHA",
        "4203808" => "CANOINHAS",
        "4203907" => "CAPINZAL",
        "4203956" => "CAPIVARI DE BAIXO",
        "4204004" => "CATANDUVAS",
        "4204103" => "CAXAMBU DO SUL",
        "4204152" => "CELSO RAMOS",
        "4204178" => "CERRO NEGRO",
        "4204194" => "CHAPADAO DO LAGEADO",
        "4204202" => "CHAPECO",
        "4204251" => "COCAL DO SUL",
        "4204301" => "CONCORDIA",
        "4204350" => "CORDILHEIRA ALTA",
        "4204400" => "CORONEL FREITAS",
        "4204459" => "CORONEL MARTINS",
        "4204509" => "CORUPA",
        "4204558" => "CORREIA PINTO",
        "4204608" => "CRICIUMA",
        "4204707" => "CUNHA PORA",
        "4204756" => "CUNHATAI",
        "4204806" => "CURITIBANOS",
        "4204905" => "DESCANSO",
        "4205001" => "DIONISIO CERQUEIRA",
        "4205100" => "DONA EMMA",
        "4205159" => "DOUTOR PEDRINHO",
        "4205175" => "ENTRE RIOS",
        "4205191" => "ERMO",
        "4205209" => "ERVAL VELHO",
        "4205308" => "FAXINAL DOS GUEDES",
        "4205357" => "FLOR DO SERTAO",
        "4205407" => "FLORIANOPOLIS",
        "4205431" => "FORMOSA DO SUL",
        "4205456" => "FORQUILHINHA",
        "4205506" => "FRAIBURGO",
        "4205555" => "FREI ROGERIO",
        "4205605" => "GALVAO",
        "4205704" => "GAROPABA",
        "4205803" => "GARUVA",
        "4205902" => "GASPAR",
        "4206009" => "GOVERNADOR CELSO RAMOS",
        "4206108" => "GRAO PARA",
        "4206207" => "GRAVATAL",
        "4206306" => "GUABIRUBA",
        "4206405" => "GUARACIABA",
        "4206504" => "GUARAMIRIM",
        "4206603" => "GUARUJA DO SUL",
        "4206652" => "GUATAMBU",
        "4206702" => "HERVAL D OESTE",
        "4206751" => "IBIAM",
        "4206801" => "IBICARE",
        "4206900" => "IBIRAMA",
        "4207007" => "ICARA",
        "4207106" => "ILHOTA",
        "4207205" => "IMARUI",
        "4207304" => "IMBITUBA",
        "4207403" => "IMBUIA",
        "4207502" => "INDAIAL",
        "4207577" => "IOMERE",
        "4207601" => "IPIRA",
        "4207650" => "IPORA DO OESTE",
        "4207684" => "IPUACU",
        "4207700" => "IPUMIRIM",
        "4207759" => "IRACEMINHA",
        "4207809" => "IRANI",
        "4207858" => "IRATI",
        "4207908" => "IRINEOPOLIS",
        "4208005" => "ITA",
        "4208104" => "ITAIOPOLIS",
        "4208203" => "ITAJAI",
        "4208302" => "ITAPEMA",
        "4208401" => "ITAPIRANGA",
        "4208450" => "ITAPOA",
        "4208500" => "ITUPORANGA",
        "4208609" => "JABORA",
        "4208708" => "JACINTO MACHADO",
        "4208807" => "JAGUARUNA",
        "4208906" => "JARAGUA DO SUL",
        "4208955" => "JARDINOPOLIS",
        "4209003" => "JOACABA",
        "4209102" => "JOINVILLE",
        "4209151" => "JOSE BOITEUX",
        "4209177" => "JUPIA",
        "4209201" => "LACERDOPOLIS",
        "4209300" => "LAGES",
        "4209409" => "LAGUNA",
        "4209458" => "LAJEADO GRANDE",
        "4209508" => "LAURENTINO",
        "4209607" => "LAURO MULLER",
        "4209706" => "LEBON REGIS",
        "4209805" => "LEOBERTO LEAL",
        "4209854" => "LINDOIA DO SUL",
        "4209904" => "LONTRAS",
        "4210001" => "LUIZ ALVES",
        "4210035" => "LUZERNA",
        "4210050" => "MACIEIRA",
        "4210100" => "MAFRA",
        "4210209" => "MAJOR GERCINO",
        "4210308" => "MAJOR VIEIRA",
        "4210407" => "MARACAJA",
        "4210506" => "MARAVILHA",
        "4210555" => "MAREMA",
        "4210605" => "MASSARANDUBA",
        "4210704" => "MATOS COSTA",
        "4210803" => "MELEIRO",
        "4210852" => "MIRIM DOCE",
        "4210902" => "MODELO",
        "4211009" => "MONDAI",
        "4211058" => "MONTE CARLO",
        "4211108" => "MONTE CASTELO",
        "4211207" => "MORRO DA FUMACA",
        "4211256" => "MORRO GRANDE",
        "4211306" => "NAVEGANTES",
        "4211405" => "NOVA ERECHIM",
        "4211454" => "NOVA ITABERABA",
        "4211504" => "NOVA TRENTO",
        "4211603" => "NOVA VENEZA",
        "4211652" => "NOVO HORIZONTE",
        "4211702" => "ORLEANS",
        "4211751" => "OTACILIO COSTA",
        "4211801" => "OURO",
        "4211850" => "OURO VERDE",
        "4211876" => "PAIAL",
        "4211892" => "PAINEL",
        "4211900" => "PALHOCA",
        "4212007" => "PALMA SOLA",
        "4212056" => "PALMEIRA",
        "4212106" => "PALMITOS",
        "4212205" => "PAPANDUVA",
        "4212239" => "PARAISO",
        "4212254" => "PASSO DE TORRES",
        "4212270" => "PASSOS MAIA",
        "4212304" => "PAULO LOPES",
        "4212403" => "PEDRAS GRANDES",
        "4212502" => "PENHA",
        "4212601" => "PERITIBA",
        "4212650" => "PESCARIA BRAVA",
        "4212700" => "PETROLANDIA",
        "4212809" => "BALNEARIO PICARRAS",
        "4212908" => "PINHALZINHO",
        "4213005" => "PINHEIRO PRETO",
        "4213104" => "PIRATUBA",
        "4213153" => "PLANALTO ALEGRE",
        "4213203" => "POMERODE",
        "4213302" => "PONTE ALTA",
        "4213351" => "PONTE ALTA DO NORTE",
        "4213401" => "PONTE SERRADA",
        "4213500" => "PORTO BELO",
        "4213609" => "PORTO UNIAO",
        "4213708" => "POUSO REDONDO",
        "4213807" => "PRAIA GRANDE",
        "4213906" => "PRESIDENTE CASTELLO BRANCO",
        "4214003" => "PRESIDENTE GETULIO",
        "4214102" => "PRESIDENTE NEREU",
        "4214151" => "PRINCESA",
        "4214201" => "QUILOMBO",
        "4214300" => "RANCHO QUEIMADO",
        "4214409" => "RIO DAS ANTAS",
        "4214508" => "RIO DO CAMPO",
        "4214607" => "RIO DO OESTE",
        "4214706" => "RIO DOS CEDROS",
        "4214805" => "RIO DO SUL",
        "4214904" => "RIO FORTUNA",
        "4215000" => "RIO NEGRINHO",
        "4215059" => "RIO RUFINO",
        "4215075" => "RIQUEZA",
        "4215109" => "RODEIO",
        "4215208" => "ROMELANDIA",
        "4215307" => "SALETE",
        "4215356" => "SALTINHO",
        "4215406" => "SALTO VELOSO",
        "4215455" => "SANGAO",
        "4215505" => "SANTA CECILIA",
        "4215554" => "SANTA HELENA",
        "4215604" => "SANTA ROSA DE LIMA",
        "4215653" => "SANTA ROSA DO SUL",
        "4215679" => "SANTA TEREZINHA",
        "4215687" => "SANTA TEREZINHA DO PROGRESSO",
        "4215695" => "SANTIAGO DO SUL",
        "4215703" => "SANTO AMARO DA IMPERATRIZ",
        "4215752" => "SAO BERNARDINO",
        "4215802" => "SAO BENTO DO SUL",
        "4215901" => "SAO BONIFACIO",
        "4216008" => "SAO CARLOS",
        "4216057" => "SAO CRISTOVAO DO SUL",
        "4216107" => "SAO DOMINGOS",
        "4216206" => "SAO FRANCISCO DO SUL",
        "4216255" => "SAO JOAO DO OESTE",
        "4216305" => "SAO JOAO BATISTA",
        "4216354" => "SAO JOAO DO ITAPERIU",
        "4216404" => "SAO JOAO DO SUL",
        "4216503" => "SAO JOAQUIM",
        "4216602" => "SAO JOSE",
        "4216701" => "SAO JOSE DO CEDRO",
        "4216800" => "SAO JOSE DO CERRITO",
        "4216909" => "SAO LOURENCO DO OESTE",
        "4217006" => "SAO LUDGERO",
        "4217105" => "SAO MARTINHO",
        "4217154" => "SAO MIGUEL DA BOA VISTA",
        "4217204" => "SAO MIGUEL DO OESTE",
        "4217253" => "SAO PEDRO DE ALCANTARA",
        "4217303" => "SAUDADES",
        "4217402" => "SCHROEDER",
        "4217501" => "SEARA",
        "4217550" => "SERRA ALTA",
        "4217600" => "SIDEROPOLIS",
        "4217709" => "SOMBRIO",
        "4217758" => "SUL BRASIL",
        "4217808" => "TAIO",
        "4217907" => "TANGARA",
        "4217956" => "TIGRINHOS",
        "4218004" => "TIJUCAS",
        "4218103" => "TIMBE DO SUL",
        "4218202" => "TIMBO",
        "4218251" => "TIMBO GRANDE",
        "4218301" => "TRES BARRAS",
        "4218350" => "TREVISO",
        "4218400" => "TREZE DE MAIO",
        "4218509" => "TREZE TILIAS",
        "4218608" => "TROMBUDO CENTRAL",
        "4218707" => "TUBARAO",
        "4218756" => "TUNAPOLIS",
        "4218806" => "TURVO",
        "4218855" => "UNIAO DO OESTE",
        "4218905" => "URUBICI",
        "4218954" => "URUPEMA",
        "4219002" => "URUSSANGA",
        "4219101" => "VARGEAO",
        "4219150" => "VARGEM",
        "4219176" => "VARGEM BONITA",
        "4219200" => "VIDAL RAMOS",
        "4219309" => "VIDEIRA",
        "4219358" => "VITOR MEIRELES",
        "4219408" => "WITMARSUM",
        "4219507" => "XANXERE",
        "4219606" => "XAVANTINA",
        "4219705" => "XAXIM",
        "4219853" => "ZORTEA",
        "4220000" => "BALNEARIO RINCAO"
    ];
        
    public function run()
    {
        foreach (self::$cities as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '24'
            ]);
        }
    }
}
