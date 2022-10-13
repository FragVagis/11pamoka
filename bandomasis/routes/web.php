<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController as C;
use App\Http\Controllers\PatiekalasController as M;
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
Route::put('/rate/{patiekalas}', [H::class, 'rate'])->name('rate')->middleware('gate:user');
Route::post('/comment/{patiekalas}', [H::class, 'addComment'])->name('comment')->middleware('gate:user');

Route::prefix('patiekalas')->name('m_')->group(function () {
    Route::get('/', [P::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [P::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [P::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{patiekalas}', [P::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{patiekalas}', [P::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{patiekalas}', [P::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{patiekalas}', [P::class, 'update'])->name('update')->middleware('gate:admin');
});


Route::prefix('comment')->name('c_')->group(function () {
    Route::get('/', [C::class, 'index'])->name('index')->middleware('gate:user');
    Route::delete('/delete/{comment}', [C::class, 'destroy'])->name('delete')->middleware('gate:admin');
});