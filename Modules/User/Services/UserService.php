<?php

namespace Modules\User\Services;
use Modules\User\Interfaces\UserRepositoryInterface;
use Modules\User\Interfaces\UserServiceInterface;
use Modules\User\Repositories\UserRepository;
use function Symfony\Component\Translation\t;

class UserService implements UserServiceInterface
{
    private UserRepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function index()
    {
        try{
            return $this->repository->index();
        } catch(\Exception $e){
            return $e;
        }
    }

    public function store($request)
    {
        try {
            return $this->repository->store($request);
        }catch (\Exception $e){
            return $e;
        }
    }

    public function detail($id)
    {
        try {
            return $this->repository->detail($id);
        } catch (\Exception $e){
            return $e;
        }
    }

    public function update($request, $id)
    {
        try {
            return $this->repository->update($request, $id);
        } catch (\Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (\Exception $e){
            return $e;
        }
    }
}
