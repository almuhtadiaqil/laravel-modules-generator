<?php
namespace Modules\User\Repositories;
use Modules\User\Interfaces\UserRepositoryInterface;
use Modules\User\Models\User;

class UserRepository implements UserRepositoryInterface
{
    private User $model;
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        try {
            return $this->model->all();
        }catch (\Exception $e){
            return $e;
        }
    }

    public function store($request)
    {
        try{
            return $this->model->create($request->all());
        }catch (\Exception $e){
            return $e;
        }
    }

    public function detail($id)
    {
        try {
            return $this->model->find($id);
        }catch (\Exception $e){
            return $e;
        }
    }

    public function update($request, $id)
    {
        try {
            return $this->model->update($request->all(), $id);
        }catch (\Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try{
            return $this->model->destroy($id);
        }catch (\Exception $e){
            return $e;
        }
    }
}
