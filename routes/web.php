<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\IngredientController;

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

Route::get('/',[RecipeController::class, 'index']);
Route::get('/recipes/create',[RecipeController::class, 'create']);
Route::get('/recipes/{recipe}',[RecipeController::class, 'detail']);
Route::post('/recipes',[RecipeController::class, 'store']);

