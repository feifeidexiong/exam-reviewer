<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Get questions
Route::get('questions', 'QuestionController@index');

// Get specific question by id
Route::get('questions/{id}', 'QuestionController@show');

// Get all answer by question id
Route::get('questions/{id}/answers', 'QuestionController@show');

// Get correct answer by question id
Route::get('questions/{id}/correct-answer', 'QuestionController@show');

// Post a new Question
Route::post('questions', 'QuestionController@store');

// Update Question
Route::put('questions', 'QuestionController@store');

// Delete Question
Route::delete('questions', 'QuestionController@destroy');




