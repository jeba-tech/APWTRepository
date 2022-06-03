<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/team',[PagesController::class, 'team'])->name('team');

//Student routes
Route::get('/studentList',[StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{name}/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');
Route::get('/about',[AboutController::class, 'about'])->name('about');

Route::get('/studentCreate',[StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');
