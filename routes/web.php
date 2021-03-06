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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','Frontend\IndexController@Index');
Route::get('introduce','Frontend\IntroduceController@Introduce');
Route::get('download','Frontend\DownloadController@Donwload');
Route::get('vs','Frontend\VsController@Vs');
Route::get('purchase','Frontend\GuideController@BussGuide');
Route::get('guide','Frontend\GuideController@Guide');
Route::get('contact','Frontend\ContactController@Contact');

