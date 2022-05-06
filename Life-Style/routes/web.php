<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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


//afficher la page login
Route::get('/login', function () {
    return view('login');
});

//Envoyer un form de login avec la methode store 
Route::post('/login', [LoginController::class, 'authenticate'])->name("login-user");


//afficher la page register
Route::get('/register', function () {
    return view('register');
});

// Envoyer un form de register avec la methode store 
Route::post('/register', [RegisterController::class, 'store'])->name("register-user");


// afficher /home
Route::get('/home', function () {
    return view('home');
});



// se déconnecter
Route::post('/home', [LoginController::class, 'logout']);
