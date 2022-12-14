<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/add', [UsersController::class, 'add']);
Route::get('/user/edit', [UsersController::class, 'show']);
Route::get('/user/update', [UsersController::class, 'update']);
Route::get('/user/delete/{id}', [UsersController::class, 'delete']);
