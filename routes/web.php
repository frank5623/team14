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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::middleware(['auth'])->group(function () {
    // 註解一下
    
    Route::get('/', function () {
        return redirect('games');
    });
Route::get('games/senior1', [GamesController::class, 'senior1'])->name('games.senior1');
Route::get('games/senior', [GamesController::class, 'senior'])->name('games.senior');
// 顯示顯示所有遊戲資料
Route::get('games', [GamesController::class, 'index'])->name('games.index');
// 顯示單一遊戲資料
Route::get('games/{id}', [GamesController::class, 'show'])->where('id', '[0-9]+')->name('games.show');
// 修改單一遊戲表單
Route::get('games/{id}/edit', [GamesController::class, 'edit'])->where('id', '[0-9]+')->name('games.edit');
// 刪除單一遊戲資料
Route::delete('games/delete/{id}', [GamesController::class, 'destroy'])->where('id', '[0-9]+')->name('games.destroy')->middleware('can:admin');
// 新增遊戲表單
Route::get('games/create', [GamesController::class, 'create'])->name('games.create')->middleware('can:admin');
// 修改遊戲表單
Route::get('games/{id}/edit', [GamesController::class, 'edit'])->where('id', '[0-9]+')->name('games.edit');
// 修改遊戲資料
Route::patch('games/update/{id}', [GamesController::class, 'update'])->where('id', '[0-9]+')->name('games.update');
// 儲存新遊戲資料
Route::post('games/store', [GamesController::class, 'store'])->where('id', '[0-9]+')->name('games.store')->middleware('can:admin');




// 顯示顯示所有開發商資料
Route::get('developers', [DevelopersController::class, 'index'])->name('developers.index');
// 顯示單一開發商資料
Route::get('developers/{id}', [DevelopersController::class, 'show'])->where('id', '[0-9]+')->name('developers.show');
// 修改單一開發商表單
Route::get('developers/{id}/edit', [DevelopersController::class, 'edit'])->where('id', '[0-9]+')->name('developers.edit');
// 刪除單一球隊及旗下球員資料
Route::delete('developers/delete/{id}', [DevelopersController::class, 'destroy'])->where('id', '[0-9]+')->name('developers.destroy')->middleware('can:admin');
// 新增球隊表單
Route::get('developers/create', [DevelopersController::class, 'create'])->name('developers.create')->middleware('can:admin');
// 修改球隊表單
Route::get('developers/{id}/edit', [DevelopersController::class, 'edit'])->where('id', '[0-9]+')->name('developers.edit');
// 修改球隊資料
Route::patch('developers/update/{id}', [DevelopersController::class, 'update'])->where('id', '[0-9]+')->name('developers.update');
// 儲存新球隊資料
Route::post('developers/store', [DevelopersController::class, 'store'])->name('developers.store')->middleware('can:admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');