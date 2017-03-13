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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/competency', function () {
    return view('competency');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/userCompetencies', function () {
    return view('userCompetencies/index', [
        'name' => Auth::user()->name,
        'competencies' => DB::table('competencies')->pluck('name', 'abbreviation'),
    ]);
});

Route::auth();

Route::get('/dashboard', 'HomeController@index');
Route::get('/demand', 'DemandController@index');

Route::resource('competency', 'CompetencyController');
Route::resource('competencypick', 'CompetencypickController');
Route::resource('project', 'ProjectController');
Route::resource('user', 'UserController');
