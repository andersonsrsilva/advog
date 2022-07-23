<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityPiTableSeeder extends Seeder
{
    static array $values = [
        "2200053" => "ACAUA",
        "2200103" => "AGRICOLANDIA",
        "2200202" => "AGUA BRANCA",
        "2200251" => "ALAGOINHA DO PIAUI",
        "2200277" => "ALEGRETE DO PIAUI",
        "2200301" => "ALTO LONGA",
        "2200400" => "ALTOS",
        "2200459" => "ALVORADA DO GURGUEIA",
        "2200509" => "AMARANTE",
        "2200608" => "ANGICAL DO PIAUI",
        "2200707" => "ANISIO DE ABREU",
        "2200806" => "ANTONIO ALMEIDA",
        "2200905" => "AROAZES",
        "2200954" => "AROEIRAS DO ITAIM",
        "2201002" => "ARRAIAL",
        "2201051" => "ASSUNCAO DO PIAUI",
        "2201101" => "AVELINO LOPES",
        "2201150" => "BAIXA GRANDE DO RIBEIRO",
        "2201176" => "BARRA D ALCANTARA",
        "2201200" => "BARRAS",
        "2201309" => "BARREIRAS DO PIAUI",
        "2201408" => "BARRO DURO",
        "2201507" => "BATALHA",
        "2201556" => "BELA VISTA DO PIAUI",
        "2201572" => "BELEM DO PIAUI",
        "2201606" => "BENEDITINOS",
        "2201705" => "BERTOLINIA",
        "2201739" => "BETANIA DO PIAUI",
        "2201770" => "BOA HORA",
        "2201804" => "BOCAINA",
        "2201903" => "BOM JESUS",
        "2201919" => "BOM PRINCIPIO DO PIAUI",
        "2201929" => "BONFIM DO PIAUI",
        "2201945" => "BOQUEIRAO DO PIAUI",
        "2201960" => "BRASILEIRA",
        "2201988" => "BREJO DO PIAUI",
        "2202000" => "BURITI DOS LOPES",
        "2202026" => "BURITI DOS MONTES",
        "2202059" => "CABECEIRAS DO PIAUI",
        "2202075" => "CAJAZEIRAS DO PIAUI",
        "2202083" => "CAJUEIRO DA PRAIA",
        "2202091" => "CALDEIRAO GRANDE DO PIAUI",
        "2202109" => "CAMPINAS DO PIAUI",
        "2202117" => "CAMPO ALEGRE DO FIDALGO",
        "2202133" => "CAMPO GRANDE DO PIAUI",
        "2202174" => "CAMPO LARGO DO PIAUI",
        "2202208" => "CAMPO MAIOR",
        "2202251" => "CANAVIEIRA",
        "2202307" => "CANTO DO BURITI",
        "2202406" => "CAPITAO DE CAMPOS",
        "2202455" => "CAPITAO GERVASIO OLIVEIRA",
        "2202505" => "CARACOL",
        "2202539" => "CARAUBAS DO PIAUI",
        "2202554" => "CARIDADE DO PIAUI",
        "2202604" => "CASTELO DO PIAUI",
        "2202653" => "CAXINGO",
        "2202703" => "COCAL",
        "2202711" => "COCAL DE TELHA",
        "2202729" => "COCAL DOS ALVES",
        "2202737" => "COIVARAS",
        "2202752" => "COLONIA DO GURGUEIA",
        "2202778" => "COLONIA DO PIAUI",
        "2202802" => "CONCEICAO DO CANINDE",
        "2202851" => "CORONEL JOSE DIAS",
        "2202901" => "CORRENTE",
        "2203008" => "CRISTALANDIA DO PIAUI",
        "2203107" => "CRISTINO CASTRO",
        "2203206" => "CURIMATA",
        "2203230" => "CURRAIS",
        "2203255" => "CURRALINHOS",
        "2203271" => "CURRAL NOVO DO PIAUI",
        "2203305" => "DEMERVAL LOBAO",
        "2203354" => "DIRCEU ARCOVERDE",
        "2203404" => "DOM EXPEDITO LOPES",
        "2203420" => "DOMINGOS MOURAO",
        "2203453" => "DOM INOCENCIO",
        "2203503" => "ELESBAO VELOSO",
        "2203602" => "ELISEU MARTINS",
        "2203701" => "ESPERANTINA",
        "2203750" => "FARTURA DO PIAUI",
        "2203800" => "FLORES DO PIAUI",
        "2203859" => "FLORESTA DO PIAUI",
        "2203909" => "FLORIANO",
        "2204006" => "FRANCINOPOLIS",
        "2204105" => "FRANCISCO AYRES",
        "2204154" => "FRANCISCO MACEDO",
        "2204204" => "FRANCISCO SANTOS",
        "2204303" => "FRONTEIRAS",
        "2204352" => "GEMINIANO",
        "2204402" => "GILBUES",
        "2204501" => "GUADALUPE",
        "2204550" => "GUARIBAS",
        "2204600" => "HUGO NAPOLEAO",
        "2204659" => "ILHA GRANDE",
        "2204709" => "INHUMA",
        "2204808" => "IPIRANGA DO PIAUI",
        "2204907" => "ISAIAS COELHO",
        "2205003" => "ITAINOPOLIS",
        "2205102" => "ITAUEIRA",
        "2205151" => "JACOBINA DO PIAUI",
        "2205201" => "JAICOS",
        "2205250" => "JARDIM DO MULATO",
        "2205276" => "JATOBA DO PIAUI",
        "2205300" => "JERUMENHA",
        "2205359" => "JOAO COSTA",
        "2205409" => "JOAQUIM PIRES",
        "2205458" => "JOCA MARQUES",
        "2205508" => "JOSE DE FREITAS",
        "2205516" => "JUAZEIRO DO PIAUI",
        "2205524" => "JULIO BORGES",
        "2205532" => "JUREMA",
        "2205540" => "LAGOINHA DO PIAUI",
        "2205557" => "LAGOA ALEGRE",
        "2205565" => "LAGOA DO BARRO DO PIAUI",
        "2205573" => "LAGOA DE SAO FRANCISCO",
        "2205581" => "LAGOA DO PIAUI",
        "2205599" => "LAGOA DO SITIO",
        "2205607" => "LANDRI SALES",
        "2205706" => "LUIS CORREIA",
        "2205805" => "LUZILANDIA",
        "2205854" => "MADEIRO",
        "2205904" => "MANOEL EMIDIO",
        "2205953" => "MARCOLANDIA",
        "2206001" => "MARCOS PARENTE",
        "2206050" => "MASSAPE DO PIAUI",
        "2206100" => "MATIAS OLIMPIO",
        "2206209" => "MIGUEL ALVES",
        "2206308" => "MIGUEL LEAO",
        "2206357" => "MILTON BRANDAO",
        "2206407" => "MONSENHOR GIL",
        "2206506" => "MONSENHOR HIPOLITO",
        "2206605" => "MONTE ALEGRE DO PIAUI",
        "2206654" => "MORRO CABECA NO TEMPO",
        "2206670" => "MORRO DO CHAPEU DO PIAUI",
        "2206696" => "MURICI DOS PORTELAS",
        "2206704" => "NAZARE DO PIAUI",
        "2206720" => "NAZARIA",
        "2206753" => "NOSSA SENHORA DE NAZARE",
        "2206803" => "NOSSA SENHORA DOS REMEDIOS",
        "2206902" => "NOVO ORIENTE DO PIAUI",
        "2206951" => "NOVO SANTO ANTONIO",
        "2207009" => "OEIRAS",
        "2207108" => "OLHO D AGUA DO PIAUI",
        "2207207" => "PADRE MARCOS",
        "2207306" => "PAES LANDIM",
        "2207355" => "PAJEU DO PIAUI",
        "2207405" => "PALMEIRA DO PIAUI",
        "2207504" => "PALMEIRAIS",
        "2207553" => "PAQUETA",
        "2207603" => "PARNAGUA",
        "2207702" => "PARNAIBA",
        "2207751" => "PASSAGEM FRANCA DO PIAUI",
        "2207777" => "PATOS DO PIAUI",
        "2207793" => "PAU D ARCO DO PIAUI",
        "2207801" => "PAULISTANA",
        "2207850" => "PAVUSSU",
        "2207900" => "PEDRO II",
        "2207934" => "PEDRO LAURENTINO",
        "2207959" => "NOVA SANTA RITA",
        "2208007" => "PICOS",
        "2208106" => "PIMENTEIRAS",
        "2208205" => "PIO IX",
        "2208304" => "PIRACURUCA",
        "2208403" => "PIRIPIRI",
        "2208502" => "PORTO",
        "2208551" => "PORTO ALEGRE DO PIAUI",
        "2208601" => "PRATA DO PIAUI",
        "2208650" => "QUEIMADA NOVA",
        "2208700" => "REDENCAO DO GURGUEIA",
        "2208809" => "REGENERACAO",
        "2208858" => "RIACHO FRIO",
        "2208874" => "RIBEIRA DO PIAUI",
        "2208908" => "RIBEIRO GONCALVES",
        "2209005" => "RIO GRANDE DO PIAUI",
        "2209104" => "SANTA CRUZ DO PIAUI",
        "2209153" => "SANTA CRUZ DOS MILAGRES",
        "2209203" => "SANTA FILOMENA",
        "2209302" => "SANTA LUZ",
        "2209351" => "SANTANA DO PIAUI",
        "2209377" => "SANTA ROSA DO PIAUI",
        "2209401" => "SANTO ANTONIO DE LISBOA",
        "2209450" => "SANTO ANTONIO DOS MILAGRES",
        "2209500" => "SANTO INACIO DO PIAUI",
        "2209559" => "SAO BRAZ DO PIAUI",
        "2209609" => "SAO FELIX DO PIAUI",
        "2209658" => "SAO FRANCISCO DE ASSIS DO PIAUI",
        "2209708" => "SAO FRANCISCO DO PIAUI",
        "2209757" => "SAO GONCALO DO GURGUEIA",
        "2209807" => "SAO GONCALO DO PIAUI",
        "2209856" => "SAO JOAO DA CANABRAVA",
        "2209872" => "SAO JOAO DA FRONTEIRA",
        "2209906" => "SAO JOAO DA SERRA",
        "2209955" => "SAO JOAO DA VARJOTA",
        "2209971" => "SAO JOAO DO ARRAIAL",
        "2210003" => "SAO JOAO DO PIAUI",
        "2210052" => "SAO JOSE DO DIVINO",
        "2210102" => "SAO JOSE DO PEIXE",
        "2210201" => "SAO JOSE DO PIAUI",
        "2210300" => "SAO JULIAO",
        "2210359" => "SAO LOURENCO DO PIAUI",
        "2210375" => "SAO LUIS DO PIAUI",
        "2210383" => "SAO MIGUEL DA BAIXA GRANDE",
        "2210391" => "SAO MIGUEL DO FIDALGO",
        "2210409" => "SAO MIGUEL DO TAPUIO",
        "2210508" => "SAO PEDRO DO PIAUI",
        "2210607" => "SAO RAIMUNDO NONATO",
        "2210623" => "SEBASTIAO BARROS",
        "2210631" => "SEBASTIAO LEAL",
        "2210656" => "SIGEFREDO PACHECO",
        "2210706" => "SIMOES",
        "2210805" => "SIMPLICIO MENDES",
        "2210904" => "SOCORRO DO PIAUI",
        "2210938" => "SUSSUAPARA",
        "2210953" => "TAMBORIL DO PIAUI",
        "2210979" => "TANQUE DO PIAUI",
        "2211001" => "TERESINA",
        "2211100" => "UNIAO",
        "2211209" => "URUCUI",
        "2211308" => "VALENCA DO PIAUI",
        "2211357" => "VARZEA BRANCA",
        "2211407" => "VARZEA GRANDE",
        "2211506" => "VERA MENDES",
        "2211605" => "VILA NOVA DO PIAUI",
        "2211704" => "WALL FERRAZ"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '18'
            ]);
        }
    }
}
