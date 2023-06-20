<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

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

//Route::get('/pizzas', [PizzaController::class, 'index']);

Route::get('/', [ PizzaController::class, 'index' ] )->name('welcome');
Route::resource('/pizzas',  PizzaController::class);

// Route::resource('/welcome', PizzaController::class);


