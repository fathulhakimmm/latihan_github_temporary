<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
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

Route::get('/', 'ArticleController@index');
Route::post('/store', 'ArticleController@store');
Route::get('/user','ArticleController@user');
Route::get('/search','ArticleController@search');
Route::get('/show/{id}','ArticleController@show');
Route::get('/delete/{id}', 'ArticleController@destroy');
Route::post('/update', 'ArticleController@update');