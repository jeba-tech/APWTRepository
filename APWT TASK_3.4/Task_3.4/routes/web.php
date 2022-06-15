<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Login;
use App\Http\Controllers\ProfileController;

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
Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');

//product routes
Route::get('/productList',[ProductController::class, 'productList'])->name('productList');
Route::get('/productEdit/{name}/{id}',[ProductController::class, 'productEdit'])->name('productEdit');
Route::get('/about',[AboutController::class, 'about'])->name('about');


Route::get('/registration',[Registration::class, 'registration'])->name('registration');
Route::post('/registration',[Registration::class, 'registrationSubmitted'])->name('registration');

Route::get('/login',[Login::class, 'login'])->name('login');
Route::post('/login',[Login::class, 'loginSubmitted'])->name('login');
Route::get('/logout',[Login::class,'logout'])->name('logout');

Route::get('/contactUs',[ProductController::class, 'contactUs'])->name('contactUs');
Route::post('/contactUs',[ProductController::class, 'contactUsSubmitted'])->name('contactUs');

Route::get('/customer/dash', [Login::class,'customerDash'])->name('customerDash')->middleware('ValidCustomer'); 