<?php

namespace App\Repositories;

use App\Models\Uf;
use App\Exceptions\GeneralException;
use App\Repositories\AbstractRepository;
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
        return $this->model->select()->get();
    }

}
