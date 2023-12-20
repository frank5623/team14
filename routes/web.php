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
Route::get('games/create', [GamesController::class, 'create'])->where('id','[0-9]+')->name('games.create');
Route::post('games/store', [GamesController::class, 'store'])->name('games.store');
Route::get('games/popular', [GamesController::class, 'popular'])->where('id','[0-9]+')->name('games.popular');
Route::get('games/{id}', [GamesController::class, 'show'])->where('id','[0-9]+')->name('games.show');
Route::get('games/{id}/edit', [GamesController::class, 'edit'])->where('id','[0-9]+')->name('games.edit');
Route::delete('games/delete/{id}', [GamesController::class, 'destroy'])->where('id','[0-9]+')->name('games.delete');
Route::patch('games/update/{id}', [GamesController::class, 'update'])->where('id','[0-9]+')->name('games.update');


Route::get('developers', [DevelopersController::class, 'index'])->name('developers.index');
Route::get('developers/create', [DevelopersController::class, 'create'])->name('developers.create');
Route::post('developers/store', [DevelopersController::class, 'store'])->name('developers.store');
Route::get('developers/{id}', [DevelopersController::class, 'show'])->where('id','[0-9]+')->name('developers.show');
Route::get('developers/{id}/edit', [DevelopersController::class, 'edit'])->where('id','[0-9]+')->name('developers.edit');
Route::delete('developers/delete/{id}', [DevelopersController::class, 'destroy'])->where('id','[0-9]+')->name('developers.delete');
Route::patch('developers/update/{id}', [DevelopersController::class, 'update'])->where('id','[0-9]+')->name('developers.update');

