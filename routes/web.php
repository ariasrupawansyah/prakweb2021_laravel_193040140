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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aria Rupawansyah",
        "email" => "193040140.aria@mail.unpas.ac.id",
        "image" => "aria.jpg"
    ]);
});

// halaman awal blog
Route::get('/blog', [PostController::class, 'index']);
// halaman single post  
Route::get('posts/{post:slug}', [PostController::class, 'show']); 

// Route::get('/about', function () {
//     return view('welcome');
// });
