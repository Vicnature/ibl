<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/about',function(){
    // this means load the about template in the pages folder.
    return view('pages.about');
});

Route::get('/users/{name}/{id}',function($name,$id){
    return 'This is is user '.$name .' with an id of '. $id;
});

// because there is no longer automatic namespace prefixing
// we use the full path
Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/about','App\Http\Controllers\PagesController@about');
Route::get('/services','App\Http\Controllers\PagesController@services');
