<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController as C;
use App\Http\Controllers\MovieController as M;
use App\Http\Controllers\HomeController as H;

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



Auth::routes();

Route::get('/', [H::class, 'homeList'])->name('home')->middleware('gate:home');
Route::put('/rate/{movie}', [H::class, 'rate'])->name('rate')->middleware('gate:user');

Route::prefix('movie')->name('m_')->group(function () {
    Route::get('/', [M::class, 'index'])->name('index');
    Route::get('/create', [M::class, 'create'])->name('create');
    Route::post('/create', [M::class, 'store'])->name('store');
    Route::get('/show/{movie}', [M::class, 'show'])->name('show');
    Route::delete('/delete/{movie}', [M::class, 'destroy'])->name('delete');
    Route::get('/edit/{movie}', [M::class, 'edit'])->name('edit');
    Route::put('/edit/{movie}', [M::class, 'update'])->name('update');
});