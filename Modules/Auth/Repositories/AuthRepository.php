<?php
namespace Modules\Auth\Repositories;
use Modules\Auth\Interfaces\AuthRepositoryInterface;
use Modules\Auth\Models\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    private Auth $model;
    public function __construct(Auth $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function store($request)
    {
        // TODO: Implement store() method.
    }

    public function detail($id)
    {
        // TODO: Implement detail() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
