<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
Use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controller\PagesController;
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

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/ammenities',function(){
//     return view('ammenities');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });


// Route::get('/', function(){
//     return view('home');
// });

Route::get('/contact',
[PagesController::class,'contact']);

Route::get('/',
[PagesController::class,'home']);

Route::get('/about',
[PagesController::class,'about']);

Route::get('/ammenities',
[PagesController::class,'ammenities']);

// Route::resource('booking','BookingController');


// Route::post("contact",[DatabaseController::class,'getData']);
Route::get("store-form",[PostController::class,"store"]);
// Route::get('add-blog-post-form',[PostController::class,'index']);


Route::get("/form",
[PagesController::class,'form']);