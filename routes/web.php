<?php

use App\Http\Controllers\frontend\PagesController;
use App\Http\Controllers\PostjobController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//   admin
// Route::prefix('admin')->middleware('auth')->group(function)


Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/blog_single',[PagesController::class,'blog_single']);
Route::get('/blog',[PagesController::class,'blog']);
Route::get('/contact',[PagesController::class,'contact']);
Route::get('/faq',[PagesController::class,'faq']);
Route::get('/gallery',[PagesController::class,'gallery']);
Route::get('/job_single',[PagesController::class,'Job_single']);
Route::get('/portfolio_single',[PagesController::class,'portfolio_single']);
Route::get('/portfolio',[PagesController::class,'portfolio']);
Route::get('/service_single',[PagesController::class,'service_single']);
Route::get('/services',[PagesController::class,'services']);
Route::get('/testimonials',[PagesController::class,'testimonials']);


// Route::get('/postjob',[PagesController::class,'post']);
// Route::post('/addimage', [PagesController::class, 'addimage']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// //    Routing for post job

Route::get('/postjob',[PostjobController::class,'post']);
Route::post('/addimage', [PostjobController::class, 'addimage']);
Route::get('/job_listing',[PostjobController::class,'job_listing']);


