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
    return view('welcome');
});
Route::get('trangchu', 'PageController@index');

//Đăng ký tài khoản
Route::get('signup', 'PageController@getSignup');
Route::post('signup', 'PageController@postSignup');

//Đăng Nhập
Route::get('login', 'PageController@getLogin');
Route::post('login', 'PageController@postLogin');

//Đăng xuất
Route::get('log-out',[
	'as'=>'logout',
	'uses'=>'PageController@getLogout'
]);

Route::get('details/{id}', 'PageController@getDetails');

// thông tin cá nhân

Route::get('student/info', 'PageController@getStudentInfo')->middleware('auth');

Route::get('student/updateinfo', 'PageController@getUpdateInfo')->middleware('auth');

Route::post('student/updateinfo', 'PageController@postUpdateInfo')->middleware('auth');

Route::get('changepassword', 'PageController@getChangePassword')->middleware('auth');
Route::post('changepassword', 'PageController@postChangePassword');

//test
Route::get('mid-test/{course_id}', 'TestController@getMidTest')->middleware('auth');
Route::post('/post-mid-test', 'TestController@postMidTest');

Route::get('mid-test-result/{course_id}', 'TestController@getMidTestResult')->name('mid-test-result')->middleware('auth');
