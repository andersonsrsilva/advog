<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySpTableSeeder extends Seeder
{
    static array $values = [
        "3500105" => "ADAMANTINA",
        "3500204" => "ADOLFO",
        "3500303" => "AGUAI",
        "3500402" => "AGUAS DA PRATA",
        "3500501" => "AGUAS DE LINDOIA",
        "3500550" => "AGUAS DE SANTA BARBARA",
        "3500600" => "AGUAS DE SAO PEDRO",
        "3500709" => "AGUDOS",
        "3500758" => "ALAMBARI",
        "3500808" => "ALFREDO MARCONDES",
        "3500907" => "ALTAIR",
        "3501004" => "ALTINOPOLIS",
        "3501103" => "ALTO ALEGRE",
        "3501152" => "ALUMINIO",
        "3501202" => "ALVARES FLORENCE",
        "3501301" => "ALVARES MACHADO",
        "3501400" => "ALVARO DE CARVALHO",
        "3501509" => "ALVINLANDIA",
        "3501608" => "AMERICANA",
        "3501707" => "AMERICO BRASILIENSE",
        "3501806" => "AMERICO DE CAMPOS",
        "3501905" => "AMPARO",
        "3502002" => "ANALANDIA",
        "3502101" => "ANDRADINA",
        "3502200" => "ANGATUBA",
        "3502309" => "ANHEMBI",
        "3502408" => "ANHUMAS",
        "3502507" => "APARECIDA",
        "3502606" => "APARECIDA D OESTE",
        "3502705" => "APIAI",
        "3502754" => "ARACARIGUAMA",
        "3502804" => "ARACATUBA",
        "3502903" => "ARACOIABA DA SERRA",
        "3503000" => "ARAMINA",
        "3503109" => "ARANDU",
        "3503158" => "ARAPEI",
        "3503208" => "ARARAQUARA",
        "3503307" => "ARARAS",
        "3503356" => "ARCO-IRIS",
        "3503406" => "AREALVA",
        "3503505" => "AREIAS",
        "3503604" => "AREIOPOLIS",
        "3503703" => "ARIRANHA",
        "3503802" => "ARTUR NOGUEIRA",
        "3503901" => "ARUJA",
        "3503950" => "ASPASIA",
        "3504008" => "ASSIS",
        "3504107" => "ATIBAIA",
        "3504206" => "AURIFLAMA",
        "3504305" => "AVAI",
        "3504404" => "AVANHANDAVA",
        "3504503" => "AVARE",
        "3504602" => "BADY BASSITT",
        "3504701" => "BALBINOS",
        "3504800" => "BALSAMO",
        "3504909" => "BANANAL",
        "3505005" => "BARAO DE ANTONINA",
        "3505104" => "BARBOSA",
        "3505203" => "BARIRI",
        "3505302" => "BARRA BONITA",
        "3505351" => "BARRA DO CHAPEU",
        "3505401" => "BARRA DO TURVO",
        "3505500" => "BARRETOS",
        "3505609" => "BARRINHA",
        "3505708" => "BARUERI",
        "3505807" => "BASTOS",
        "3505906" => "BATATAIS",
        "3506003" => "BAURU",
        "3506102" => "BEBEDOURO",
        "3506201" => "BENTO DE ABREU",
        "3506300" => "BERNARDINO DE CAMPOS",
        "3506359" => "BERTIOGA",
        "3506409" => "BILAC",
        "3506508" => "BIRIGUI",
        "3506607" => "BIRITIBA-MIRIM",
        "3506706" => "BOA ESPERANCA DO SUL",
        "3506805" => "BOCAINA",
        "3506904" => "BOFETE",
        "3507001" => "BOITUVA",
        "3507100" => "BOM JESUS DOS PERDOES",
        "3507159" => "BOM SUCESSO DE ITARARE",
        "3507209" => "BORA",
        "3507308" => "BORACEIA",
        "3507407" => "BORBOREMA",
        "3507456" => "BOREBI",
        "3507506" => "BOTUCATU",
        "3507605" => "BRAGANCA PAULISTA",
        "3507704" => "BRAUNA",
        "3507753" => "BREJO ALEGRE",
        "3507803" => "BRODOWSKI",
        "3507902" => "BROTAS",
        "3508009" => "BURI",
        "3508108" => "BURITAMA",
        "3508207" => "BURITIZAL",
        "3508306" => "CABRALIA PAULISTA",
        "3508405" => "CABREUVA",
        "3508504" => "CACAPAVA",
        "3508603" => "CACHOEIRA PAULISTA",
        "3508702" => "CACONDE",
        "3508801" => "CAFELANDIA",
        "3508900" => "CAIABU",
        "3509007" => "CAIEIRAS",
        "3509106" => "CAIUA",
        "3509205" => "CAJAMAR",
        "3509254" => "CAJATI",
        "3509304" => "CAJOBI",
        "3509403" => "CAJURU",
        "3509452" => "CAMPINA DO MONTE ALEGRE",
        "3509502" => "CAMPINAS",
        "3509601" => "CAMPO LIMPO PAULISTA",
        "3509700" => "CAMPOS DO JORDAO",
        "3509809" => "CAMPOS NOVOS PAULISTA",
        "3509908" => "CANANEIA",
        "3509957" => "CANAS",
        "3510005" => "CANDIDO MOTA",
        "3510104" => "CANDIDO RODRIGUES",
        "3510153" => "CANITAR",
        "3510203" => "CAPAO BONITO",
        "3510302" => "CAPELA DO ALTO",
        "3510401" => "CAPIVARI",
        "3510500" => "CARAGUATATUBA",
        "3510609" => "CARAPICUIBA",
        "3510708" => "CARDOSO",
        "3510807" => "CASA BRANCA",
        "3510906" => "CASSIA DOS COQUEIROS",
        "3511003" => "CASTILHO",
        "3511102" => "CATANDUVA",
        "3511201" => "CATIGUA",
        "3511300" => "CEDRAL",
        "3511409" => "CERQUEIRA CESAR",
        "3511508" => "CERQUILHO",
        "3511607" => "CESARIO LANGE",
        "3511706" => "CHARQUEADA",
        "3511904" => "CLEMENTINA",
        "3512001" => "COLINA",
        "3512100" => "COLOMBIA",
        "3512209" => "CONCHAL",
        "3512308" => "CONCHAS",
        "3512407" => "CORDEIROPOLIS",
        "3512506" => "COROADOS",
        "3512605" => "CORONEL MACEDO",
        "3512704" => "CORUMBATAI",
        "3512803" => "COSMOPOLIS",
        "3512902" => "COSMORAMA",
        "3513009" => "COTIA",
        "3513108" => "CRAVINHOS",
        "3513207" => "CRISTAIS PAULISTA",
        "3513306" => "CRUZALIA",
        "3513405" => "CRUZEIRO",
        "3513504" => "CUBATAO",
        "3513603" => "CUNHA",
        "3513702" => "DESCALVADO",
        "3513801" => "DIADEMA",
        "3513850" => "DIRCE REIS",
        "3513900" => "DIVINOLANDIA",
        "3514007" => "DOBRADA",
        "3514106" => "DOIS CORREGOS",
        "3514205" => "DOLCINOPOLIS",
        "3514304" => "DOURADO",
        "3514403" => "DRACENA",
        "3514502" => "DUARTINA",
        "3514601" => "DUMONT",
        "3514700" => "ECHAPORA",
        "3514809" => "ELDORADO",
        "3514908" => "ELIAS FAUSTO",
        "3514924" => "ELISIARIO",
        "3514957" => "EMBAUBA",
        "3515004" => "EMBU DAS ARTES",
        "3515103" => "EMBU-GUACU",
        "3515129" => "EMILIANOPOLIS",
        "3515152" => "ENGENHEIRO COELHO",
        "3515186" => "ESPIRITO SANTO DO PINHAL",
        "3515194" => "ESPIRITO SANTO DO TURVO",
        "3515202" => "ESTRELA D OESTE",
        "3515301" => "ESTRELA DO NORTE",
        "3515350" => "EUCLIDES DA CUNHA PAULISTA",
        "3515400" => "FARTURA",
        "3515509" => "FERNANDOPOLIS",
        "3515608" => "FERNANDO PRESTES",
        "3515657" => "FERNAO",
        "3515707" => "FERRAZ DE VASCONCELOS",
        "3515806" => "FLORA RICA",
        "3515905" => "FLOREAL",
        "3516002" => "FLORIDA PAULISTA",
        "3516101" => "FLORINIA",
        "3516200" => "FRANCA",
        "3516309" => "FRANCISCO MORATO",
        "3516408" => "FRANCO DA ROCHA",
        "3516507" => "GABRIEL MONTEIRO",
        "3516606" => "GALIA",
        "3516705" => "GARCA",
        "3516804" => "GASTAO VIDIGAL",
        "3516853" => "GAVIAO PEIXOTO",
        "3516903" => "GENERAL SALGADO",
        "3517000" => "GETULINA",
        "3517109" => "GLICERIO",
        "3517208" => "GUAICARA",
        "3517307" => "GUAIMBE",
        "3517406" => "GUAIRA",
        "3517505" => "GUAPIACU",
        "3517604" => "GUAPIARA",
        "3517703" => "GUARA",
        "3517802" => "GUARACAI",
        "3517901" => "GUARACI",
        "3518008" => "GUARANI D OESTE",
        "3518107" => "GUARANTA",
        "3518206" => "GUARARAPES",
        "3518305" => "GUARAREMA",
        "3518404" => "GUARATINGUETA",
        "3518503" => "GUAREI",
        "3518602" => "GUARIBA",
        "3518701" => "GUARUJA",
        "3518800" => "GUARULHOS",
        "3518859" => "GUATAPARA",
        "3518909" => "GUZOLANDIA",
        "3519006" => "HERCULANDIA",
        "3519055" => "HOLAMBRA",
        "3519071" => "HORTOLANDIA",
        "3519105" => "IACANGA",
        "3519204" => "IACRI",
        "3519253" => "IARAS",
        "3519303" => "IBATE",
        "3519402" => "IBIRA",
        "3519501" => "IBIRAREMA",
        "3519600" => "IBITINGA",
        "3519709" => "IBIUNA",
        "3519808" => "ICEM",
        "3519907" => "IEPE",
        "3520004" => "IGARACU DO TIETE",
        "3520103" => "IGARAPAVA",
        "3520202" => "IGARATA",
        "3520301" => "IGUAPE",
        "3520400" => "ILHABELA",
        "3520426" => "ILHA COMPRIDA",
        "3520442" => "ILHA SOLTEIRA",
        "3520509" => "INDAIATUBA",
        "3520608" => "INDIANA",
        "3520707" => "INDIAPORA",
        "3520806" => "INUBIA PAULISTA",
        "3520905" => "IPAUSSU",
        "3521002" => "IPERO",
        "3521101" => "IPEUNA",
        "3521150" => "IPIGUA",
        "3521200" => "IPORANGA",
        "3521309" => "IPUA",
        "3521408" => "IRACEMAPOLIS",
        "3521507" => "IRAPUA",
        "3521606" => "IRAPURU",
        "3521705" => "ITABERA",
        "3521804" => "ITAI",
        "3521903" => "ITAJOBI",
        "3522000" => "ITAJU",
        "3522109" => "ITANHAEM",
        "3522158" => "ITAOCA",
        "3522208" => "ITAPECERICA DA SERRA",
        "3522307" => "ITAPETININGA",
        "3522406" => "ITAPEVA",
        "3522505" => "ITAPEVI",
        "3522604" => "ITAPIRA",
        "3522653" => "ITAPIRAPUA PAULISTA",
        "3522703" => "ITAPOLIS",
        "3522802" => "ITAPORANGA",
        "3522901" => "ITAPUI",
        "3523008" => "ITAPURA",
        "3523107" => "ITAQUAQUECETUBA",
        "3523206" => "ITARARE",
        "3523305" => "ITARIRI",
        "3523404" => "ITATIBA",
        "3523503" => "ITATINGA",
        "3523602" => "ITIRAPINA",
        "3523701" => "ITIRAPUA",
        "3523800" => "ITOBI",
        "3523909" => "ITU",
        "3524006" => "ITUPEVA",
        "3524105" => "ITUVERAVA",
        "3524204" => "JABORANDI",
        "3524303" => "JABOTICABAL",
        "3524402" => "JACAREI",
        "3524501" => "JACI",
        "3524600" => "JACUPIRANGA",
        "3524709" => "JAGUARIUNA",
        "3524808" => "JALES",
        "3524907" => "JAMBEIRO",
        "3525003" => "JANDIRA",
        "3525102" => "JARDINOPOLIS",
        "3525201" => "JARINU",
        "3525300" => "JAU",
        "3525409" => "JERIQUARA",
        "3525508" => "JOANOPOLIS",
        "3525607" => "JOAO RAMALHO",
        "3525706" => "JOSE BONIFACIO",
        "3525805" => "JULIO MESQUITA",
        "3525854" => "JUMIRIM",
        "3525904" => "JUNDIAI",
        "3526001" => "JUNQUEIROPOLIS",
        "3526100" => "JUQUIA",
        "3526209" => "JUQUITIBA",
        "3526308" => "LAGOINHA",
        "3526407" => "LARANJAL PAULISTA",
        "3526506" => "LAVINIA",
        "3526605" => "LAVRINHAS",
        "3526704" => "LEME",
        "3526803" => "LENCOIS PAULISTA",
        "3526902" => "LIMEIRA",
        "3527009" => "LINDOIA",
        "3527108" => "LINS",
        "3527207" => "LORENA",
        "3527256" => "LOURDES",
        "3527306" => "LOUVEIRA",
        "3527405" => "LUCELIA",
        "3527504" => "LUCIANOPOLIS",
        "3527603" => "LUIS ANTONIO",
        "3527702" => "LUIZIANIA",
        "3527801" => "LUPERCIO",
        "3527900" => "LUTECIA",
        "3528007" => "MACATUBA",
        "3528106" => "MACAUBAL",
        "3528205" => "MACEDONIA",
        "3528304" => "MAGDA",
        "3528403" => "MAIRINQUE",
        "3528502" => "MAIRIPORA",
        "3528601" => "MANDURI",
        "3528700" => "MARABA PAULISTA",
        "3528809" => "MARACAI",
        "3528858" => "MARAPOAMA",
        "3528908" => "MARIAPOLIS",
        "3529005" => "MARILIA",
        "3529104" => "MARINOPOLIS",
        "3529203" => "MARTINOPOLIS",
        "3529302" => "MATAO",
        "3529401" => "MAUA",
        "3529500" => "MENDONCA",
        "3529609" => "MERIDIANO",
        "3529658" => "MESOPOLIS",
        "3529708" => "MIGUELOPOLIS",
        "3529807" => "MINEIROS DO TIETE",
        "3529906" => "MIRACATU",
        "3530003" => "MIRA ESTRELA",
        "3530102" => "MIRANDOPOLIS",
        "3530201" => "MIRANTE DO PARANAPANEMA",
        "3530300" => "MIRASSOL",
        "3530409" => "MIRASSOLANDIA",
        "3530508" => "MOCOCA",
        "3530607" => "MOGI DAS CRUZES",
        "3530706" => "MOGI GUACU",
        "3530805" => "MOJI MIRIM",
        "3530904" => "MOMBUCA",
        "3531001" => "MONCOES",
        "3531100" => "MONGAGUA",
        "3531209" => "MONTE ALEGRE DO SUL",
        "3531308" => "MONTE ALTO",
        "3531407" => "MONTE APRAZIVEL",
        "3531506" => "MONTE AZUL PAULISTA",
        "3531605" => "MONTE CASTELO",
        "3531704" => "MONTEIRO LOBATO",
        "3531803" => "MONTE MOR",
        "3531902" => "MORRO AGUDO",
        "3532009" => "MORUNGABA",
        "3532058" => "MOTUCA",
        "3532108" => "MURUTINGA DO SUL",
        "3532157" => "NANTES",
        "3532207" => "NARANDIBA",
        "3532306" => "NATIVIDADE DA SERRA",
        "3532405" => "NAZARE PAULISTA",
        "3532504" => "NEVES PAULISTA",
        "3532603" => "NHANDEARA",
        "3532702" => "NIPOA",
        "3532801" => "NOVA ALIANCA",
        "3532827" => "NOVA CAMPINA",
        "3532843" => "NOVA CANAA PAULISTA",
        "3532868" => "NOVA CASTILHO",
        "3532900" => "NOVA EUROPA",
        "3533007" => "NOVA GRANADA",
        "3533106" => "NOVA GUATAPORANGA",
        "3533205" => "NOVA INDEPENDENCIA",
        "3533254" => "NOVAIS",
        "3533304" => "NOVA LUZITANIA",
        "3533403" => "NOVA ODESSA",
        "3533502" => "NOVO HORIZONTE",
        "3533601" => "NUPORANGA",
        "3533700" => "OCAUCU",
        "3533809" => "OLEO",
        "3533908" => "OLIMPIA",
        "3534005" => "ONDA VERDE",
        "3534104" => "ORIENTE",
        "3534203" => "ORINDIUVA",
        "3534302" => "ORLANDIA",
        "3534401" => "OSASCO",
        "3534500" => "OSCAR BRESSANE",
        "3534609" => "OSVALDO CRUZ",
        "3534708" => "OURINHOS",
        "3534757" => "OUROESTE",
        "3534807" => "OURO VERDE",
        "3534906" => "PACAEMBU",
        "3535002" => "PALESTINA",
        "3535101" => "PALMARES PAULISTA",
        "3535200" => "PALMEIRA D OESTE",
        "3535309" => "PALMITAL",
        "3535408" => "PANORAMA",
        "3535507" => "PARAGUACU PAULISTA",
        "3535606" => "PARAIBUNA",
        "3535705" => "PARAISO",
        "3535804" => "PARANAPANEMA",
        "3535903" => "PARANAPUA",
        "3536000" => "PARAPUA",
        "3536109" => "PARDINHO",
        "3536208" => "PARIQUERA-ACU",
        "3536257" => "PARISI",
        "3536307" => "PATROCINIO PAULISTA",
        "3536406" => "PAULICEIA",
        "3536505" => "PAULINIA",
        "3536570" => "PAULISTANIA",
        "3536604" => "PAULO DE FARIA",
        "3536703" => "PEDERNEIRAS",
        "3536802" => "PEDRA BELA",
        "3536901" => "PEDRANOPOLIS",
        "3537008" => "PEDREGULHO",
        "3537107" => "PEDREIRA",
        "3537156" => "PEDRINHAS PAULISTA",
        "3537206" => "PEDRO DE TOLEDO",
        "3537305" => "PENAPOLIS",
        "3537404" => "PEREIRA BARRETO",
        "3537503" => "PEREIRAS",
        "3537602" => "PERUIBE",
        "3537701" => "PIACATU",
        "3537800" => "PIEDADE",
        "3537909" => "PILAR DO SUL",
        "3538006" => "PINDAMONHANGABA",
        "3538105" => "PINDORAMA",
        "3538204" => "PINHALZINHO",
        "3538303" => "PIQUEROBI",
        "3538501" => "PIQUETE",
        "3538600" => "PIRACAIA",
        "3538709" => "PIRACICABA",
        "3538808" => "PIRAJU",
        "3538907" => "PIRAJUI",
        "3539004" => "PIRANGI",
        "3539103" => "PIRAPORA DO BOM JESUS",
        "3539202" => "PIRAPOZINHO",
        "3539301" => "PIRASSUNUNGA",
        "3539400" => "PIRATININGA",
        "3539509" => "PITANGUEIRAS",
        "3539608" => "PLANALTO",
        "3539707" => "PLATINA",
        "3539806" => "POA",
        "3539905" => "POLONI",
        "3540002" => "POMPEIA",
        "3540101" => "PONGAI",
        "3540200" => "PONTAL",
        "3540259" => "PONTALINDA",
        "3540309" => "PONTES GESTAL",
        "3540408" => "POPULINA",
        "3540507" => "PORANGABA",
        "3540606" => "PORTO FELIZ",
        "3540705" => "PORTO FERREIRA",
        "3540754" => "POTIM",
        "3540804" => "POTIRENDABA",
        "3540853" => "PRACINHA",
        "3540903" => "PRADOPOLIS",
        "3541000" => "PRAIA GRANDE",
        "3541059" => "PRATANIA",
        "3541109" => "PRESIDENTE ALVES",
        "3541208" => "PRESIDENTE BERNARDES",
        "3541307" => "PRESIDENTE EPITACIO",
        "3541406" => "PRESIDENTE PRUDENTE",
        "3541505" => "PRESIDENTE VENCESLAU",
        "3541604" => "PROMISSAO",
        "3541653" => "QUADRA",
        "3541703" => "QUATA",
        "3541802" => "QUEIROZ",
        "3541901" => "QUELUZ",
        "3542008" => "QUINTANA",
        "3542107" => "RAFARD",
        "3542206" => "RANCHARIA",
        "3542305" => "REDENCAO DA SERRA",
        "3542404" => "REGENTE FEIJO",
        "3542503" => "REGINOPOLIS",
        "3542602" => "REGISTRO",
        "3542701" => "RESTINGA",
        "3542800" => "RIBEIRA",
        "3542909" => "RIBEIRAO BONITO",
        "3543006" => "RIBEIRAO BRANCO",
        "3543105" => "RIBEIRAO CORRENTE",
        "3543204" => "RIBEIRAO DO SUL",
        "3543238" => "RIBEIRAO DOS INDIOS",
        "3543253" => "RIBEIRAO GRANDE",
        "3543303" => "RIBEIRAO PIRES",
        "3543402" => "RIBEIRAO PRETO",
        "3543501" => "RIVERSUL",
        "3543600" => "RIFAINA",
        "3543709" => "RINCAO",
        "3543808" => "RINOPOLIS",
        "3543907" => "RIO CLARO",
        "3544004" => "RIO DAS PEDRAS",
        "3544103" => "RIO GRANDE DA SERRA",
        "3544202" => "RIOLANDIA",
        "3544251" => "ROSANA",
        "3544301" => "ROSEIRA",
        "3544400" => "RUBIACEA",
        "3544509" => "RUBINEIA",
        "3544608" => "SABINO",
        "3544707" => "SAGRES",
        "3544806" => "SALES",
        "3544905" => "SALES OLIVEIRA",
        "3545001" => "SALESOPOLIS",
        "3545100" => "SALMOURAO",
        "3545159" => "SALTINHO",
        "3545209" => "SALTO",
        "3545308" => "SALTO DE PIRAPORA",
        "3545407" => "SALTO GRANDE",
        "3545506" => "SANDOVALINA",
        "3545605" => "SANTA ADELIA",
        "3545704" => "SANTA ALBERTINA",
        "3545803" => "SANTA BARBARA D OESTE",
        "3546009" => "SANTA BRANCA",
        "3546108" => "SANTA CLARA D OESTE",
        "3546207" => "SANTA CRUZ DA CONCEICAO",
        "3546256" => "SANTA CRUZ DA ESPERANCA",
        "3546306" => "SANTA CRUZ DAS PALMEIRAS",
        "3546405" => "SANTA CRUZ DO RIO PARDO",
        "3546504" => "SANTA ERNESTINA",
        "3546603" => "SANTA FE DO SUL",
        "3546702" => "SANTA GERTRUDES",
        "3546801" => "SANTA ISABEL",
        "3546900" => "SANTA LUCIA",
        "3547007" => "SANTA MARIA DA SERRA",
        "3547106" => "SANTA MERCEDES",
        "3547205" => "SANTANA DA PONTE PENSA",
        "3547304" => "SANTANA DE PARNAIBA",
        "3547403" => "SANTA RITA D OESTE",
        "3547502" => "SANTA RITA DO PASSA QUATRO",
        "3547601" => "SANTA ROSA DE VITERBO",
        "3547650" => "SANTA SALETE",
        "3547700" => "SANTO ANASTACIO",
        "3547809" => "SANTO ANDRE",
        "3547908" => "SANTO ANTONIO DA ALEGRIA",
        "3548005" => "SANTO ANTONIO DE POSSE",
        "3548054" => "SANTO ANTONIO DO ARACANGUA",
        "3548104" => "SANTO ANTONIO DO JARDIM",
        "3548203" => "SANTO ANTONIO DO PINHAL",
        "3548302" => "SANTO EXPEDITO",
        "3548401" => "SANTOPOLIS DO AGUAPEI",
        "3548500" => "SANTOS",
        "3548609" => "SAO BENTO DO SAPUCAI",
        "3548708" => "SAO BERNARDO DO CAMPO",
        "3548807" => "SAO CAETANO DO SUL",
        "3548906" => "SAO CARLOS",
        "3549003" => "SAO FRANCISCO",
        "3549102" => "SAO JOAO DA BOA VISTA",
        "3549201" => "SAO JOAO DAS DUAS PONTES",
        "3549250" => "SAO JOAO DE IRACEMA",
        "3549300" => "SAO JOAO DO PAU D ALHO",
        "3549409" => "SAO JOAQUIM DA BARRA",
        "3549508" => "SAO JOSE DA BELA VISTA",
        "3549607" => "SAO JOSE DO BARREIRO",
        "3549706" => "SAO JOSE DO RIO PARDO",
        "3549805" => "SAO JOSE DO RIO PRETO",
        "3549904" => "SAO JOSE DOS CAMPOS",
        "3549953" => "SAO LOURENCO DA SERRA",
        "3550001" => "SAO LUIS DO PARAITINGA",
        "3550100" => "SAO MANUEL",
        "3550209" => "SAO MIGUEL ARCANJO",
        "3550308" => "SAO PAULO",
        "3550407" => "SAO PEDRO",
        "3550506" => "SAO PEDRO DO TURVO",
        "3550605" => "SAO ROQUE",
        "3550704" => "SAO SEBASTIAO",
        "3550803" => "SAO SEBASTIAO DA GRAMA",
        "3550902" => "SAO SIMAO",
        "3551009" => "SAO VICENTE",
        "3551108" => "SARAPUI",
        "3551207" => "SARUTAIA",
        "3551306" => "SEBASTIANOPOLIS DO SUL",
        "3551405" => "SERRA AZUL",
        "3551504" => "SERRANA",
        "3551603" => "SERRA NEGRA",
        "3551702" => "SERTAOZINHO",
        "3551801" => "SETE BARRAS",
        "3551900" => "SEVERINIA",
        "3552007" => "SILVEIRAS",
        "3552106" => "SOCORRO",
        "3552205" => "SOROCABA",
        "3552304" => "SUD MENNUCCI",
        "3552403" => "SUMARE",
        "3552502" => "SUZANO",
        "3552551" => "SUZANAPOLIS",
        "3552601" => "TABAPUA",
        "3552700" => "TABATINGA",
        "3552809" => "TABOAO DA SERRA",
        "3552908" => "TACIBA",
        "3553005" => "TAGUAI",
        "3553104" => "TAIACU",
        "3553203" => "TAIUVA",
        "3553302" => "TAMBAU",
        "3553401" => "TANABI",
        "3553500" => "TAPIRAI",
        "3553609" => "TAPIRATIBA",
        "3553658" => "TAQUARAL",
        "3553708" => "TAQUARITINGA",
        "3553807" => "TAQUARITUBA",
        "3553856" => "TAQUARIVAI",
        "3553906" => "TARABAI",
        "3553955" => "TARUMA",
        "3554003" => "TATUI",
        "3554102" => "TAUBATE",
        "3554201" => "TEJUPA",
        "3554300" => "TEODORO SAMPAIO",
        "3554409" => "TERRA ROXA",
        "3554508" => "TIETE",
        "3554607" => "TIMBURI",
        "3554656" => "TORRE DE PEDRA",
        "3554706" => "TORRINHA",
        "3554755" => "TRABIJU",
        "3554805" => "TREMEMBE",
        "3554904" => "TRES FRONTEIRAS",
        "3554953" => "TUIUTI",
        "3555000" => "TUPA",
        "3555109" => "TUPI PAULISTA",
        "3555208" => "TURIUBA",
        "3555307" => "TURMALINA",
        "3555356" => "UBARANA",
        "3555406" => "UBATUBA",
        "3555505" => "UBIRAJARA",
        "3555604" => "UCHOA",
        "3555703" => "UNIAO PAULISTA",
        "3555802" => "URANIA",
        "3555901" => "URU",
        "3556008" => "URUPES",
        "3556107" => "VALENTIM GENTIL",
        "3556206" => "VALINHOS",
        "3556305" => "VALPARAISO",
        "3556354" => "VARGEM",
        "3556404" => "VARGEM GRANDE DO SUL",
        "3556453" => "VARGEM GRANDE PAULISTA",
        "3556503" => "VARZEA PAULISTA",
        "3556602" => "VERA CRUZ",
        "3556701" => "VINHEDO",
        "3556800" => "VIRADOURO",
        "3556909" => "VISTA ALEGRE DO ALTO",
        "3556958" => "VITORIA BRASIL",
        "3557006" => "VOTORANTIM",
        "3557105" => "VOTUPORANGA",
        "3557154" => "ZACARIAS",
        "3557204" => "CHAVANTES",
        "3557303" => "ESTIVA GERBI"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '25'
            ]);
        }
    }
}
