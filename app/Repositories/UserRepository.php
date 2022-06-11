<?php 

namespace App\Repositories;

use App\Models\Auth\User\User;
use App\Exceptions\GeneralException;
use App\Repositories\AbstractRepository;
use Exception;

class UserRepository extends AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new User;
    }

    public function restore($id)
    {
        $user = $this->model->withTrashed()->where('id', $id)->first();
        
        if(isset($user) && isset($user->id))
        {
            $user->restore();
            return true;
        }
        
        throw new GeneralException(trans('exceptions.backend.access.users.restore_error'));
    }

    public function destroy($id)
    {
        if(auth()->id() == $id)
        {
            throw new GeneralException(trans('exceptions.backend.access.users.cant_delete_self'));
        }

        $user = $this->model->find($id);

        if($user->delete())
        {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.access.users.delete_error'));
    }
}