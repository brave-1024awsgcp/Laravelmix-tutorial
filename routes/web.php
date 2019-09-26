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
Route::get('/mypage', 'mypageController@index');
Route::get('/website', 'websiteController@index');
Route::get('/gitquita', 'gitquitaController@index');
Route::get('/HOME', 'HOMEController@index');
Route::get('/SIER', 'SIERController@index');
Route::get('/gengo', 'gengoController@index');
Route::get('/SEPG', 'SEPGController@index');
Route::get('/WEB', 'WEBController@index');
Route::get('/gengo2', 'gengo2Controller@index');
Route::get('/FrameWork', 'FrameWorkController@index');
Route::get('/Data', 'DataController@index');
Route::get('/Info', 'InfoController@index');
Route::get('/Info2', 'Info2Controller@index');
Route::get('/Database', 'DatabaseController@index');
Route::get('/serverservice', 'serverserviceController@index');
Route::get('/frontend', 'FrontendController@index');
Route::get('/backend', 'BackendController@index');
Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostsController@create');
Route::get('/', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::delete('/posts/{post}', 'PostsController@destroy');
