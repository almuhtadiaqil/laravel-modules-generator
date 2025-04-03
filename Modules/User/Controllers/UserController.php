<?php

namespace Modules\User\Controllers;

use Illuminate\Http\Request;
use Modules\User\Interfaces\UserControllerInterface;
use App\Http\Controllers\Controller;
use Modules\User\Interfaces\UserServiceInterface;
use function Symfony\Component\Translation\t;

class UserController extends Controller implements UserControllerInterface
{
    private UserServiceInterface $service;
    public function __construct(UserServiceInterface $service)
    {
        $this->service = $service;
    }


    public function index()
    {
        try {
            return response()->json(
                $this->service->index(),
            );
        }catch (\Exception $e){
            return response()->json(
                $e->getMessage(),
                500
            );
        }
    }

    public function store(Request $request)
    {
        try {
            return response()->json(
                $this->service->store($request),
                201
            );
        }catch (\Exception $e){
            return response()->json(
                $e->getMessage(),
                500
            );
        }
    }

    public function detail($id)
    {
        try {
            return response()->json(
                $this->service->detail($id),
            );
        }catch (\Exception $e){
            return response()->json(
                $e->getMessage(),
                500
            );
        }
    }

    public function update(Request $request, $id)
    {
        try {
            return response()->json(
                $this->service->update($request,$id),
                200
            );
        }catch (\Exception $e){
            return response()->json(
                $e->getMessage(),
                500
            );
        }
    }

    public function delete($id)
    {
        try {
            return response()->json(
                $this->service->delete($id),
                200
            );
        }catch (\Exception $e){
            return response()->json(
                $e->getMessage(),
                500
            );
        }        }
}
