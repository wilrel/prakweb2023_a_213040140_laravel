<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Wildan Nasrulloh R",
        "email" => "wildannasrulloh321@gmail.com",
        "image" => "wildan.jpeg"
    ]);
});




Route::get('/posts', [PostController::class, 'index']);





//Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);

