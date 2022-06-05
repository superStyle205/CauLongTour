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

Route::get('/summary', function () {
    return view('summary');
});

Route::resources([
	'athletes' => 'AthleteController',
    'tournaments' => 'TournamentController',
    'forms' => 'FormController'
]);

Route::get('matchs/{tournament_id}', 'MatchController@index');