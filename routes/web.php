<?php


use App\Http\Controllers\LangController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\App;
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
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');
    Route::get('/user', [UsersController::class, 'Users'])->name('user');


    Route::get('lang/{locale}', [LangController::class, 'index']);



