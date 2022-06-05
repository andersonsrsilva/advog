<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityMgTableSeeder extends Seeder
{
    static $cities = [
        "3100104" => "ABADIA DOS DOURADOS",
        "3100203" => "ABAETE",
        "3100302" => "ABRE CAMPO",
        "3100401" => "ACAIACA",
        "3100500" => "ACUCENA",
        "3100609" => "AGUA BOA",
        "3100708" => "AGUA COMPRIDA",
        "3100807" => "AGUANIL",
        "3100906" => "AGUAS FORMOSAS",
        "3101003" => "AGUAS VERMELHAS",
        "3101102" => "AIMORES",
        "3101201" => "AIURUOCA",
        "3101300" => "ALAGOA",
        "3101409" => "ALBERTINA",
        "3101508" => "ALEM PARAIBA",
        "3101607" => "ALFENAS",
        "3101631" => "ALFREDO VASCONCELOS",
        "3101706" => "ALMENARA",
        "3101805" => "ALPERCATA",
        "3101904" => "ALPINOPOLIS",
        "3102001" => "ALTEROSA",
        "3102050" => "ALTO CAPARAO",
        "3102100" => "ALTO RIO DOCE",
        "3102209" => "ALVARENGA",
        "3102308" => "ALVINOPOLIS",
        "3102407" => "ALVORADA DE MINAS",
        "3102506" => "AMPARO DO SERRA",
        "3102605" => "ANDRADAS",
        "3102704" => "CACHOEIRA DE PAJEU",
        "3102803" => "ANDRELANDIA",
        "3102852" => "ANGELANDIA",
        "3102902" => "ANTONIO CARLOS",
        "3103009" => "ANTONIO DIAS",
        "3103108" => "ANTONIO PRADO DE MINAS",
        "3103207" => "ARACAI",
        "3103306" => "ARACITABA",
        "3103405" => "ARACUAI",
        "3103504" => "ARAGUARI",
        "3103603" => "ARANTINA",
        "3103702" => "ARAPONGA",
        "3103751" => "ARAPORA",
        "3103801" => "ARAPUA",
        "3103900" => "ARAUJOS",
        "3104007" => "ARAXA",
        "3104106" => "ARCEBURGO",
        "3104205" => "ARCOS",
        "3104304" => "AREADO",
        "3104403" => "ARGIRITA",
        "3104452" => "ARICANDUVA",
        "3104502" => "ARINOS",
        "3104601" => "ASTOLFO DUTRA",
        "3104700" => "ATALEIA",
        "3104809" => "AUGUSTO DE LIMA",
        "3104908" => "BAEPENDI",
        "3105004" => "BALDIM",
        "3105103" => "BAMBUI",
        "3105202" => "BANDEIRA",
        "3105301" => "BANDEIRA DO SUL",
        "3105400" => "BARAO DE COCAIS",
        "3105509" => "BARAO DE MONTE ALTO",
        "3105608" => "BARBACENA",
        "3105707" => "BARRA LONGA",
        "3105905" => "BARROSO",
        "3106002" => "BELA VISTA DE MINAS",
        "3106101" => "BELMIRO BRAGA",
        "3106200" => "BELO HORIZONTE",
        "3106309" => "BELO ORIENTE",
        "3106408" => "BELO VALE",
        "3106507" => "BERILO",
        "3106606" => "BERTOPOLIS",
        "3106655" => "BERIZAL",
        "3106705" => "BETIM",
        "3106804" => "BIAS FORTES",
        "3106903" => "BICAS",
        "3107000" => "BIQUINHAS",
        "3107109" => "BOA ESPERANCA",
        "3107208" => "BOCAINA DE MINAS",
        "3107307" => "BOCAIUVA",
        "3107406" => "BOM DESPACHO",
        "3107505" => "BOM JARDIM DE MINAS",
        "3107604" => "BOM JESUS DA PENHA",
        "3107703" => "BOM JESUS DO AMPARO",
        "3107802" => "BOM JESUS DO GALHO",
        "3107901" => "BOM REPOUSO",
        "3108008" => "BOM SUCESSO",
        "3108107" => "BONFIM",
        "3108206" => "BONFINOPOLIS DE MINAS",
        "3108255" => "BONITO DE MINAS",
        "3108305" => "BORDA DA MATA",
        "3108404" => "BOTELHOS",
        "3108503" => "BOTUMIRIM",
        "3108552" => "BRASILANDIA DE MINAS",
        "3108602" => "BRASILIA DE MINAS",
        "3108701" => "BRAS PIRES",
        "3108800" => "BRAUNAS",
        "3108909" => "BRASOPOLIS",
        "3109006" => "BRUMADINHO",
        "3109105" => "BUENO BRANDAO",
        "3109204" => "BUENOPOLIS",
        "3109253" => "BUGRE",
        "3109303" => "BURITIS",
        "3109402" => "BURITIZEIRO",
        "3109451" => "CABECEIRA GRANDE",
        "3109501" => "CABO VERDE",
        "3109600" => "CACHOEIRA DA PRATA",
        "3109709" => "CACHOEIRA DE MINAS",
        "3109808" => "CACHOEIRA DOURADA",
        "3109907" => "CAETANOPOLIS",
        "3110004" => "CAETE",
        "3110103" => "CAIANA",
        "3110202" => "CAJURI",
        "3110301" => "CALDAS",
        "3110400" => "CAMACHO",
        "3110509" => "CAMANDUCAIA",
        "3110608" => "CAMBUI",
        "3110707" => "CAMBUQUIRA",
        "3110806" => "CAMPANARIO",
        "3110905" => "CAMPANHA",
        "3111002" => "CAMPESTRE",
        "3111101" => "CAMPINA VERDE",
        "3111150" => "CAMPO AZUL",
        "3111200" => "CAMPO BELO",
        "3111309" => "CAMPO DO MEIO",
        "3111408" => "CAMPO FLORIDO",
        "3111507" => "CAMPOS ALTOS",
        "3111606" => "CAMPOS GERAIS",
        "3111705" => "CANAA",
        "3111804" => "CANAPOLIS",
        "3111903" => "CANA VERDE",
        "3112000" => "CANDEIAS",
        "3112059" => "CANTAGALO",
        "3112109" => "CAPARAO",
        "3112208" => "CAPELA NOVA",
        "3112307" => "CAPELINHA",
        "3112406" => "CAPETINGA",
        "3112505" => "CAPIM BRANCO",
        "3112604" => "CAPINOPOLIS",
        "3112653" => "CAPITAO ANDRADE",
        "3112703" => "CAPITAO ENEAS",
        "3112802" => "CAPITOLIO",
        "3112901" => "CAPUTIRA",
        "3113008" => "CARAI",
        "3113107" => "CARANAIBA",
        "3113206" => "CARANDAI",
        "3113305" => "CARANGOLA",
        "3113404" => "CARATINGA",
        "3113503" => "CARBONITA",
        "3113602" => "CAREACU",
        "3113701" => "CARLOS CHAGAS",
        "3113800" => "CARMESIA",
        "3113909" => "CARMO DA CACHOEIRA",
        "3114006" => "CARMO DA MATA",
        "3114105" => "CARMO DE MINAS",
        "3114204" => "CARMO DO CAJURU",
        "3114303" => "CARMO DO PARANAIBA",
        "3114402" => "CARMO DO RIO CLARO",
        "3114501" => "CARMOPOLIS DE MINAS",
        "3114550" => "CARNEIRINHO",
        "3114600" => "CARRANCAS",
        "3114709" => "CARVALHOPOLIS",
        "3114808" => "CARVALHOS",
        "3114907" => "CASA GRANDE",
        "3115003" => "CASCALHO RICO",
        "3115102" => "CASSIA",
        "3115201" => "CONCEICAO DA BARRA DE MINAS",
        "3115300" => "CATAGUASES",
        "3115359" => "CATAS ALTAS",
        "3115409" => "CATAS ALTAS DA NORUEGA",
        "3115458" => "CATUJI",
        "3115474" => "CATUTI",
        "3115508" => "CAXAMBU",
        "3115607" => "CEDRO DO ABAETE",
        "3115706" => "CENTRAL DE MINAS",
        "3115805" => "CENTRALINA",
        "3115904" => "CHACARA",
        "3116001" => "CHALE",
        "3116100" => "CHAPADA DO NORTE",
        "3116159" => "CHAPADA GAUCHA",
        "3116209" => "CHIADOR",
        "3116308" => "CIPOTANEA",
        "3116407" => "CLARAVAL",
        "3116506" => "CLARO DOS POCOES",
        "3116605" => "CLAUDIO",
        "3116704" => "COIMBRA",
        "3116803" => "COLUNA",
        "3116902" => "COMENDADOR GOMES",
        "3117009" => "COMERCINHO",
        "3117108" => "CONCEICAO DA APARECIDA",
        "3117207" => "CONCEICAO DAS PEDRAS",
        "3117306" => "CONCEICAO DAS ALAGOAS",
        "3117405" => "CONCEICAO DE IPANEMA",
        "3117504" => "CONCEICAO DO MATO DENTRO",
        "3117603" => "CONCEICAO DO PARA",
        "3117702" => "CONCEICAO DO RIO VERDE",
        "3117801" => "CONCEICAO DOS OUROS",
        "3117836" => "CONEGO MARINHO",
        "3117876" => "CONFINS",
        "3117900" => "CONGONHAL",
        "3118007" => "CONGONHAS",
        "3118106" => "CONGONHAS DO NORTE",
        "3118205" => "CONQUISTA",
        "3118304" => "CONSELHEIRO LAFAIETE",
        "3118403" => "CONSELHEIRO PENA",
        "3118502" => "CONSOLACAO",
        "3118601" => "CONTAGEM",
        "3118700" => "COQUEIRAL",
        "3118809" => "CORACAO DE JESUS",
        "3118908" => "CORDISBURGO",
        "3119005" => "CORDISLANDIA",
        "3119104" => "CORINTO",
        "3119203" => "COROACI",
        "3119302" => "COROMANDEL",
        "3119401" => "CORONEL FABRICIANO",
        "3119500" => "CORONEL MURTA",
        "3119609" => "CORONEL PACHECO",
        "3119708" => "CORONEL XAVIER CHAVES",
        "3119807" => "CORREGO DANTA",
        "3119906" => "CORREGO DO BOM JESUS",
        "3119955" => "CORREGO FUNDO",
        "3120003" => "CORREGO NOVO",
        "3120102" => "COUTO DE MAGALHAES DE MINAS",
        "3120151" => "CRISOLITA",
        "3120201" => "CRISTAIS",
        "3120300" => "CRISTALIA",
        "3120409" => "CRISTIANO OTONI",
        "3120508" => "CRISTINA",
        "3120607" => "CRUCILANDIA",
        "3120706" => "CRUZEIRO DA FORTALEZA",
        "3120805" => "CRUZILIA",
        "3120839" => "CUPARAQUE",
        "3120870" => "CURRAL DE DENTRO",
        "3120904" => "CURVELO",
        "3121001" => "DATAS",
        "3121100" => "DELFIM MOREIRA",
        "3121209" => "DELFINOPOLIS",
        "3121258" => "DELTA",
        "3121308" => "DESCOBERTO",
        "3121407" => "DESTERRO DE ENTRE RIOS",
        "3121506" => "DESTERRO DO MELO",
        "3121605" => "DIAMANTINA",
        "3121704" => "DIOGO DE VASCONCELOS",
        "3121803" => "DIONISIO",
        "3121902" => "DIVINESIA",
        "3122009" => "DIVINO",
        "3122108" => "DIVINO DAS LARANJEIRAS",
        "3122207" => "DIVINOLANDIA DE MINAS",
        "3122306" => "DIVINOPOLIS",
        "3122355" => "DIVISA ALEGRE",
        "3122405" => "DIVISA NOVA",
        "3122454" => "DIVISOPOLIS",
        "3122470" => "DOM BOSCO",
        "3122504" => "DOM CAVATI",
        "3122603" => "DOM JOAQUIM",
        "3122702" => "DOM SILVERIO",
        "3122801" => "DOM VICOSO",
        "3122900" => "DONA EUSEBIA",
        "3123007" => "DORES DE CAMPOS",
        "3123106" => "DORES DE GUANHAES",
        "3123205" => "DORES DO INDAIA",
        "3123304" => "DORES DO TURVO",
        "3123403" => "DORESOPOLIS",
        "3123502" => "DOURADOQUARA",
        "3123528" => "DURANDE",
        "3123601" => "ELOI MENDES",
        "3123700" => "ENGENHEIRO CALDAS",
        "3123809" => "ENGENHEIRO NAVARRO",
        "3123858" => "ENTRE FOLHAS",
        "3123908" => "ENTRE RIOS DE MINAS",
        "3124005" => "ERVALIA",
        "3124104" => "ESMERALDAS",
        "3124203" => "ESPERA FELIZ",
        "3124302" => "ESPINOSA",
        "3124401" => "ESPIRITO SANTO DO DOURADO",
        "3124500" => "ESTIVA",
        "3124609" => "ESTRELA DALVA",
        "3124708" => "ESTRELA DO INDAIA",
        "3124807" => "ESTRELA DO SUL",
        "3124906" => "EUGENOPOLIS",
        "3125002" => "EWBANK DA CAMARA",
        "3125101" => "EXTREMA",
        "3125200" => "FAMA",
        "3125309" => "FARIA LEMOS",
        "3125408" => "FELICIO DOS SANTOS",
        "3125507" => "SAO GONCALO DO RIO PRETO",
        "3125606" => "FELISBURGO",
        "3125705" => "FELIXLANDIA",
        "3125804" => "FERNANDES TOURINHO",
        "3125903" => "FERROS",
        "3125952" => "FERVEDOURO",
        "3126000" => "FLORESTAL",
        "3126109" => "FORMIGA",
        "3126208" => "FORMOSO",
        "3126307" => "FORTALEZA DE MINAS",
        "3126406" => "FORTUNA DE MINAS",
        "3126505" => "FRANCISCO BADARO",
        "3126604" => "FRANCISCO DUMONT",
        "3126703" => "FRANCISCO SA",
        "3126752" => "FRANCISCOPOLIS",
        "3126802" => "FREI GASPAR",
        "3126901" => "FREI INOCENCIO",
        "3126950" => "FREI LAGONEGRO",
        "3127008" => "FRONTEIRA",
        "3127057" => "FRONTEIRA DOS VALES",
        "3127073" => "FRUTA DE LEITE",
        "3127107" => "FRUTAL",
        "3127206" => "FUNILANDIA",
        "3127305" => "GALILEIA",
        "3127339" => "GAMELEIRAS",
        "3127354" => "GLAUCILANDIA",
        "3127370" => "GOIABEIRA",
        "3127388" => "GOIANA",
        "3127404" => "GONCALVES",
        "3127503" => "GONZAGA",
        "3127602" => "GOUVEIA",
        "3127701" => "GOVERNADOR VALADARES",
        "3127800" => "GRAO MOGOL",
        "3127909" => "GRUPIARA",
        "3128006" => "GUANHAES",
        "3128105" => "GUAPE",
        "3128204" => "GUARACIABA",
        "3128253" => "GUARACIAMA",
        "3128303" => "GUARANESIA",
        "3128402" => "GUARANI",
        "3128501" => "GUARARA",
        "3128600" => "GUARDA-MOR",
        "3128709" => "GUAXUPE",
        "3128808" => "GUIDOVAL",
        "3128907" => "GUIMARANIA",
        "3129004" => "GUIRICEMA",
        "3129103" => "GURINHATA",
        "3129202" => "HELIODORA",
        "3129301" => "IAPU",
        "3129400" => "IBERTIOGA",
        "3129509" => "IBIA",
        "3129608" => "IBIAI",
        "3129657" => "IBIRACATU",
        "3129707" => "IBIRACI",
        "3129806" => "IBIRITE",
        "3129905" => "IBITIURA DE MINAS",
        "3130002" => "IBITURUNA",
        "3130051" => "ICARAI DE MINAS",
        "3130101" => "IGARAPE",
        "3130200" => "IGARATINGA",
        "3130309" => "IGUATAMA",
        "3130408" => "IJACI",
        "3130507" => "ILICINEA",
        "3130556" => "IMBE DE MINAS",
        "3130606" => "INCONFIDENTES",
        "3130655" => "INDAIABIRA",
        "3130705" => "INDIANOPOLIS",
        "3130804" => "INGAI",
        "3130903" => "INHAPIM",
        "3131000" => "INHAUMA",
        "3131109" => "INIMUTABA",
        "3131158" => "IPABA",
        "3131208" => "IPANEMA",
        "3131307" => "IPATINGA",
        "3131406" => "IPIACU",
        "3131505" => "IPUIUNA",
        "3131604" => "IRAI DE MINAS",
        "3131703" => "ITABIRA",
        "3131802" => "ITABIRINHA",
        "3131901" => "ITABIRITO",
        "3132008" => "ITACAMBIRA",
        "3132107" => "ITACARAMBI",
        "3132206" => "ITAGUARA",
        "3132305" => "ITAIPE",
        "3132404" => "ITAJUBA",
        "3132503" => "ITAMARANDIBA",
        "3132602" => "ITAMARATI DE MINAS",
        "3132701" => "ITAMBACURI",
        "3132800" => "ITAMBE DO MATO DENTRO",
        "3132909" => "ITAMOGI",
        "3133006" => "ITAMONTE",
        "3133105" => "ITANHANDU",
        "3133204" => "ITANHOMI",
        "3133303" => "ITAOBIM",
        "3133402" => "ITAPAGIPE",
        "3133501" => "ITAPECERICA",
        "3133600" => "ITAPEVA",
        "3133709" => "ITATIAIUCU",
        "3133758" => "ITAU DE MINAS",
        "3133808" => "ITAUNA",
        "3133907" => "ITAVERAVA",
        "3134004" => "ITINGA",
        "3134103" => "ITUETA",
        "3134202" => "ITUIUTABA",
        "3134301" => "ITUMIRIM",
        "3134400" => "ITURAMA",
        "3134509" => "ITUTINGA",
        "3134608" => "JABOTICATUBAS",
        "3134707" => "JACINTO",
        "3134806" => "JACUI",
        "3134905" => "JACUTINGA",
        "3135001" => "JAGUARACU",
        "3135050" => "JAIBA",
        "3135076" => "JAMPRUCA",
        "3135100" => "JANAUBA",
        "3135209" => "JANUARIA",
        "3135308" => "JAPARAIBA",
        "3135357" => "JAPONVAR",
        "3135407" => "JECEABA",
        "3135456" => "JENIPAPO DE MINAS",
        "3135506" => "JEQUERI",
        "3135605" => "JEQUITAI",
        "3135704" => "JEQUITIBA",
        "3135803" => "JEQUITINHONHA",
        "3135902" => "JESUANIA",
        "3136009" => "JOAIMA",
        "3136108" => "JOANESIA",
        "3136207" => "JOAO MONLEVADE",
        "3136306" => "JOAO PINHEIRO",
        "3136405" => "JOAQUIM FELICIO",
        "3136504" => "JORDANIA",
        "3136520" => "JOSE GONCALVES DE MINAS",
        "3136553" => "JOSE RAYDAN",
        "3136579" => "JOSENOPOLIS",
        "3136603" => "NOVA UNIAO",
        "3136652" => "JUATUBA",
        "3136702" => "JUIZ DE FORA",
        "3136801" => "JURAMENTO",
        "3136900" => "JURUAIA",
        "3136959" => "JUVENILIA",
        "3137007" => "LADAINHA",
        "3137106" => "LAGAMAR",
        "3137205" => "LAGOA DA PRATA",
        "3137304" => "LAGOA DOS PATOS",
        "3137403" => "LAGOA DOURADA",
        "3137502" => "LAGOA FORMOSA",
        "3137536" => "LAGOA GRANDE",
        "3137601" => "LAGOA SANTA",
        "3137700" => "LAJINHA",
        "3137809" => "LAMBARI",
        "3137908" => "LAMIM",
        "3138005" => "LARANJAL",
        "3138104" => "LASSANCE",
        "3138203" => "LAVRAS",
        "3138302" => "LEANDRO FERREIRA",
        "3138351" => "LEME DO PRADO",
        "3138401" => "LEOPOLDINA",
        "3138500" => "LIBERDADE",
        "3138609" => "LIMA DUARTE",
        "3138625" => "LIMEIRA DO OESTE",
        "3138658" => "LONTRA",
        "3138674" => "LUISBURGO",
        "3138682" => "LUISLANDIA",
        "3138708" => "LUMINARIAS",
        "3138807" => "LUZ",
        "3138906" => "MACHACALIS",
        "3139003" => "MACHADO",
        "3139102" => "MADRE DE DEUS DE MINAS",
        "3139201" => "MALACACHETA",
        "3139250" => "MAMONAS",
        "3139300" => "MANGA",
        "3139409" => "MANHUACU",
        "3139508" => "MANHUMIRIM",
        "3139607" => "MANTENA",
        "3139706" => "MARAVILHAS",
        "3139805" => "MAR DE ESPANHA",
        "3139904" => "MARIA DA FE",
        "3140001" => "MARIANA",
        "3140100" => "MARILAC",
        "3140159" => "MARIO CAMPOS",
        "3140209" => "MARIPA DE MINAS",
        "3140308" => "MARLIERIA",
        "3140407" => "MARMELOPOLIS",
        "3140506" => "MARTINHO CAMPOS",
        "3140530" => "MARTINS SOARES",
        "3140555" => "MATA VERDE",
        "3140605" => "MATERLANDIA",
        "3140704" => "MATEUS LEME",
        "3140803" => "MATIAS BARBOSA",
        "3140852" => "MATIAS CARDOSO",
        "3140902" => "MATIPO",
        "3141009" => "MATO VERDE",
        "3141108" => "MATOZINHOS",
        "3141207" => "MATUTINA",
        "3141306" => "MEDEIROS",
        "3141405" => "MEDINA",
        "3141504" => "MENDES PIMENTEL",
        "3141603" => "MERCES",
        "3141702" => "MESQUITA",
        "3141801" => "MINAS NOVAS",
        "3141900" => "MINDURI",
        "3142007" => "MIRABELA",
        "3142106" => "MIRADOURO",
        "3142205" => "MIRAI",
        "3142254" => "MIRAVANIA",
        "3142304" => "MOEDA",
        "3142403" => "MOEMA",
        "3142502" => "MONJOLOS",
        "3142601" => "MONSENHOR PAULO",
        "3142700" => "MONTALVANIA",
        "3142809" => "MONTE ALEGRE DE MINAS",
        "3142908" => "MONTE AZUL",
        "3143005" => "MONTE BELO",
        "3143104" => "MONTE CARMELO",
        "3143153" => "MONTE FORMOSO",
        "3143203" => "MONTE SANTO DE MINAS",
        "3143302" => "MONTES CLAROS",
        "3143401" => "MONTE SIAO",
        "3143450" => "MONTEZUMA",
        "3143500" => "MORADA NOVA DE MINAS",
        "3143609" => "MORRO DA GARCA",
        "3143708" => "MORRO DO PILAR",
        "3143807" => "MUNHOZ",
        "3143906" => "MURIAE",
        "3144003" => "MUTUM",
        "3144102" => "MUZAMBINHO",
        "3144201" => "NACIP RAYDAN",
        "3144300" => "NANUQUE",
        "3144359" => "NAQUE",
        "3144375" => "NATALANDIA",
        "3144409" => "NATERCIA",
        "3144508" => "NAZARENO",
        "3144607" => "NEPOMUCENO",
        "3144656" => "NINHEIRA",
        "3144672" => "NOVA BELEM",
        "3144706" => "NOVA ERA",
        "3144805" => "NOVA LIMA",
        "3144904" => "NOVA MODICA",
        "3145000" => "NOVA PONTE",
        "3145059" => "NOVA PORTEIRINHA",
        "3145109" => "NOVA RESENDE",
        "3145208" => "NOVA SERRANA",
        "3145307" => "NOVO CRUZEIRO",
        "3145356" => "NOVO ORIENTE DE MINAS",
        "3145372" => "NOVORIZONTE",
        "3145406" => "OLARIA",
        "3145455" => "OLHOS-D AGUA",
        "3145505" => "OLIMPIO NORONHA",
        "3145604" => "OLIVEIRA",
        "3145703" => "OLIVEIRA FORTES",
        "3145802" => "ONCA DE PITANGUI",
        "3145851" => "ORATORIOS",
        "3145877" => "ORIZANIA",
        "3145901" => "OURO BRANCO",
        "3146008" => "OURO FINO",
        "3146107" => "OURO PRETO",
        "3146206" => "OURO VERDE DE MINAS",
        "3146255" => "PADRE CARVALHO",
        "3146305" => "PADRE PARAISO",
        "3146404" => "PAINEIRAS",
        "3146503" => "PAINS",
        "3146552" => "PAI PEDRO",
        "3146602" => "PAIVA",
        "3146701" => "PALMA",
        "3146750" => "PALMOPOLIS",
        "3146909" => "PAPAGAIOS",
        "3147006" => "PARACATU",
        "3147105" => "PARA DE MINAS",
        "3147204" => "PARAGUACU",
        "3147303" => "PARAISOPOLIS",
        "3147402" => "PARAOPEBA",
        "3147501" => "PASSABEM",
        "3147600" => "PASSA QUATRO",
        "3147709" => "PASSA TEMPO",
        "3147808" => "PASSA-VINTE",
        "3147907" => "PASSOS",
        "3147956" => "PATIS",
        "3148004" => "PATOS DE MINAS",
        "3148103" => "PATROCINIO",
        "3148202" => "PATROCINIO DO MURIAE",
        "3148301" => "PAULA CANDIDO",
        "3148400" => "PAULISTAS",
        "3148509" => "PAVAO",
        "3148608" => "PECANHA",
        "3148707" => "PEDRA AZUL",
        "3148756" => "PEDRA BONITA",
        "3148806" => "PEDRA DO ANTA",
        "3148905" => "PEDRA DO INDAIA",
        "3149002" => "PEDRA DOURADA",
        "3149101" => "PEDRALVA",
        "3149150" => "PEDRAS DE MARIA DA CRUZ",
        "3149200" => "PEDRINOPOLIS",
        "3149309" => "PEDRO LEOPOLDO",
        "3149408" => "PEDRO TEIXEIRA",
        "3149507" => "PEQUERI",
        "3149606" => "PEQUI",
        "3149705" => "PERDIGAO",
        "3149804" => "PERDIZES",
        "3149903" => "PERDOES",
        "3149952" => "PERIQUITO",
        "3150000" => "PESCADOR",
        "3150109" => "PIAU",
        "3150158" => "PIEDADE DE CARATINGA",
        "3150208" => "PIEDADE DE PONTE NOVA",
        "3150307" => "PIEDADE DO RIO GRANDE",
        "3150406" => "PIEDADE DOS GERAIS",
        "3150505" => "PIMENTA",
        "3150539" => "PINGO-D AGUA",
        "3150570" => "PINTOPOLIS",
        "3150604" => "PIRACEMA",
        "3150703" => "PIRAJUBA",
        "3150802" => "PIRANGA",
        "3150901" => "PIRANGUCU",
        "3151008" => "PIRANGUINHO",
        "3151107" => "PIRAPETINGA",
        "3151206" => "PIRAPORA",
        "3151305" => "PIRAUBA",
        "3151404" => "PITANGUI",
        "3151503" => "PIUMHI",
        "3151602" => "PLANURA",
        "3151701" => "POCO FUNDO",
        "3151800" => "POCOS DE CALDAS",
        "3151909" => "POCRANE",
        "3152006" => "POMPEU",
        "3152105" => "PONTE NOVA",
        "3152131" => "PONTO CHIQUE",
        "3152170" => "PONTO DOS VOLANTES",
        "3152204" => "PORTEIRINHA",
        "3152303" => "PORTO FIRME",
        "3152402" => "POTE",
        "3152501" => "POUSO ALEGRE",
        "3152600" => "POUSO ALTO",
        "3152709" => "PRADOS",
        "3152808" => "PRATA",
        "3152907" => "PRATAPOLIS",
        "3153004" => "PRATINHA",
        "3153103" => "PRESIDENTE BERNARDES",
        "3153202" => "PRESIDENTE JUSCELINO",
        "3153301" => "PRESIDENTE KUBITSCHEK",
        "3153400" => "PRESIDENTE OLEGARIO",
        "3153509" => "ALTO JEQUITIBA",
        "3153608" => "PRUDENTE DE MORAIS",
        "3153707" => "QUARTEL GERAL",
        "3153806" => "QUELUZITO",
        "3153905" => "RAPOSOS",
        "3154002" => "RAUL SOARES",
        "3154101" => "RECREIO",
        "3154150" => "REDUTO",
        "3154200" => "RESENDE COSTA",
        "3154309" => "RESPLENDOR",
        "3154408" => "RESSAQUINHA",
        "3154457" => "RIACHINHO",
        "3154507" => "RIACHO DOS MACHADOS",
        "3154606" => "RIBEIRAO DAS NEVES",
        "3154705" => "RIBEIRAO VERMELHO",
        "3154804" => "RIO ACIMA",
        "3154903" => "RIO CASCA",
        "3155009" => "RIO DOCE",
        "3155108" => "RIO DO PRADO",
        "3155207" => "RIO ESPERA",
        "3155306" => "RIO MANSO",
        "3155405" => "RIO NOVO",
        "3155504" => "RIO PARANAIBA",
        "3155603" => "RIO PARDO DE MINAS",
        "3155702" => "RIO PIRACICABA",
        "3155801" => "RIO POMBA",
        "3155900" => "RIO PRETO",
        "3156007" => "RIO VERMELHO",
        "3156106" => "RITAPOLIS",
        "3156205" => "ROCHEDO DE MINAS",
        "3156304" => "RODEIRO",
        "3156403" => "ROMARIA",
        "3156452" => "ROSARIO DA LIMEIRA",
        "3156502" => "RUBELITA",
        "3156601" => "RUBIM",
        "3156700" => "SABARA",
        "3156809" => "SABINOPOLIS",
        "3156908" => "SACRAMENTO",
        "3157005" => "SALINAS",
        "3157104" => "SALTO DA DIVISA",
        "3157203" => "SANTA BARBARA",
        "3157252" => "SANTA BARBARA DO LESTE",
        "3157278" => "SANTA BARBARA DO MONTE VERDE",
        "3157302" => "SANTA BARBARA DO TUGURIO",
        "3157336" => "SANTA CRUZ DE MINAS",
        "3157377" => "SANTA CRUZ DE SALINAS",
        "3157401" => "SANTA CRUZ DO ESCALVADO",
        "3157500" => "SANTA EFIGENIA DE MINAS",
        "3157609" => "SANTA FE DE MINAS",
        "3157658" => "SANTA HELENA DE MINAS",
        "3157708" => "SANTA JULIANA",
        "3157807" => "SANTA LUZIA",
        "3157906" => "SANTA MARGARIDA",
        "3158003" => "SANTA MARIA DE ITABIRA",
        "3158102" => "SANTA MARIA DO SALTO",
        "3158201" => "SANTA MARIA DO SUACUI",
        "3158300" => "SANTANA DA VARGEM",
        "3158409" => "SANTANA DE CATAGUASES",
        "3158508" => "SANTANA DE PIRAPAMA",
        "3158607" => "SANTANA DO DESERTO",
        "3158706" => "SANTANA DO GARAMBEU",
        "3158805" => "SANTANA DO JACARE",
        "3158904" => "SANTANA DO MANHUACU",
        "3158953" => "SANTANA DO PARAISO",
        "3159001" => "SANTANA DO RIACHO",
        "3159100" => "SANTANA DOS MONTES",
        "3159209" => "SANTA RITA DE CALDAS",
        "3159308" => "SANTA RITA DE JACUTINGA",
        "3159357" => "SANTA RITA DE MINAS",
        "3159407" => "SANTA RITA DE IBITIPOCA",
        "3159506" => "SANTA RITA DO ITUETO",
        "3159605" => "SANTA RITA DO SAPUCAI",
        "3159704" => "SANTA ROSA DA SERRA",
        "3159803" => "SANTA VITORIA",
        "3159902" => "SANTO ANTONIO DO AMPARO",
        "3160009" => "SANTO ANTONIO DO AVENTUREIRO",
        "3160108" => "SANTO ANTONIO DO GRAMA",
        "3160207" => "SANTO ANTONIO DO ITAMBE",
        "3160306" => "SANTO ANTONIO DO JACINTO",
        "3160405" => "SANTO ANTONIO DO MONTE",
        "3160454" => "SANTO ANTONIO DO RETIRO",
        "3160504" => "SANTO ANTONIO DO RIO ABAIXO",
        "3160603" => "SANTO HIPOLITO",
        "3160702" => "SANTOS DUMONT",
        "3160801" => "SAO BENTO ABADE",
        "3160900" => "SAO BRAS DO SUACUI",
        "3160959" => "SAO DOMINGOS DAS DORES",
        "3161007" => "SAO DOMINGOS DO PRATA",
        "3161056" => "SAO FELIX DE MINAS",
        "3161106" => "SAO FRANCISCO",
        "3161205" => "SAO FRANCISCO DE PAULA",
        "3161304" => "SAO FRANCISCO DE SALES",
        "3161403" => "SAO FRANCISCO DO GLORIA",
        "3161502" => "SAO GERALDO",
        "3161601" => "SAO GERALDO DA PIEDADE",
        "3161650" => "SAO GERALDO DO BAIXIO",
        "3161700" => "SAO GONCALO DO ABAETE",
        "3161809" => "SAO GONCALO DO PARA",
        "3161908" => "SAO GONCALO DO RIO ABAIXO",
        "3162005" => "SAO GONCALO DO SAPUCAI",
        "3162104" => "SAO GOTARDO",
        "3162203" => "SAO JOAO BATISTA DO GLORIA",
        "3162252" => "SAO JOAO DA LAGOA",
        "3162302" => "SAO JOAO DA MATA",
        "3162401" => "SAO JOAO DA PONTE",
        "3162450" => "SAO JOAO DAS MISSOES",
        "3162500" => "SAO JOAO DEL REI",
        "3162559" => "SAO JOAO DO MANHUACU",
        "3162575" => "SAO JOAO DO MANTENINHA",
        "3162609" => "SAO JOAO DO ORIENTE",
        "3162658" => "SAO JOAO DO PACUI",
        "3162708" => "SAO JOAO DO PARAISO",
        "3162807" => "SAO JOAO EVANGELISTA",
        "3162906" => "SAO JOAO NEPOMUCENO",
        "3162922" => "SAO JOAQUIM DE BICAS",
        "3162948" => "SAO JOSE DA BARRA",
        "3162955" => "SAO JOSE DA LAPA",
        "3163003" => "SAO JOSE DA SAFIRA",
        "3163102" => "SAO JOSE DA VARGINHA",
        "3163201" => "SAO JOSE DO ALEGRE",
        "3163300" => "SAO JOSE DO DIVINO",
        "3163409" => "SAO JOSE DO GOIABAL",
        "3163508" => "SAO JOSE DO JACURI",
        "3163607" => "SAO JOSE DO MANTIMENTO",
        "3163706" => "SAO LOURENCO",
        "3163805" => "SAO MIGUEL DO ANTA",
        "3163904" => "SAO PEDRO DA UNIAO",
        "3164001" => "SAO PEDRO DOS FERROS",
        "3164100" => "SAO PEDRO DO SUACUI",
        "3164209" => "SAO ROMAO",
        "3164308" => "SAO ROQUE DE MINAS",
        "3164407" => "SAO SEBASTIAO DA BELA VISTA",
        "3164431" => "SAO SEBASTIAO DA VARGEM ALEGRE",
        "3164472" => "SAO SEBASTIAO DO ANTA",
        "3164506" => "SAO SEBASTIAO DO MARANHAO",
        "3164605" => "SAO SEBASTIAO DO OESTE",
        "3164704" => "SAO SEBASTIAO DO PARAISO",
        "3164803" => "SAO SEBASTIAO DO RIO PRETO",
        "3164902" => "SAO SEBASTIAO DO RIO VERDE",
        "3165008" => "SAO TIAGO",
        "3165107" => "SAO TOMAS DE AQUINO",
        "3165206" => "SAO THOME DAS LETRAS",
        "3165305" => "SAO VICENTE DE MINAS",
        "3165404" => "SAPUCAI-MIRIM",
        "3165503" => "SARDOA",
        "3165537" => "SARZEDO",
        "3165552" => "SETUBINHA",
        "3165560" => "SEM-PEIXE",
        "3165578" => "SENADOR AMARAL",
        "3165602" => "SENADOR CORTES",
        "3165701" => "SENADOR FIRMINO",
        "3165800" => "SENADOR JOSE BENTO",
        "3165909" => "SENADOR MODESTINO GONCALVES",
        "3166006" => "SENHORA DE OLIVEIRA",
        "3166105" => "SENHORA DO PORTO",
        "3166204" => "SENHORA DOS REMEDIOS",
        "3166303" => "SERICITA",
        "3166402" => "SERITINGA",
        "3166501" => "SERRA AZUL DE MINAS",
        "3166600" => "SERRA DA SAUDADE",
        "3166709" => "SERRA DOS AIMORES",
        "3166808" => "SERRA DO SALITRE",
        "3166907" => "SERRANIA",
        "3166956" => "SERRANOPOLIS DE MINAS",
        "3167004" => "SERRANOS",
        "3167103" => "SERRO",
        "3167202" => "SETE LAGOAS",
        "3167301" => "SILVEIRANIA",
        "3167400" => "SILVIANOPOLIS",
        "3167509" => "SIMAO PEREIRA",
        "3167608" => "SIMONESIA",
        "3167707" => "SOBRALIA",
        "3167806" => "SOLEDADE DE MINAS",
        "3167905" => "TABULEIRO",
        "3168002" => "TAIOBEIRAS",
        "3168051" => "TAPARUBA",
        "3168101" => "TAPIRA",
        "3168200" => "TAPIRAI",
        "3168309" => "TAQUARACU DE MINAS",
        "3168408" => "TARUMIRIM",
        "3168507" => "TEIXEIRAS",
        "3168606" => "TEOFILO OTONI",
        "3168705" => "TIMOTEO",
        "3168804" => "TIRADENTES",
        "3168903" => "TIROS",
        "3169000" => "TOCANTINS",
        "3169059" => "TOCOS DO MOJI",
        "3169109" => "TOLEDO",
        "3169208" => "TOMBOS",
        "3169307" => "TRES CORACOES",
        "3169356" => "TRES MARIAS",
        "3169406" => "TRES PONTAS",
        "3169505" => "TUMIRITINGA",
        "3169604" => "TUPACIGUARA",
        "3169703" => "TURMALINA",
        "3169802" => "TURVOLANDIA",
        "3169901" => "UBA",
        "3170008" => "UBAI",
        "3170057" => "UBAPORANGA",
        "3170107" => "UBERABA",
        "3170206" => "UBERLANDIA",
        "3170305" => "UMBURATIBA",
        "3170404" => "UNAI",
        "3170438" => "UNIAO DE MINAS",
        "3170479" => "URUANA DE MINAS",
        "3170503" => "URUCANIA",
        "3170529" => "URUCUIA",
        "3170578" => "VARGEM ALEGRE",
        "3170602" => "VARGEM BONITA",
        "3170651" => "VARGEM GRANDE DO RIO PARDO",
        "3170701" => "VARGINHA",
        "3170750" => "VARJAO DE MINAS",
        "3170800" => "VARZEA DA PALMA",
        "3170909" => "VARZELANDIA",
        "3171006" => "VAZANTE",
        "3171030" => "VERDELANDIA",
        "3171071" => "VEREDINHA",
        "3171105" => "VERISSIMO",
        "3171154" => "VERMELHO NOVO",
        "3171204" => "VESPASIANO",
        "3171303" => "VICOSA",
        "3171402" => "VIEIRAS",
        "3171501" => "MATHIAS LOBATO",
        "3171600" => "VIRGEM DA LAPA",
        "3171709" => "VIRGINIA",
        "3171808" => "VIRGINOPOLIS",
        "3171907" => "VIRGOLANDIA",
        "3172004" => "VISCONDE DO RIO BRANCO",
        "3172103" => "VOLTA GRANDE",
        "3172202" => "WENCESLAU BRAZ"
    ];
        
    public function run()
    {
        foreach (self::$cities as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '13'
            ]);
        }
    }
}
