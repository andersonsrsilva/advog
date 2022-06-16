<?php

namespace App\Repositories;

use App\Models\Uf;
use App\Exceptions\GeneralException;
use App\Repositories\AbstractRepository;
use Illuminate\Support\Facades\Cache;
use Exception;

class UfRepository extends AbstractRepository
{
    public $model;

    public function __construct()
    {
        $this->model = new Uf;
    }

    public function findStates()
    {
        $uf = Cache::get('uf');

        if(!isset($uf)) {
            $ufs = $this->model->select()->get();
            Cache::forever('uf', $ufs);
        }

        return $uf;
    }

}
