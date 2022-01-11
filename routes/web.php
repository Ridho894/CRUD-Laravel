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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Post 1",
            "author" => "Ridho",
            "body" => "Hello World"
        ],
        [
            "title" => "Post 2",
            "author" => "Ridho",
            "body" => "Hello World"
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});
