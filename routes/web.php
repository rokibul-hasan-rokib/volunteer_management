<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


Route::get('/register',[AuthController::class, 'loadRegister'])->name('register');
Route::post('/register',[AuthController::class, 'register'])->name('register.store');
Route::get('/login',[AuthController::class,'loadLogin'])->name('login.page');
Route::post('/login',[AuthController::class,'userLogin'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::resource('project', ProjectController::class);
Route::resource('task', TaskController::class);
Route::resource('event', EventController::class);
Route::resource('user', UserController::class);


Route::get('/contacts',[ContactController::class, 'index'])->name('contacts');
Route::post('/contacts',[ContactController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::get('/', function () {
    return view('frontend.pages.home.index');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact.index');
});
Route::get('/blogs', function () {
    return view('frontend.pages.blog.index');
});
