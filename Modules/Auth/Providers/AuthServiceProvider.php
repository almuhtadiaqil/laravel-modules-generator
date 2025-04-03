<?php

namespace Modules\Auth\Providers;
use Illuminate\Support\Facades\Route;
use Modules\Auth\Controllers\AuthController;
use Modules\Auth\Interfaces\AuthControllerInterface;
use Modules\Auth\Interfaces\AuthRepositoryInterface;
use Modules\Auth\Interfaces\AuthServiceInterface;
use Modules\Auth\Repositories\AuthRepository;
use Modules\Auth\Services\AuthService;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->singleton(AuthRepositoryInterface::class,AuthRepository::class);
        $this->app->singleton(AuthServiceInterface::class,AuthService::class);
        $this->app->singleton(AuthControllerInterface::class,AuthController::class);
    }

    public function boot(){
        $this->loadRoutesFrom(module_path('Auth','Routes/api.php'));
    }

}
