<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;


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

Route::get('/home', function () {
    return view('home');
});


// Envoyer un form de register avec la methode store 
Route::post('/register', [RegisterController::class, 'store']);

//  Envoyer un form de login avec la methode store 
Route::post('/login', [LoginController::class, 'authenticate']);
