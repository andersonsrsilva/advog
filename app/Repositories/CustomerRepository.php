<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository extends AbstractRepository
{
    public $model;

    public function __construct()
    {
        $this->model = new Customer;
    }

    public function findPerCpf($cpf)
    {
        return $this->model::where('cpf', $cpf)->first();
    }

}
