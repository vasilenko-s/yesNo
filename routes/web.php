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

Route::resource('questions','QuestionController');

Route::get('/get-random-question', 'RandomQuestionController@index')->name('random');
Route::post('/get-random-question', 'RandomQuestionController@index')->name('random');

//Route::get('/answer','RandomQuestionController@ajaxAnswer');

