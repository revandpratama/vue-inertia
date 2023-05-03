<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

Route::get('/home', [PageController::class, 'index']);
Route::post('/home', [PageController::class, 'store']);

Route::get('/timer', [PageController::class, 'timer']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/edit/{user:username}', [PageController::class, 'editAccount'])
    ->middleware('auth');

Route::put('/edit', [PageController::class, 'update']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);

