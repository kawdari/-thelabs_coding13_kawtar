<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestiController;




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
Route::get('/', [HomePController::class, 'index']);
/* Route::get('/', [HomePController::class, 'index2']); */

//SERVICE
Route::get('/services', [ServiceController::class, 'index']);

//BLOGG
Route::get('/blog', [BlogController::class, 'index']);

//BLOGPOST
Route::get('/blog-post', [BlogPostController::class, 'index']);

//CONTACT
Route::get('/contact', [ContactController::class, 'index']);

//AdminLte
//nav
Route::get('/navbar', [NavController::class, 'index']);
Route::get('/edit-navbar/{id}', [NavController::class, 'edit']);
Route::post('/update-navbar/{id}', [NavController::class, 'update']);
//logo
Route::get('/logo', [LogoController::class, 'index']);
Route::get('/edit-logo/{id}', [LogoController::class, 'edit']);
Route::post('/update-logo/{id}', [LogoController::class, 'update']);
//caroussel
//image
Route::get('/carousselImage', [CarousselController::class, 'index']);
Route::get('/create-carousselImage', [CarousselController::class, 'create']);
Route::post('/addCarousselImage', [CarousselController::class, 'store']);
Route::get('/edit-carouselimg/{id}', [CarousselController::class, 'edit']);
Route::post('/update-carousselImage/{id}', [CarousselController::class, 'update']);
Route::post('/delete-carousseImage/{id}', [CarousselController::class, 'destroy']);
//texte
Route::get('/carousselTexte', [CarousselController::class, 'indexText']);
Route::get('/editCarousselTexte/{id}', [CarousselController::class, 'editTexte']);
Route::post('/updateCarousselTexte/{id}', [CarousselController::class, 'updateTexte']);
//presentation
Route::get('/presentation',[PresentationController::class,'index']);
Route::get('/editPresentation/{id}', [PresentationController::class, 'edit']);
Route::post('/updatePresentation/{id}', [PresentationController::class, 'update']);
//vid
Route::get('/video',[VideoController::class,'index']);
Route::get('/editVideo/{id}', [VideoController::class, 'edit']);
Route::post('/updateVideo/{id}', [VideoController::class, 'update']); 
//Team
Route::get('/team',[TeamController::class,'index']);
Route::get('/editTeam/{id}', [TeamController::class, 'edit']);
Route::get('/createTeam',[TeamController::class,'create']);
Route::post('/addTeam',[TeamController::class,'store']);
Route::post('/updateTeam/{id}', [TeamController::class, 'update']);
Route::post('/deleteTeam/{id}', [TeamController::class, 'destroy']);
//title
Route::get('/editTitlee/{id}', [TeamController::class, 'editTitle']);
Route::post('/updateTitle/{id}', [TeamController::class, 'updateTitle']);
//testimonials
Route::get('/testimonials',[TestiController::class,'index']);
Route::get('/editTestimonial/{id}', [TestiController::class, 'edit']);
Route::get('/createTestimonial',[TestiController::class,'create']);
Route::post('/addTestimonial',[TestiController::class,'store']);
Route::post('/updateTestimonial/{id}', [TestiController::class, 'update']);
Route::post('/deleteTestimonial/{id}', [TestiController::class, 'destroy']);



//IDK

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
