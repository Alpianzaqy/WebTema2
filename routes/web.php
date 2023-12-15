<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/febri', function () {
    return ("Saya murid rpl");
});

Route::get('/guru', function () {
    return view('data_guru');
});

Route::get('/siswa',function(){
    return view('data_siswa');
});
Route::get('/user', function(){
    return view('user');
});
Route::group(['middleware' => 'guest'], function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home1', [HomeController::class, 'index']);
    Route::delete('/logot', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/adidas', function () {
    return view('adidas');
});

Route::get('/creator', function () {
    return view('creator');
});

Route::get('/video', function () {
    return view('video');
});
Route::get('/nike', function () {
    return view('nike');
});
Route::get('/jersey', function () {
    return view('jersey');
});




