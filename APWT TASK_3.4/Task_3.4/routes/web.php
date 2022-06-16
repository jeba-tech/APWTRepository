<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Login;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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

//product routes
Route::get('/productList',[ProductController::class, 'productList'])->name('productList');
Route::get('/about',[AboutController::class, 'about'])->name('about');


Route::get('/registration',[Registration::class, 'registration'])->name('registration');
Route::post('/registration',[Registration::class, 'registrationSubmitted'])->name('registration');

Route::get('/adminRegistration',[AdminController::class, 'adminRegistration'])->name('adminRegistration');
Route::post('/adminRegistration',[AdminController::class, 'adminRegistrationSubmitted'])->name('adminRegistration');

Route::get('/login',[Login::class, 'login'])->name('login');
Route::post('/login',[Login::class, 'loginSubmitted'])->name('login');


Route::get('/adminLogin',[AdminController::class, 'adminLogin'])->name('adminLogin');
Route::post('/adminLogin',[AdminController::class, 'adminLoginSubmitted'])->name('adminLogin');

Route::get('/logout',[Login::class,'logout'])->name('logout');
Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('adminLogout');

Route::get('/contactUs',[ProductController::class, 'contactUs'])->name('contactUs');
Route::post('/contactUs',[ProductController::class, 'contactUsSubmitted'])->name('contactUs');

Route::get('/failedLogin',[Login::class, 'failedLogin'])->name('failedLogin');
Route::get('/ok',[Login::class,'ok'])->name('ok');


Route::get('/customer/dash', [CustomerController::class,'customerDash'])->name('customerDash')->middleware('ValidCustomer'); 
Route::get('/admin/dash', [AdminController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin'); 


Route::get('/customer/profile', [CustomerController::class,'customerProfile'])->name('customerProfile');
Route::get('/user/edit', [CustomerController::class,'userEdit'])->name('userEdit');


Route::post('/admin/dash',[AdminController::class, 'adminDash'])->name('adminDash')->middleware('ValidCustomer');
Route::post('/admin/dash',[AdminController::class, 'createUserSubmitted'])->name('adminDash');
Route::get('/admin/userList',[AdminController::class, 'userList'])->name('userList')->middleware('ValidCustomer');

Route::get('/admin/profile', [AdminController::class,'adminProfile'])->name('adminProfile');

Route::get('/userDelete/{id}',[AdminController::class, 'userDelete'])->name('userDelete');

