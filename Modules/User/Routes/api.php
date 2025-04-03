<?php
namespace Modules\User\Routes;
use Modules\User\Interfaces\UserControllerInterface;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function() {
    Route::get('/', [UserControllerInterface::class, 'index']);
    Route::get('/show/{id}', [UserControllerInterface::class, 'detail']);
    Route::post('/', [UserControllerInterface::class, 'store']);
    Route::put('/{id}', [UserControllerInterface::class, 'update']);
    Route::delete('/{id}', [UserControllerInterface::class, 'delete']);
});
