<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\DevelopersController;
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
    return view('app');
});

Route::get('games', [GamesController::class, 'index'])->name('games.index');
Route::get('games/{id}', [GamesController::class, 'show'])->name('games.show');
Route::get('games/{id}/edit', [GamesController::class, 'edit'])->name('games.edit');
Route::delete('games/delete/{id}', [GamesController::class, 'destroy'])->name('games.delete');

Route::get('developers', [DevelopersController::class, 'index'])->name('developers.index');
Route::get('developers/{id}', [DevelopersController::class, 'show'])->name('developers.show');
Route::get('developers/{id}/edit', [DevelopersController::class, 'edit'])->name('developers.edit');
Route::delete('developers/delete/{id}', [DevelopersController::class, 'destroy'])->name('developers.delete');
