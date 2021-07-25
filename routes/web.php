<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\TodoController::class, 'index']);
Route::post('/todos', [App\Http\Controllers\TodoController::class, 'store']);
Route::put('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'update']);
Route::delete('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'destroy']);
