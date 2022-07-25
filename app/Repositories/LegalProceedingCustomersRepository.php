<?php

namespace App\Repositories;

use App\Models\LegalProceedingCustomers;

class LegalProceedingCustomersRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new LegalProceedingCustomers();
    }

}
