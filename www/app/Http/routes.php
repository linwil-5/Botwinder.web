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

Route::get('/', 'HomeController@index');
Route::get('/docs', 'FeaturesController@index');
Route::get('/features', 'FeaturesController@index');
Route::get('/updates', 'ChangelogController@index');
Route::get('/contribute', 'ContributeController@index');
Route::get('/help', 'HelpController@index');
Route::get('/team', 'TeamController@index');
Route::get('/invite', 'InviteController@index');

Route::get('/callback', 'TestController@index');
Route::get('/config', 'ConfigController@index');
Route::get('/meetings/{channelID}/{meetingName}', 'MeetingsController@index');
Route::group(['middleware' => ['web']], function () {
	Route::post('/config/save', 'ConfigController@saveConfig');
	Route::post('/config/edit', 'ConfigController@displayConfig');
	Route::get('/config/edit', 'ConfigController@displayConfig');
	Route::get('/config/logout', 'ConfigController@logout');
    Route::any('/meetings/{channelID}/{meetingName}/meeting', 'MeetingsController@getMeeting');
});
