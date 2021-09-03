<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolsController;
use App\Http\Controllers\UserController;

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
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [UserController::class, 'index'])->middleware('auth')->name('home');
Route::get('/users', [UserController::class, 'show'])->middleware('auth')->name('show');
Route::post('/users', [UserController::class, 'edit'])->middleware('auth')->name('edit');

Route::resource('rols', RolsController::class)->middleware('auth');