<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/all-comments', function () {
    return view('all-comments');
});

Route::get('/all-reviews', function () {
    return view('all-reviews');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/c-e-categories', function () {
    return view('c-e-categories');
});

Route::get('/c-e-post', function () {
    return view('c-e-post');
});

Route::get('/c-e-product', function () {
    return view('c-e-product');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/products', function () {
    return view('products');
});
