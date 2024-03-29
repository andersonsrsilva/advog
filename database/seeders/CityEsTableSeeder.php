<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityEsTableSeeder extends Seeder
{
    static array $values = [
        "3200102" => "AFONSO CLAUDIO",
        "3200136" => "AGUIA BRANCA",
        "3200169" => "AGUA DOCE DO NORTE",
        "3200201" => "ALEGRE",
        "3200300" => "ALFREDO CHAVES",
        "3200359" => "ALTO RIO NOVO",
        "3200409" => "ANCHIETA",
        "3200508" => "APIACA",
        "3200607" => "ARACRUZ",
        "3200706" => "ATILIO VIVACQUA",
        "3200805" => "BAIXO GUANDU",
        "3200904" => "BARRA DE SAO FRANCISCO",
        "3201001" => "BOA ESPERANCA",
        "3201100" => "BOM JESUS DO NORTE",
        "3201159" => "BREJETUBA",
        "3201209" => "CACHOEIRO DE ITAPEMIRIM",
        "3201308" => "CARIACICA",
        "3201407" => "CASTELO",
        "3201506" => "COLATINA",
        "3201605" => "CONCEICAO DA BARRA",
        "3201704" => "CONCEICAO DO CASTELO",
        "3201803" => "DIVINO DE SAO LOURENCO",
        "3201902" => "DOMINGOS MARTINS",
        "3202009" => "DORES DO RIO PRETO",
        "3202108" => "ECOPORANGA",
        "3202207" => "FUNDAO",
        "3202256" => "GOVERNADOR LINDENBERG",
        "3202306" => "GUACUI",
        "3202405" => "GUARAPARI",
        "3202454" => "IBATIBA",
        "3202504" => "IBIRACU",
        "3202553" => "IBITIRAMA",
        "3202603" => "ICONHA",
        "3202652" => "IRUPI",
        "3202702" => "ITAGUACU",
        "3202801" => "ITAPEMIRIM",
        "3202900" => "ITARANA",
        "3203007" => "IUNA",
        "3203056" => "JAGUARE",
        "3203106" => "JERONIMO MONTEIRO",
        "3203130" => "JOAO NEIVA",
        "3203163" => "LARANJA DA TERRA",
        "3203205" => "LINHARES",
        "3203304" => "MANTENOPOLIS",
        "3203320" => "MARATAIZES",
        "3203346" => "MARECHAL FLORIANO",
        "3203353" => "MARILANDIA",
        "3203403" => "MIMOSO DO SUL",
        "3203502" => "MONTANHA",
        "3203601" => "MUCURICI",
        "3203700" => "MUNIZ FREIRE",
        "3203809" => "MUQUI",
        "3203908" => "NOVA VENECIA",
        "3204005" => "PANCAS",
        "3204054" => "PEDRO CANARIO",
        "3204104" => "PINHEIROS",
        "3204203" => "PIUMA",
        "3204252" => "PONTO BELO",
        "3204302" => "PRESIDENTE KENNEDY",
        "3204351" => "RIO BANANAL",
        "3204401" => "RIO NOVO DO SUL",
        "3204500" => "SANTA LEOPOLDINA",
        "3204559" => "SANTA MARIA DE JETIBA",
        "3204609" => "SANTA TERESA",
        "3204658" => "SAO DOMINGOS DO NORTE",
        "3204708" => "SAO GABRIEL DA PALHA",
        "3204807" => "SAO JOSE DO CALCADO",
        "3204906" => "SAO MATEUS",
        "3204955" => "SAO ROQUE DO CANAA",
        "3205002" => "SERRA",
        "3205010" => "SOORETAMA",
        "3205036" => "VARGEM ALTA",
        "3205069" => "VENDA NOVA DO IMIGRANTE",
        "3205101" => "VIANA",
        "3205150" => "VILA PAVAO",
        "3205176" => "VILA VALERIO",
        "3205200" => "VILA VELHA",
        "3205309" => "VITORIA"
    ];

    public function run()
    {
        foreach (self::$values as $key => $value) {
            DB::table('city')->insert([
                'ibge_code' => $key,
                'name' => $value,
                'uf_id' => '8'
            ]);
        }
    }
}
