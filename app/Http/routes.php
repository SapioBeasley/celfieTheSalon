<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'home.index',
	'uses' => 'HomeController@homeIndex'
]);

Route::get('/gallery', [
	'as' => 'gallery.index',
	'uses' => 'GalleryController@galleryIndex'
]);

Route::get('/contact', [
	'as' => 'contact.index',
	'uses' => 'ContactController@contactIndex'
]);

Route::get('/memberships', [
	'as' => 'memberships.index',
	'uses' => 'MembershipsController@membershipsIndex'
]);

Route::get('/menu', [
	'as' => 'menu.index',
	'uses' => 'MenuController@menuIndex'
]);

