<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'v1'], function () {
	
	Route::get('/', function()
	{
		return  'RestFul Api for Ecommerce using Laravel';
	});

});

Route::get('/', function()
{
	return  'Got to '.Request::url().'/v1 for api version 1';
});