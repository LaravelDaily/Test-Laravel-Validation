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

Route::post('posts', [\App\Http\Controllers\PostController::class, 'store']);
Route::post('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->middleware('auth');
Route::resource('projects', \App\Http\Controllers\ProjectController::class);

Route::get('/', function () {
    return view('welcome');
});
