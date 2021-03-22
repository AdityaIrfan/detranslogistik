<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\YoutubeController;
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
//     return view('index');
// });

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage');
Route::get('/berita', [BeritaController::class, 'index'])->middleware('guest')->name('artikel');

// Dashboard
Route::get('/admin', [adminController::class, 'getLogin']);
Route::post('/login', [adminController::class, 'postLogin'])->name('postlogin');
Route::get('/dashboard', [adminController::class, 'getDashboard'])->middleware('auth')->name('getDashboard');

// Youtube
Route::get('/youtube', [YoutubeController::class, 'index'])->middleware('auth')->name('getYoutube');
Route::post('/youtube/create', [YoutubeController::class, 'create'])->middleware('auth')->name('postYoutube');
Route::delete('/youtube/delete/{id}', [YoutubeController::class, 'delete'])->middleware('auth')->name('youtube.delete');
Route::post('/youtube/update/{id}', [YoutubeController::class, 'update'])->middleware('auth')->name('youtube.update');
Route::get('/youtube/{id}', [YoutubeController::class, 'getUpdate'])->middleware('auth')->name('youtube.Getupdate');

// Image
Route::get('/image', [ImageController::class, 'index'])->middleware('auth')->name('getImage');
// Route::get('/image/update/{$id}', [ImageController::class, 'getUpdate'])->name('image.getUpdate');
Route::post('/image', [ImageController::class, 'create'])->middleware('auth')->name('image.create');
// Route::post('/youtube/update/{$id}', [ImageController::class, 'update'])->name('image.update');
Route::delete('/image/delete/{id}', [ImageController::class, 'destroy'])->middleware('auth')->name('deleteImage');

// Artikel
Route::get('/article', [ArticleController::class, 'index'])->middleware('auth')->name('article.get');
Route::post('/article', [ArticleController::class, 'store'])->middleware('auth')->name('article.create');
Route::get('/article/update/{id}', [ArticleController::class, 'edit'])->middleware('auth')->name('article.getUpdatae');
Route::post('/article/update/{id}', [ArticleController::class, 'update'])->middleware('auth')->name('article.update');
Route::delete('/article/delete/{id}', [ArticleController::class, 'delete'])->middleware('auth')->name('article.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
