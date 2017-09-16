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

Route::get('/', 'testController@allquestions');
Route::get('/addquestion', 'testController@addquestionform');
Route::post('/addquestion', 'testController@addquestion');
Route::get('/questions', 'testController@allquestions');
Route::get('/question/{id}', 'testController@answerform');
Route::post('/question/{id}', 'testController@answer');
Route::get('/show', 'testController@test');

Auth::routes();

