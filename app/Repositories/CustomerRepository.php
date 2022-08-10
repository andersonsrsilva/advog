<?php

namespace App\Repositories;

use App\Exceptions\GeneralException;
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
        $customer = $this->model::where('cpf', $cpf)->first();

        if(!isset($customer))
        {
            throw new GeneralException('Cliente não encontrado');
        }

        return $customer;
    }

}
