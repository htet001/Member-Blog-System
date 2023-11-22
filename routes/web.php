<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [RegisterController::class, 'logout']);

Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::group(array('prefix' => 'admin', 'namespace' => 'admin', 'middleware' => 'manager'), function () {

    Route::get('/users', [UserController::class, 'index']);

    Route::get('roles', [RoleController::class, 'index']);
    Route::get('roles/create', [RoleController::class, 'create']);
    Route::post('roles/create', [RoleController::class, 'store']);
});