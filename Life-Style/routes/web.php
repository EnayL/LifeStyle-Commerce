<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AjoutSneakersController;
use App\Http\Controllers\SneakersController;
use App\Http\Controllers\AjoutPostController;
use App\Http\Controllers\AjoutPaumeController;
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



// ----------- HOME PAGE -----------
// afficher /home
Route::get('/home', function () {
    return view('home');
});

// ----------- SNEAKERS ROUTE -----------
// afficher /catalogue de sneakers 
Route::get('/cataloguesneakers', function () {
    return view('cataloguesneakers');
});

// afficher la page d'ajout sneakers
Route::get('/ajoutsneakers', [AjoutSneakersController::class, 'show']);

// Envoyer un form de création de vente sneakers avec la methode store 
Route::post('/ajoutsneakers', [AjoutSneakersController::class, 'store'])->name("sneakers-user");

//afficher la liste des paires en vente
Route::get('/cataloguesneakers', [AjoutSneakersController::class, 'display']);

// afficher /sneakers page 
Route::get('/sneakers/{id}', [SneakersController::class, 'show']);

//supprimer la sneakers 
Route::post('/sneakers/{id}', [SneakersController::class, 'destroy']);

// ----------- LifeStyle and Rap ROUTE -----------

// afficher catalogue des articles LifeStyle et Rap
Route::get('/lifestylerap', function () {
    return view('lifestylerap');
});

// afficher la page d'ajout poste 
Route::get('/ajoutlifestylerap', [AjoutPostController::class, 'show']);

// Envoyer un form de création de vente sneakers avec la methode store 
Route::post('/ajoutlifestylerap', [AjoutPostController::class, 'store'])->name("lifestylerap-user");

//afficher la liste des paires en vente
Route::get('/lifestylerap', [AjoutPostController::class, 'display']);


// ----------- Paume ROUTE -----------

// ----------- Paume. -----------
Route::get('/paume', function () {
    return view('paume');
});

// afficher la page d'ajout poste 
Route::get('/ajoutpaume', [AjoutPaumeController::class, 'show']);

// Envoyer un form de création de vente sneakers avec la methode store 
Route::post('/ajoutpaume', [AjoutPaumeController::class, 'store'])->name("paume-user");

//afficher la liste des paires en vente
Route::get('/paume', [AjoutPaumeController::class, 'display']);

// se déconnecter
Route::post('/home', [LoginController::class, 'logout']);
