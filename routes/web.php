<?php

use App\Http\Controllers\BuilderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/builder', [BuilderController::class,'index']);


Route::get('/recipes',[RecipeController::class,'index']);
Route::get('/recipes/{recipe}/edit',[RecipeController::class,'edit']);
Route::put('/recipes/{recipe}',[RecipeController::class,'update']);
Route::post('/recipes',[RecipeController::class,'store']);
Route::get('/recipes/create',[RecipeController::class,'create']);
Route::delete('/recipes/{recipe}',[RecipeController::class, 'destroy']);
