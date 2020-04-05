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

Route::get('/posts/{slug?}', 'ArticlesController@post');
Route::get('/archive', 'ArticlesController@archive');
Route::get('/tags', 'ArticlesController@tags');
Route::get('/about', 'ArticlesController@about');
Route::get('/{sort?}', 'ArticlesController@index');
Route::feeds();
// SiteMap
Route::get('sitemap', 'GeneratedController@siteMap');
Route::get('sitemap.xml', 'GeneratedController@siteMap');

// RSS Feed
Route::get('feed.xml', 'GeneratedController@feed');
