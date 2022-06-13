<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Exceptions\GeneralException;
use App\Repositories\AbstractRepository;
use Exception;

class CustomerRepository extends AbstractRepository
{
    public $model;

    public function __construct()
    {
        $this->model = new Customer;
    }



}
