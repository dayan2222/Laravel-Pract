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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // $article = App\Models\Article::latest()->get;
    // return $article;

    return view('about',['articles'=> App\Models\Article::take(2)->latest()->get()]);
});

// Route::get('/articles/{article}','ArticlesController@show');
//Route::get('/articles/{article}','ArtController@show');
Route::get('/articles','\App\Http\Controllers\ArticleController@index')->name('articles.index');
Route::post('/articles','App\Http\Controllers\ArticleController@store');
Route::get('/articles/create','\App\Http\Controllers\ArticleController@create');
Route::get('/articles/{article}','\App\Http\Controllers\ArticleController@show')->name('articles.show');
Route::get('/articles/{article}/edit','\App\Http\Controllers\ArticleController@edit');
Route::put('/articles/{article}','\App\Http\Controllers\ArticleController@update');


