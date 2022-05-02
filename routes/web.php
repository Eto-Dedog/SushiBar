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

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index')->name('index.index');

Route::get('/about', 'AboutController@index')->name('about.index');

Route::post('/mailing', 'MailingController@store')->name('mailing.store');
Route::get('/mailer', 'MailingController@index')->name('mailing.index');
Route::DELETE('/mailer/{id}', 'MailingController@destroy')->name('mailing.destroy');
Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');
Route::get('/feedback', 'FeedbackController@index')->name('feedback.index');
Route::DELETE('/feedback/{id}', 'FeedbackController@destroy')->name('feedback.destroy');

Route::get('/account', 'AccountController@index')->name('account.index');


Route::get('/all-reviews', 'AllCommentsController@index')->name('allComments.index');
Route::get('/all-comments', 'AllReviewsController@index')->name('allReviews.index');

Route::get('/c-e-categories', 'ReviewsController@create')->name('reviews.create');
Route::post('/post', 'ReviewsController@store')->name('reviews.store');
Route::DELETE('/blog/post/{id}', 'ReviewsController@destroy')->name('reviews.destroy');

Route::get('/blog', 'PostsController@index')->name('posts.index');
Route::get('/c-post', 'PostsController@create')->name('posts.create');
Route::post('/blog', 'PostsController@store')->name('posts.store');
Route::get('/blog/post/{id}', 'PostsController@show')->name('posts.show');
Route::get('/blog/post/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::PATCH('/blog/post/{id}', 'PostsController@update')->name('posts.update');
Route::DELETE('/blog/post/del/{id}', 'PostsController@destroy')->name('posts.destroy');

Route::get('/contacts', 'ContactsController@index')->name('contacts.index');

Route::get('/information', 'InformationController@index')->name('info.index');

Route::get('/menu', 'ProductsController@index')->name('product.index');

Route::get('/post', 'PostController@index')->name('post.index');


Route::get('/product', 'CategoriesItemController@index')->name('categoriesItem.index');
Route::get('/c-product'   , 'CategoriesItemController@create')->name('categoriesItem.create');
Route::post('/c-product', 'CategoriesItemController@store')->name('categoriesItem.store');
Route::get('/products/product/{id}', 'CategoriesItemController@show')->name('categoriesItem.show');
Route::get('/products/product/edit/{id}', 'CategoriesItemController@edit')->name('categoriesItem.edit');
Route::PATCH('/products/product/{id}', 'CategoriesItemController@update')->name('categoriesItem.update');
Route::DELETE('/products/product/del/{id}', 'CategoriesItemController@destroy')->name('categoriesItem.destroy');

Route::get('/products', 'CategoriesController@index')->name('categories.index');
Route::get('/c-categories', 'CategoriesController@create')->name('categories.create');
Route::post('/menu', 'CategoriesController@store')->name('categories.store');
Route::get('/products/categories/edit/{id}', 'CategoriesController@edit')->name('categories.edit');
Route::PATCH('/products/{id}', 'CategoriesController@update')->name('categories.update');
Route::DELETE('/products/categories/edit/del/{id}', 'CategoriesController@destroy')->name('categories.destroy');

Route::post('/product', 'CommentsController@create')->name('comments.create');
Route::post('/product', 'CommentsController@store')->name('comments.store');
Route::DELETE('/products/product/{id}', 'CommentsController@destroy')->name('comments.destroy');


Route::PATCH('/account/{id}', 'UserInfoController@update')->name('users.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
