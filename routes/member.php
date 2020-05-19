<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['prefix' => 'member'],function ()
{
    Route::get('index', 'MemberController@Index');
    Route::get('infoedit', 'MemberController@memberInfoEditor');
    Route::put('infoedit/{id}', 'MemberController@postMemberInfoEditor')->name('userinfo_edit');
    Route::get('repassword', 'MemberController@rePassword');
    Route::put('repassword', 'MemberController@postRePassword')->name('repassword');
    Route::get('expensesrecord', 'MemberController@expensesRecord')->name('expensesrecord');
    Route::get('charhistory', 'MemberController@chaHistory')->name('charhistory');

});