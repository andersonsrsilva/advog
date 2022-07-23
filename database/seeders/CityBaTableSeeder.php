<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityBaTableSeeder extends Seeder
{
    static array $values = [
        "2900108" => "ABAIRA",
        "2900207" => "ABARE",
        "2900306" => "ACAJUTIBA",
        "2900355" => "ADUSTINA",
        "2900405" => "AGUA FRIA",
        "2900504" => "ERICO CARDOSO",
        "2900603" => "AIQUARA",
        "2900702" => "ALAGOINHAS",
        "2900801" => "ALCOBACA",
        "2900900" => "ALMADINA",
        "2901007" => "AMARGOSA",
        "2901106" => "AMELIA RODRIGUES",
        "2901155" => "AMERICA DOURADA",
        "2901205" => "ANAGE",
        "2901304" => "ANDARAI",
        "2901353" => "ANDORINHA",
        "2901403" => "ANGICAL",
        "2901502" => "ANGUERA",
        "2901601" => "ANTAS",
        "2901700" => "ANTONIO CARDOSO",
        "2901809" => "ANTONIO GONCALVES",
        "2901908" => "APORA",
        "2901957" => "APUAREMA",
        "2902005" => "ARACATU",
        "2902054" => "ARACAS",
        "2902104" => "ARACI",
        "2902203" => "ARAMARI",
        "2902252" => "ARATACA",
        "2902302" => "ARATUIPE",
        "2902401" => "AURELINO LEAL",
        "2902500" => "BAIANOPOLIS",
        "2902609" => "BAIXA GRANDE",
        "2902658" => "BANZAE",
        "2902708" => "BARRA",
        "2902807" => "BARRA DA ESTIVA",
        "2902906" => "BARRA DO CHOCA",
        "2903003" => "BARRA DO MENDES",
        "2903102" => "BARRA DO ROCHA",
        "2903201" => "BARREIRAS",
        "2903235" => "BARRO ALTO",
        "2903276" => "BARROCAS",
        "2903300" => "BARRO PRETO",
        "2903409" => "BELMONTE",
        "2903508" => "BELO CAMPO",
        "2903607" => "BIRITINGA",
        "2903706" => "BOA NOVA",
        "2903805" => "BOA VISTA DO TUPIM",
        "2903904" => "BOM JESUS DA LAPA",
        "2903953" => "BOM JESUS DA SERRA",
        "2904001" => "BONINAL",
        "2904050" => "BONITO",
        "2904100" => "BOQUIRA",
        "2904209" => "BOTUPORA",
        "2904308" => "BREJOES",
        "2904407" => "BREJOLANDIA",
        "2904506" => "BROTAS DE MACAUBAS",
        "2904605" => "BRUMADO",
        "2904704" => "BUERAREMA",
        "2904753" => "BURITIRAMA",
        "2904803" => "CAATIBA",
        "2904852" => "CABACEIRAS DO PARAGUACU",
        "2904902" => "CACHOEIRA",
        "2905008" => "CACULE",
        "2905107" => "CAEM",
        "2905156" => "CAETANOS",
        "2905206" => "CAETITE",
        "2905305" => "CAFARNAUM",
        "2905404" => "CAIRU",
        "2905503" => "CALDEIRAO GRANDE",
        "2905602" => "CAMACAN",
        "2905701" => "CAMACARI",
        "2905800" => "CAMAMU",
        "2905909" => "CAMPO ALEGRE DE LOURDES",
        "2906006" => "CAMPO FORMOSO",
        "2906105" => "CANAPOLIS",
        "2906204" => "CANARANA",
        "2906303" => "CANAVIEIRAS",
        "2906402" => "CANDEAL",
        "2906501" => "CANDEIAS",
        "2906600" => "CANDIBA",
        "2906709" => "CANDIDO SALES",
        "2906808" => "CANSANCAO",
        "2906824" => "CANUDOS",
        "2906857" => "CAPELA DO ALTO ALEGRE",
        "2906873" => "CAPIM GROSSO",
        "2906899" => "CARAIBAS",
        "2906907" => "CARAVELAS",
        "2907004" => "CARDEAL DA SILVA",
        "2907103" => "CARINHANHA",
        "2907202" => "CASA NOVA",
        "2907301" => "CASTRO ALVES",
        "2907400" => "CATOLANDIA",
        "2907509" => "CATU",
        "2907558" => "CATURAMA",
        "2907608" => "CENTRAL",
        "2907707" => "CHORROCHO",
        "2907806" => "CICERO DANTAS",
        "2907905" => "CIPO",
        "2908002" => "COARACI",
        "2908101" => "COCOS",
        "2908200" => "CONCEICAO DA FEIRA",
        "2908309" => "CONCEICAO DO ALMEIDA",
        "2908408" => "CONCEICAO DO COITE",
        "2908507" => "CONCEICAO DO JACUIPE",
        "2908606" => "CONDE",
        "2908705" => "CONDEUBA",
        "2908804" => "CONTENDAS DO SINCORA",
        "2908903" => "CORACAO DE MARIA",
        "2909000" => "CORDEIROS",
        "2909109" => "CORIBE",
        "2909208" => "CORONEL JOAO SA",
        "2909307" => "CORRENTINA",
        "2909406" => "COTEGIPE",
        "2909505" => "CRAVOLANDIA",
        "2909604" => "CRISOPOLIS",
        "2909703" => "CRISTOPOLIS",
        "2909802" => "CRUZ DAS ALMAS",
        "2909901" => "CURACA",
        "2910008" => "DARIO MEIRA",
        "2910057" => "DIAS D AVILA",
        "2910107" => "DOM BASILIO",
        "2910206" => "DOM MACEDO COSTA",
        "2910305" => "ELISIO MEDRADO",
        "2910404" => "ENCRUZILHADA",
        "2910503" => "ENTRE RIOS",
        "2910602" => "ESPLANADA",
        "2910701" => "EUCLIDES DA CUNHA",
        "2910727" => "EUNAPOLIS",
        "2910750" => "FATIMA",
        "2910776" => "FEIRA DA MATA",
        "2910800" => "FEIRA DE SANTANA",
        "2910859" => "FILADELFIA",
        "2910909" => "FIRMINO ALVES",
        "2911006" => "FLORESTA AZUL",
        "2911105" => "FORMOSA DO RIO PRETO",
        "2911204" => "GANDU",
        "2911253" => "GAVIAO",
        "2911303" => "GENTIO DO OURO",
        "2911402" => "GLORIA",
        "2911501" => "GONGOGI",
        "2911600" => "GOVERNADOR MANGABEIRA",
        "2911659" => "GUAJERU",
        "2911709" => "GUANAMBI",
        "2911808" => "GUARATINGA",
        "2911857" => "HELIOPOLIS",
        "2911907" => "IACU",
        "2912004" => "IBIASSUCE",
        "2912103" => "IBICARAI",
        "2912202" => "IBICOARA",
        "2912301" => "IBICUI",
        "2912400" => "IBIPEBA",
        "2912509" => "IBIPITANGA",
        "2912608" => "IBIQUERA",
        "2912707" => "IBIRAPITANGA",
        "2912806" => "IBIRAPUA",
        "2912905" => "IBIRATAIA",
        "2913002" => "IBITIARA",
        "2913101" => "IBITITA",
        "2913200" => "IBOTIRAMA",
        "2913309" => "ICHU",
        "2913408" => "IGAPORA",
        "2913457" => "IGRAPIUNA",
        "2913507" => "IGUAI",
        "2913606" => "ILHEUS",
        "2913705" => "INHAMBUPE",
        "2913804" => "IPECAETA",
        "2913903" => "IPIAU",
        "2914000" => "IPIRA",
        "2914109" => "IPUPIARA",
        "2914208" => "IRAJUBA",
        "2914307" => "IRAMAIA",
        "2914406" => "IRAQUARA",
        "2914505" => "IRARA",
        "2914604" => "IRECE",
        "2914653" => "ITABELA",
        "2914703" => "ITABERABA",
        "2914802" => "ITABUNA",
        "2914901" => "ITACARE",
        "2915007" => "ITAETE",
        "2915106" => "ITAGI",
        "2915205" => "ITAGIBA",
        "2915304" => "ITAGIMIRIM",
        "2915353" => "ITAGUACU DA BAHIA",
        "2915403" => "ITAJU DO COLONIA",
        "2915502" => "ITAJUIPE",
        "2915601" => "ITAMARAJU",
        "2915700" => "ITAMARI",
        "2915809" => "ITAMBE",
        "2915908" => "ITANAGRA",
        "2916005" => "ITANHEM",
        "2916104" => "ITAPARICA",
        "2916203" => "ITAPE",
        "2916302" => "ITAPEBI",
        "2916401" => "ITAPETINGA",
        "2916500" => "ITAPICURU",
        "2916609" => "ITAPITANGA",
        "2916708" => "ITAQUARA",
        "2916807" => "ITARANTIM",
        "2916856" => "ITATIM",
        "2916906" => "ITIRUCU",
        "2917003" => "ITIUBA",
        "2917102" => "ITORORO",
        "2917201" => "ITUACU",
        "2917300" => "ITUBERA",
        "2917334" => "IUIU",
        "2917359" => "JABORANDI",
        "2917409" => "JACARACI",
        "2917508" => "JACOBINA",
        "2917607" => "JAGUAQUARA",
        "2917706" => "JAGUARARI",
        "2917805" => "JAGUARIPE",
        "2917904" => "JANDAIRA",
        "2918001" => "JEQUIE",
        "2918100" => "JEREMOABO",
        "2918209" => "JIQUIRICA",
        "2918308" => "JITAUNA",
        "2918357" => "JOAO DOURADO",
        "2918407" => "JUAZEIRO",
        "2918456" => "JUCURUCU",
        "2918506" => "JUSSARA",
        "2918555" => "JUSSARI",
        "2918605" => "JUSSIAPE",
        "2918704" => "LAFAIETE COUTINHO",
        "2918753" => "LAGOA REAL",
        "2918803" => "LAJE",
        "2918902" => "LAJEDAO",
        "2919009" => "LAJEDINHO",
        "2919058" => "LAJEDO DO TABOCAL",
        "2919108" => "LAMARAO",
        "2919157" => "LAPAO",
        "2919207" => "LAURO DE FREITAS",
        "2919306" => "LENCOIS",
        "2919405" => "LICINIO DE ALMEIDA",
        "2919504" => "LIVRAMENTO DE NOSSA SENHORA",
        "2919553" => "LUIS EDUARDO MAGALHAES",
        "2919603" => "MACAJUBA",
        "2919702" => "MACARANI",
        "2919801" => "MACAUBAS",
        "2919900" => "MACURURE",
        "2919926" => "MADRE DE DEUS",
        "2919959" => "MAETINGA",
        "2920007" => "MAIQUINIQUE",
        "2920106" => "MAIRI",
        "2920205" => "MALHADA",
        "2920304" => "MALHADA DE PEDRAS",
        "2920403" => "MANOEL VITORINO",
        "2920452" => "MANSIDAO",
        "2920502" => "MARACAS",
        "2920601" => "MARAGOGIPE",
        "2920700" => "MARAU",
        "2920809" => "MARCIONILIO SOUZA",
        "2920908" => "MASCOTE",
        "2921005" => "MATA DE SAO JOAO",
        "2921054" => "MATINA",
        "2921104" => "MEDEIROS NETO",
        "2921203" => "MIGUEL CALMON",
        "2921302" => "MILAGRES",
        "2921401" => "MIRANGABA",
        "2921450" => "MIRANTE",
        "2921500" => "MONTE SANTO",
        "2921609" => "MORPARA",
        "2921708" => "MORRO DO CHAPEU",
        "2921807" => "MORTUGABA",
        "2921906" => "MUCUGE",
        "2922003" => "MUCURI",
        "2922052" => "MULUNGU DO MORRO",
        "2922102" => "MUNDO NOVO",
        "2922201" => "MUNIZ FERREIRA",
        "2922250" => "MUQUEM DE SAO FRANCISCO",
        "2922300" => "MURITIBA",
        "2922409" => "MUTUIPE",
        "2922508" => "NAZARE",
        "2922607" => "NILO PECANHA",
        "2922656" => "NORDESTINA",
        "2922706" => "NOVA CANAA",
        "2922730" => "NOVA FATIMA",
        "2922755" => "NOVA IBIA",
        "2922805" => "NOVA ITARANA",
        "2922854" => "NOVA REDENCAO",
        "2922904" => "NOVA SOURE",
        "2923001" => "NOVA VICOSA",
        "2923035" => "NOVO HORIZONTE",
        "2923050" => "NOVO TRIUNFO",
        "2923100" => "OLINDINA",
        "2923209" => "OLIVEIRA DOS BREJINHOS",
        "2923308" => "OURICANGAS",
        "2923357" => "OUROLANDIA",
        "2923407" => "PALMAS DE MONTE ALTO",
        "2923506" => "PALMEIRAS",
        "2923605" => "PARAMIRIM",
        "2923704" => "PARATINGA",
        "2923803" => "PARIPIRANGA",
        "2923902" => "PAU BRASIL",
        "2924009" => "PAULO AFONSO",
        "2924058" => "PE DE SERRA",
        "2924108" => "PEDRAO",
        "2924207" => "PEDRO ALEXANDRE",
        "2924306" => "PIATA",
        "2924405" => "PILAO ARCADO",
        "2924504" => "PINDAI",
        "2924603" => "PINDOBACU",
        "2924652" => "PINTADAS",
        "2924678" => "PIRAI DO NORTE",
        "2924702" => "PIRIPA",
        "2924801" => "PIRITIBA",
        "2924900" => "PLANALTINO",
        "2925006" => "PLANALTO",
        "2925105" => "POCOES",
        "2925204" => "POJUCA",
        "2925253" => "PONTO NOVO",
        "2925303" => "PORTO SEGURO",
        "2925402" => "POTIRAGUA",
        "2925501" => "PRADO",
        "2925600" => "PRESIDENTE DUTRA",
        "2925709" => "PRESIDENTE JANIO QUADROS",
        "2925758" => "PRESIDENTE TANCREDO NEVES",
        "2925808" => "QUEIMADAS",
        "2925907" => "QUIJINGUE",
        "2925931" => "QUIXABEIRA",
        "2925956" => "RAFAEL JAMBEIRO",
        "2926004" => "REMANSO",
        "2926103" => "RETIROLANDIA",
        "2926202" => "RIACHAO DAS NEVES",
        "2926301" => "RIACHAO DO JACUIPE",
        "2926400" => "RIACHO DE SANTANA",
        "2926509" => "RIBEIRA DO AMPARO",
        "2926608" => "RIBEIRA DO POMBAL",
        "2926657" => "RIBEIRAO DO LARGO",
        "2926707" => "RIO DE CONTAS",
        "2926806" => "RIO DO ANTONIO",
        "2926905" => "RIO DO PIRES",
        "2927002" => "RIO REAL",
        "2927101" => "RODELAS",
        "2927200" => "RUY BARBOSA",
        "2927309" => "SALINAS DA MARGARIDA",
        "2927408" => "SALVADOR",
        "2927507" => "SANTA BARBARA",
        "2927606" => "SANTA BRIGIDA",
        "2927705" => "SANTA CRUZ CABRALIA",
        "2927804" => "SANTA CRUZ DA VITORIA",
        "2927903" => "SANTA INES",
        "2928000" => "SANTALUZ",
        "2928059" => "SANTA LUZIA",
        "2928109" => "SANTA MARIA DA VITORIA",
        "2928208" => "SANTANA",
        "2928307" => "SANTANOPOLIS",
        "2928406" => "SANTA RITA DE CASSIA",
        "2928505" => "SANTA TERESINHA",
        "2928604" => "SANTO AMARO",
        "2928703" => "SANTO ANTONIO DE JESUS",
        "2928802" => "SANTO ESTEVAO",
        "2928901" => "SAO DESIDERIO",
        "2928950" => "SAO DOMINGOS",
        "2929008" => "SAO FELIX",
        "2929057" => "SAO FELIX DO CORIBE",
        "2929107" => "SAO FELIPE",
        "2929206" => "SAO FRANCISCO DO CONDE",
        "2929255" => "SAO GABRIEL",
        "2929305" => "SAO GONCALO DOS CAMPOS",
        "2929354" => "SAO JOSE DA VITORIA",
        "2929370" => "SAO JOSE DO JACUIPE",
        "2929404" => "SAO MIGUEL DAS MATAS",
        "2929503" => "SAO SEBASTIAO DO PASSE",
        "2929602" => "SAPEACU",
        "2929701" => "SATIRO DIAS",
        "2929750" => "SAUBARA",
        "2929800" => "SAUDE",
        "2929909" => "SEABRA",
        "2930006" => "SEBASTIAO LARANJEIRAS",
        "2930105" => "SENHOR DO BONFIM",
        "2930154" => "SERRA DO RAMALHO",
        "2930204" => "SENTO SE",
        "2930303" => "SERRA DOURADA",
        "2930402" => "SERRA PRETA",
        "2930501" => "SERRINHA",
        "2930600" => "SERROLANDIA",
        "2930709" => "SIMOES FILHO",
        "2930758" => "SITIO DO MATO",
        "2930766" => "SITIO DO QUINTO",
        "2930774" => "SOBRADINHO",
        "2930808" => "SOUTO SOARES",
        "2930907" => "TABOCAS DO BREJO VELHO",
        "2931004" => "TANHACU",
        "2931053" => "TANQUE NOVO",
        "2931103" => "TANQUINHO",
        "2931202" => "TAPEROA",
        "2931301" => "TAPIRAMUTA",
        "2931350" => "TEIXEIRA DE FREITAS",
        "2931400" => "TEODORO SAMPAIO",
        "2931509" => "TEOFILANDIA",
        "2931608" => "TEOLANDIA",
        "2931707" => "TERRA NOVA",
        "2931806" => "TREMEDAL",
        "2931905" => "TUCANO",
        "2932002" => "UAUA",
        "2932101" => "UBAIRA",
        "2932200" => "UBAITABA",
        "2932309" => "UBATA",
        "2932408" => "UIBAI",
        "2932457" => "UMBURANAS",
        "2932507" => "UNA",
        "2932606" => "URANDI",
        "2932705" => "URUCUCA",
        "2932804" => "UTINGA",
        "2932903" => "VALENCA",
        "2933000" => "VALENTE",
        "2933059" => "VARZEA DA ROCA",
        "2933109" => "VARZEA DO POCO",
        "2933158" => "VARZEA NOVA",
        "2933174" => "VARZEDO",
        "2933208" => "VERA CRUZ",
        "2933257" => "VEREDA",
        "2933307" => "VITORIA DA CONQUISTA",
        "2933406" => "WAGNER",
        "2933455" => "WANDERLEY",
        "2933505" => "WENCESLAU GUIMARAES",
        "2933604" => "XIQUE-XIQUE"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '5'
            ]);
        }
    }
}
