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

Route::get('/', 'WinnersController@home')->name('home');
Route::get('/live/{slug?}','WinnersController@live')->name('live');
Route::get('/pastors','WinnersController@pastors')->name('pastors');
Route::get('/events','WinnersController@events')->name('events');
Route::get('/pastors-desk','WinnersController@posts')->name('posts');
Route::get('/pastors-desk/{slug}','WinnersController@singlePost')->name('single.post');
Route::get('/announcements','WinnersController@announcements')->name('announcements');
Route::get('/youths','WinnersController@youths')->name('youths');
Route::get('/units','WinnersController@units')->name('units');
Route::get('/units/{unit}','WinnersController@unit')->name('unit');
Route::get('/pof','WinnersController@pof')->name('pof');
Route::get('/pastors','WinnersController@pastors')->name('pastors');
Route::get('/gallery','WinnersController@gallery')->name('gallery');
Route::get('/testimonies','WinnersController@testimonies')->name('testimonies');
Route::post('/testimonies','TestimonyController@store')->name('submit.testimony');
Route::get('/wsf','WinnersController@wsf')->name('wsf');

Route::group(['prefix'=>'admin','middleware' => 'auth'],function(){
	Route::get('/','WinnersController@admin')->name('admin');

	Route::post('/theme/add', 'ThemeController@create')->name('new.theme');
	Route::put('/theme/{id}/update', 'ThemeController@update')->name('update.theme');

	Route::post('/event/add','EventsController@store')->name('add.event');
	Route::get('/event/{id}/edit','EventsController@edit')->name('edit.event');
	Route::put('/event/{id}/update','EventsController@update')->name('update.event');
	Route::delete('/event/{id}/discard','EventsController@discard')->name('discard.event');
	
	Route::post('/unit/add','UnitController@store')->name('add.unit');
	Route::get('/unit/{id}/edit','UnitController@edit')->name('edit.unit');
	Route::put('/unit/{id}/update','UnitController@update')->name('update.unit');
	Route::delete('/unit/{id}/discard','UnitController@discard')->name('discard.unit');

	Route::post('/post/add','PostController@store')->name('add.post');
	Route::get('/post/{id}/edit','PostController@edit')->name('edit.post');
	Route::put('/post/{id}/update','PostController@update')->name('update.post');
	Route::delete('/post/{id}/discard','PostController@discard')->name('discard.post');

	
	Route::post('/service/add','ServicesController@store')->name('add.service');
	Route::get('/service/{id}/edit','ServicesController@edit')->name('edit.service');
	Route::put('/service/{id}/update','ServicesController@update')->name('update.service');
	Route::delete('/service/{id}/discard','ServicesController@discard')->name('discard.service');

	Route::post('/pastor/add','PastorsController@store')->name('add.pastor');
	Route::get('/pastor/{id}/edit','PastorsController@edit')->name('edit.pastor');
	Route::put('/pastor/{id}/update','PastorsController@update')->name('update.pastor');
	Route::delete('/pastor/{id}/discard','PastorsController@discard')->name('discard.pastor');
	
	Route::post('/stream/add','StreamsController@store')->name('add.stream');
	Route::get('/stream/{id}/edit','StreamsController@edit')->name('edit.stream');
	Route::put('/stream/{id}/update','StreamsController@update')->name('update.stream');
	Route::delete('/stream/{id}/delete','StreamsController@discard')->name('discard.stream');
	
	Route::post('/gallery/add','GalleryController@store')->name('add.gallery');
	Route::put('/gallery/{id}/update','GalleryController@update')->name('update.photo');
	Route::delete('/gallery/{id}/delete','GalleryController@delete')->name('delete.photo');

	Route::post('/notify','NotificationsController@send')->name('push.notification');
	
	Route::post('/announcement/new','AnnouncementController@announce')->name('add.announcement');
	Route::delete('/announcement/{id}/discard','AnnouncementController@discard')->name('discard.announcement');
	
	Route::put('/changepassword','WinnersController@changePassword')->name('change.password');
	Route::put('/updatecontacts','WinnersController@updateContacts')->name('update.contacts');
	Route::put('/updateprefs','WinnersController@updatePreferences')->name('update.preferences');
	
	Route::put('/testimonies/action','TestimonyController@action')->name('testimony.action');
	
	Route::post('/wsf','WinnersController@uploadWSF')->name('upload.wsf');

});

Auth::routes();
