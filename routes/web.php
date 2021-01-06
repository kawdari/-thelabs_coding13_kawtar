<?php

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


//HOME
Route::get('/', [HomePageController::class, 'index']);

//SERVICE
Route::get('/services', [ServiceController::class, 'index']);

//BLOGG
Route::get('/blog', [BlogController::class, 'index']);

//BLOGPOST
Route::get('/blog-post', [BlogPostController::class, 'index']);

//CONTACT
Route::get('/contact', [ContactController::class, 'index']);

//AdminLte
Route::get('/navbar-logo', [NavbarController::class, 'index']);
Route::post('/update-logo', [NavbarController::class, 'update']);
Route::get('/navbar-links', [NavbarController::class, 'links']);



//IDK

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
