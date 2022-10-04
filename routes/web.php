<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StorysController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/{id}', [App\Http\Controllers\HomeController::class, 'service'])->name('service');

Route::get('/project/{id}', [App\Http\Controllers\HomeController::class, 'project'])->name('project');

Route::get('/help', [App\Http\Controllers\HomeController::class, 'help'])->name('help');

Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');








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



Route::post('send-mail', function ( Request $request ) {

    $details = [
        'fullname' => $request->fullname,
        'title' => $request->title,
        'content' => $request->content,
        'email' => $request->email,
        'phone' => $request->phone,
        'site' => $request->site,
    ];

    \Mail::to('info@wecan.jo')->send(new \App\Mail\MyTestMail($details));

    return redirect()->back();
})->name('send11');
