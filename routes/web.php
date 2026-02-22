<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', function (\App\Models\Post $post) {
    return view('post', ['post' => $post]);
})->name('posts.show');
