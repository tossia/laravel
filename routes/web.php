<?php

//use App\Models\User;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

//use XMLDiff\File;

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

//To register in logs
    //   \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql, $query->bindings);
//    });

    return view('posts', [
'posts' => Post::latest('created_at')->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {//Post::where('slug', $post)->first()
    return view('post', [
'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
'posts' => $category->posts
    ]);
});

Route::get('authors/{author}', function (Category $author) {
    return view('posts', [
'posts' => $author->posts
    ]);
});
