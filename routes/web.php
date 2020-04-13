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

// SiteMap
Route::get('generated/sitemap', 'GeneratedController@siteMap');
Route::get('generated/sitemap.xml', 'GeneratedController@siteMap');

// RSS Feed
Route::get('generated/feed', 'GeneratedController@feed');
Route::get('generated/feed.xml', 'GeneratedController@feed');
