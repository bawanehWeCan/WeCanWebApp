<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StorysController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::prefix('admin')->middleware('guest')->group(function () {

    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'getLogin'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'postLogin'])->name('admin.auth');
});

#dashboard
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');

    #users
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
    Route::get('/users/create', [App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::post('/users/store', [App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::delete('/user/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.user.destroy');

    #services
    Route::get('/services', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin.services');
    Route::get('/services/create', [App\Http\Controllers\Admin\ServiceController::class, 'create']);
    Route::post('/services/store', [App\Http\Controllers\Admin\ServiceController::class, 'store']);
    Route::delete('/service/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'destroy']);

   #projects
   Route::get('/projects', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('admin.projects');
   Route::get('/projects/create', [App\Http\Controllers\Admin\ProjectController::class, 'create']);
   Route::post('/projects/store', [App\Http\Controllers\Admin\ProjectController::class, 'store']);
   Route::delete('/project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'destroy'])->name('admin.project.destroy');

   #faqs
   Route::get('/faqs', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin.faqs');
   Route::get('/faqs/create', [App\Http\Controllers\Admin\FaqController::class, 'create']);
   Route::post('/faqs/store', [App\Http\Controllers\Admin\FaqController::class, 'store']);
   Route::delete('/faq/{id}', [App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin.faq.destroy');

   #infos
   Route::get('/infos', [App\Http\Controllers\Admin\InfoController::class, 'index'])->name('admin.infos');
   Route::get('/infos/create', [App\Http\Controllers\Admin\InfoController::class, 'create']);
   Route::post('/infos/store', [App\Http\Controllers\Admin\InfoController::class, 'store']);
   Route::delete('/info/{id}', [App\Http\Controllers\Admin\InfoController::class, 'destroy'])->name('admin.info.destroy');

   #members
   Route::get('/members', [App\Http\Controllers\Admin\TeamMemberController::class, 'index'])->name('admin.members');
   Route::get('/members/create', [App\Http\Controllers\Admin\TeamMemberController::class, 'create']);
   Route::post('/members/store', [App\Http\Controllers\Admin\TeamMemberController::class, 'store']);
   Route::delete('/member/{id}', [App\Http\Controllers\Admin\TeamMemberController::class, 'destroy'])->name('admin.member.destroy');

   #prices
   Route::get('/prices', [App\Http\Controllers\Admin\PriceController::class, 'index'])->name('admin.prices');
   Route::get('/prices/create', [App\Http\Controllers\Admin\PriceController::class, 'create']);
   Route::post('/prices/store', [App\Http\Controllers\Admin\PriceController::class, 'store']);
   Route::delete('/price/{id}', [App\Http\Controllers\Admin\PriceController::class, 'destroy'])->name('admin.price.destroy');

    #prices
   Route::get('/stories', [App\Http\Controllers\Admin\StoryController::class, 'index'])->name('admin.stories');
   Route::get('/stories/create', [App\Http\Controllers\Admin\StoryController::class, 'create']);
   Route::post('/stories/store', [App\Http\Controllers\Admin\StoryController::class, 'store']);
   Route::delete('/story/{id}', [App\Http\Controllers\Admin\StoryController::class, 'destroy'])->name('admin.story.destroy');

   #brands
   Route::get('/brands', [App\Http\Controllers\Admin\BrandController::class, 'index'])->name('admin.brands');
   Route::get('/brands/create', [App\Http\Controllers\Admin\BrandController::class, 'create']);
   Route::post('/brands/store', [App\Http\Controllers\Admin\BrandController::class, 'store']);
   Route::delete('/brand/{id}', [App\Http\Controllers\Admin\BrandController::class, 'destroy'])->name('admin.brand.destroy');

   #project images
   Route::get('/images', [App\Http\Controllers\Admin\ImageController::class, 'index'])->name('admin.images');
   Route::get('/images/create', [App\Http\Controllers\Admin\ImageController::class, 'create']);
   Route::post('/images/store', [App\Http\Controllers\Admin\ImageController::class, 'store']);
   Route::delete('/image/{id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin.image.destroy');

});




Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/s/{slug}', [App\Http\Controllers\HomeController::class, 'service'])->name('service');

Route::get('/portfolio/{id}', [App\Http\Controllers\HomeController::class, 'project'])->name('project');

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

    Mail::to('info@wecan.jo')->send(new \App\Mail\MyTestMail($details));

    return redirect()->back();
})->name('send11');



