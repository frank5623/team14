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
    return redirect('games');
});

Route::get('games', [GamesController::class, 'index'])->name('games.index');
// 顯示單一球員資料
Route::get('games/{id}', [GamesController::class, 'show'])->where('id', '[0-9]+')->name('games.show');
// 修改單一球員表單
Route::get('games/{id}/edit', [GamesController::class, 'edit'])->where('id', '[0-9]+')->name('games.edit');

// 顯示顯示所有球隊資料
Route::get('developers', [DevelopersController::class, 'index'])->name('developers.index');
// 顯示單一球隊資料
Route::get('developers/{id}', [DevelopersController::class, 'show'])->where('id', '[0-9]+')->name('developers.show');
// 修改單一球隊表單
Route::get('developers/{id}/edit', [DevelopersController::class, 'edit'])->where('id', '[0-9]+')->name('developers.edit');

