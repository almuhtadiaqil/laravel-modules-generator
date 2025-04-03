<?php

namespace Modules\User\Providers;
use Modules\User\Controllers\UserController;
use Modules\User\Interfaces\UserControllerInterface;
use Modules\User\Interfaces\UserRepositoryInterface;
use Modules\User\Interfaces\UserServiceInterface;
use Modules\User\Repositories\UserRepository;
use Modules\User\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->singleton(UserRepositoryInterface::class,UserRepository::class);
        $this->app->singleton(UserServiceInterface::class,UserService::class);
        $this->app->singleton(UserControllerInterface::class,UserController::class);
    }

    public function boot(){
        $this->loadRoutesFrom(module_path('User','Routes/api.php'));
    }

}
