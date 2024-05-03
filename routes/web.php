<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/apropos', [PageController::class, 'about'])->name('apropos');
Route::get('/curriculums', [PageController::class, 'curriculum'])->name('curriculum');
Route::get('/galerie', [PageController::class, 'galerie'])->name('galerie');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/show/{post}', [PageController::class, 'showBlog'])->name('lire-blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('loginHandle');
Route::middleware(['auth'])->group(function () {
    Route::get('/cdej0503/nouveauPost', [PostController::class, 'create'])->name('createPost');
    Route::post('/cdej0503/nouveauPost', [PostController::class, 'store'])->name('store');
    Route::get('/cdej0503/nosPosts', [PostController::class, 'index'])->name('posts');
    Route::get('/cdej0503/post/{id}', [PostController::class, 'show'])->name('post');
    Route::get('/cdej0503/edit/post/{post}', [PostController::class, 'edit'])->name('edit');
    Route::put('/cdej0503/update/post/{post}', [PostController::class, 'update'])->name('update');
    Route::get('/cdej0503/delete/post/{post}', [PostController::class, 'destroy'])->name('delete');
    Route::get('/cdej0503/delete/photo/{photo}', [PhotoController::class, 'destroy'])->name('deletePhoto');
    Route::get('/cdej0503/photos', [PhotoController::class, 'index'])->name('nosPhotos');
    Route::get('/cdej0503/upload/photo', [PhotoController::class, 'create'])->name('televerser');
    Route::post('/cdej0503/upload/photo', [PhotoController::class, 'store'])->name('storePhotos');
    Route::post('/cdej0503/create/categorie', [CategorieController::class, 'store'])->name('storeCategorie');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
