<?php

use App\Http\Controllers\HomeController;
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
Route::get('/aaa/{id}', [HomeController::class, 'index']);
Route::get('/test001', [HomeController::class, 'test001'])->middleware('testmmm');;
Route::get('/test002', [HomeController::class, 'test002']);
Route::get('/three', [HomeController::class, 'three']);
Route::get('/show/{id}', [HomeController::class, 'show']);
Route::get('/insert', [HomeController::class, 'insert']);
Route::get('/update', [HomeController::class, 'update']);
Route::get('/delete', [HomeController::class, 'delete']);
