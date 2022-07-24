<?php

namespace App\Repositories;

use App\Exceptions\GeneralException;
use App\Models\City;
use Illuminate\Support\Facades\DB;

class CityRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new City;
    }

    public function citiesPerState($uf)
    {
        $cities = DB::table('city')
            ->join('uf', 'uf.id', '=', 'city.uf_id')
            ->where('uf.code', $uf)
            ->orderBy('city.name')
            ->pluck('city.name', 'city.ibge_code');
        return $cities;
    }

    public function perIbgeCode($code)
    {
        $city = $this->model::where('ibge_code', $code)->first();

        if(!isset($city))
        {
            throw new GeneralException('Cidade não encontrada.');
        }

        return $city;
    }

}
