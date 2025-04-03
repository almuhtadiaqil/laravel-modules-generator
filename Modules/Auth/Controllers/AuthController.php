<?php

namespace Modules\Auth\Controllers;

use Modules\Auth\Interfaces\AuthControllerInterface;
use Modules\Auth\Interfaces\AuthServiceInterface;
use Modules\Auth\Models\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller implements AuthControllerInterface
{
    private AuthServiceInterface $service;
    public function __construct($service)
    {
        $this->service = $service;
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
