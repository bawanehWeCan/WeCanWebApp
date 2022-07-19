<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StorysController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


















#storys
 Route::name('admin.storys.')->controller(StorysController::class)->group(function () {
    Route::get('/storys', 'index')->name('index');
    Route::get('/storys/create', 'create')->name('create');
    Route::post('/storys/store', 'store')->name('store');
    Route::get('/storys/{story}/show', 'show')->name('show');
    Route::get('/storys/{story}/edit', 'edit')->name('edit');
    Route::put('/storys/{story}', 'update')->name('update');
    Route::delete('/storys/{story}', 'destroy')->name('destroy');
});
#storys