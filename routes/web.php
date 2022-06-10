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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'TourManagerController@index');

Route::get('/summary', function () {
    return view('summary');
});

Route::resources([
        'athletes' => 'AthleteController',
        'tournaments' => 'TournamentController',
        'forms' => 'FormController',
        'tournament-details' => 'AthleteFormTournamentController'
]);





Route::get('tournament-details/show/{tournament_id}','AthleteFormTournamentController@getTournamentDetails')
         -> name("details");

Route::get('matchs/tour/{tournament_id}/form/{form_id}', 'MatchController@show')
        ->name('showMatchs');

Route::get('matchDetails/edit/{match_id}', 'MatchDetailController@edit')
        ->name('matchDetailsEdit');
Route::get('matchDetails/create/{match_id}', 'MatchDetailController@create')
        ->name('matchDetailsCreate');
Route::post('matchDetails/update/{match_id}', 'MatchDetailController@update')
        ->name('matchDetailsUpdate');

Route::get('tourDetails/show/{tournament_id}', 'TournamentDetailController@index')
        ->name('tourDetails');
Route::post('tourDetails/update/tour/{tournament_id}', 'TournamentDetailController@addForm')
        ->name('addFormToTour');
Route::post('tourDetails/add/tour/{tournament_id}', 'TournamentDetailController@addAthlete')
        ->name('addAthleteToTour');
Route::post('tourDetails/buildMatch/tour/{tournament_id}', 'TournamentDetailController@buildMatch')
        ->name('buildMatchToTour');
