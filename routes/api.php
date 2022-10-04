<?php

use App\Models\Brand;
use App\Models\Image;
use App\Models\Price;
use App\Models\Story;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();

});

Route::post( 'add-project', function( Request $request ){

    $project                = new Project();
    $project->name          = $request->name;
    $project->image         = $request->image;
    $project->content       = $request->content;
    $project->service_id    = $request->service_id;
    $project->save();

    echo 'Done';

} );


Route::post( 'add-service', function( Request $request ){

    $project            = new Service();
    $project->name      = $request->name;
    $project->image     = $request->image;
    $project->price     = $request->price;

    $project->heading1  = $request->heading1;
    $project->content1  = $request->content1;

    $project->heading2  = $request->heading2;
    $project->content2  = $request->content2;

    $project->features  = $request->features;

    $project->save();

    echo 'Done';

} );


Route::post( 'add-story', function( Request $request ){

    $project            = new Story();
    $project->name      = $request->name;
    $project->image     = $request->image;
    $project->content   = $request->content;
    $project->avater    = $request->avater;

    $project->save();

    echo 'Done';

} );


Route::post( 'add-price', function( Request $request ){

    $project                = new Price();
    $project->name          = $request->name;
    $project->image         = $request->image;
    $project->feature1      = $request->feature1;
    $project->feature2      = $request->feature2;
    $project->price         = $request->price;
    $project->save();

    echo 'Done';

} );

Route::post( 'add-brand', function( Request $request ){

    $project                = new Brand();
    $project->name          = $request->name;
    $project->image         = $request->image;
    $project->link          = $request->link;
    $project->save();

    echo 'Done';

} );



Route::post( 'add-image', function( Request $request ){

    $project                = new Image();
    $project->project_id          = $request->project_id;
    $project->image         = $request->image;

    $project->save();

    echo 'Done';

} );
