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

Route::get('/', 'ViewsController@home');
Route::get('/live','ViewsController@live')->name('live');
Route::group(['prefix'=>'admin','middleware' => 'auth'],function(){
	Route::get('/','ViewsController@admin')->name('admin');

	Route::post('/addpw', 'WinnersController@newPW')->name('new.pw');
	Route::put('/addpw/{id}', 'WinnersController@updatePW')->name('update.pw');

	Route::post('/addevent','WinnersController@addEvent')->name('add.event');
	Route::get('/event/{id}/edit','ViewsController@editEvent')->name('edit.event');
	Route::put('/event/{id}/update','WinnersController@updateEvent')->name('update.event');
	Route::delete('/event/{id}/delete','WinnersController@removeEvent')->name('remove.event');

	Route::post('/addservice','WinnersController@addService')->name('add.service');
	Route::get('/service/{id}/edit','ViewsController@editService')->name('edit.service');
	Route::put('/service/{id}/update','WinnersController@updateService')->name('update.service');
	Route::delete('/service/{id}/delete','WinnersController@removeService')->name('remove.service');

	Route::post('/addStream','StreamController@addStream')->name('add.stream');
	Route::delete('/stream/{id}/delete','StreamController@removeStream')->name('remove.stream');
	
	Route::post('/pushNotification','WinnersController@sendPushNotification')->name('push.notification');
	Route::put('changepassword','WinnersController@changePassword')->name('change.password');
	


});

//Route::get('/notify','PushNotification@notify');
Auth::routes();
Route::get('/logout', function(){
    return redirect()->back();
});