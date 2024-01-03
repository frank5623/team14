<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\DevelopersController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->group(function () {
    
    Route::get('/', function () {
        return redirect('games');
    });
    
    Route::get('games', [GamesController::class, 'index'])->name('games.index');
    
    Route::get('games/senior', [GamesController::class, 'senior'])->name('games.senior');
    // 顯示單一球員資料
    Route::get('games/{id}', [GamesController::class, 'show'])->where('id', '[0-9]+')->name('games.show');
    // 修改單一球員表單
    Route::get('games/{id}/edit', [GamesController::class, 'edit'])->where('id', '[0-9]+')->name('games.edit');
    
    Route::delete('games/delete/{id}', [GamesController::class, 'destroy'])->where('id', '[0-9]+')->name('games.destroy')->middleware('can:admin');
    
    Route::get('games/create', [GamesController::class, 'create'])->name('games.create')->middleware('can:admin')->middleware('can:admin');
    // 修改球員表單
    Route::get('games/{id}/edit', [GamesController::class, 'edit'])->where('id', '[0-9]+')->name('games.edit');
    // 修改球員資料
    Route::patch('games/update/{id}', [GamesController::class, 'update'])->where('id', '[0-9]+')->name('games.update');
    // 儲存新球員資料
    Route::post('games/store', [GamesController::class, 'store'])->where('id', '[0-9]+')->name('games.store')->middleware('can:admin');
    
    
    
    // 顯示顯示所有球隊資料
    Route::get('developers', [DevelopersController::class, 'index'])->name('developers.index');
    // 顯示單一球隊資料
    Route::get('developers/{id}', [DevelopersController::class, 'show'])->where('id', '[0-9]+')->name('developers.show');
    // 修改單一球隊表單
    Route::get('developers/{id}/edit', [DevelopersController::class, 'edit'])->where('id', '[0-9]+')->name('developers.edit');
    
    Route::delete('developers/delete/{id}', [DevelopersController::class, 'destroy'])->where('id', '[0-9]+')->name('developers.destroy')->middleware('can:admin');
    
    Route::get('developers/create', [DevelopersController::class, 'create'])->name('developers.create')->middleware('can:admin');
    // 修改球隊表單
    Route::get('developers/{id}/edit', [DevelopersController::class, 'edit'])->where('id', '[0-9]+')->name('developers.edit');
    // 修改球隊資料
    Route::patch('developers/update/{id}', [DevelopersController::class, 'update'])->where('id', '[0-9]+')->name('developers.update');
    // 儲存新球隊資料
    Route::post('developers/store', [DevelopersController::class, 'store'])->name('developers.store')->middleware('can:admin');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

