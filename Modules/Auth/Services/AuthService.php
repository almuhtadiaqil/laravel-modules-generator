<?php

namespace Modules\Auth\Services;
use Modules\Auth\Interfaces\AuthRepositoryInterface;
use Modules\Auth\Interfaces\AuthServiceInterface;
use Modules\Auth\Repositories\AuthRepository;

class AuthService implements AuthServiceInterface
{
    private AuthRepository $repository;
    public function __construct(AuthRepositoryInterface $repository){
        $this->repo = $repository;
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
