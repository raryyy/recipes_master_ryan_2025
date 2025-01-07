<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RecipesController;
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
    return view('templates.index');
});

Route::get('/', [PagesController::class, 'homeAction'])->name('home');


Route::get('/Recipes/{id}/{slug}', [RecipesController::class, 'show'])->name('recipes.show');