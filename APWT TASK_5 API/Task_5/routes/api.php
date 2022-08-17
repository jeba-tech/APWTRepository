<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginAPIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//API test

Route::get('/admin/userList',[AdminController::class,'APIList'])->middleware('APIAuth');
Route::post('/admin/userList',[AdminController::class,'APIPost'])->middleware('APIAuth');
//Route::get('/admin/userList',[AdminController::class,'APIList']);
//Route::post('/admin/userList',[AdminController::class,'APIPost']);

Route::post('/login', [LoginAPIController::class, 'login']);
Route::post('/logout', [LoginAPIController::class, 'logout']);