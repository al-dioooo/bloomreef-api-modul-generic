<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/branch', [BranchController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{phone}', [UserController::class, 'show']);
Route::patch('/user/update', [UserController::class, 'update']);
Route::delete('/user/destroy', [UserController::class, 'destroy']);

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/verify/token', [AuthenticationController::class, 'verifyToken']);
Route::post('/verify/otp', [AuthenticationController::class, 'verifyOtp']);

Route::get('/role', [RoleController::class, 'index']);
Route::get('/role/{id}', [RoleController::class, 'show']);
Route::post('/role/store', [RoleController::class, 'store']);
Route::patch('/role/update', [RoleController::class, 'update']);
Route::delete('/role/destroy', [RoleController::class, 'destroy']);

Route::get('/permission', [PermissionController::class, 'index']);

Route::get('/country', [CountryController::class, 'index']);

Route::get('/application', [ApplicationController::class, 'index']);

// require __DIR__ . '/auth.php';
