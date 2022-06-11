<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Exceptions\GeneralException;
use App\Repositories\AbstractRepository;
use Exception;

class CustomerRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Customer;
    }

    public function perCodibge_code($id)
    {
        $user = $this->model->withTrashed()->where('id', $id)->first();

        if(isset($user) && isset($user->id))
        {
            $user->restore();
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.access.users.restore_error'));
    }


}
