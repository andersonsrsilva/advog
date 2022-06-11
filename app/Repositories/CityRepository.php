<?php

namespace App\Repositories;

use App\Models\City;
use App\Exceptions\GeneralException;
use App\Repositories\AbstractRepository;
use Exception;

class CityRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new City;
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
