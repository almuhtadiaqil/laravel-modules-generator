<?php
namespace Modules\Auth\Routes;
use Modules\Auth\Interfaces\AuthControllerInterface;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function() {
    Route::get('/', [AuthControllerInterface::class, 'index']);
});
