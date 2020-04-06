<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/layout', function () {
    return view('layout');
});


Route::get('/welcomepage', function () {
    return view('welcomepage');
});

Route::get('/welcomepage/login','welcome@login');
Route::get('/welcomepage/register','welcome@register');




Route::get('/teacher/quiz/update','quiz@updatequiz');

Route::get('/teacher/quiz/edit', function () {
    return view('teacher_editquiz');
});

Route::get('/teacher/quiz/quesform/{quizname}', function () {
    return view('teacher_quesform');
});

Route::get('/teacher/quiz/update/{tablename}','quiz@editquizques');
Route::get('/teacher/quiz/showquiz','quiz@showquiz');
Route::get('/teacher/quiz/update/{quiztablename}/{quesid}','quiz@editquizques2');
Route::get('/teacher/quiz/update/{quiztablename}/{quesid}/savechanges','quiz@savechanges');


// Delete Section

Route::get('/teacher/quiz/delete/{tablename}','quiz@deletefinal');
Route::get('/teacher/quiz/delete','quiz@deletequiz');

// Create Section

Route::view('/teacher/quiz/quizname','teacher_quizname');
Route::get('/teacher/quiz/quizname/quizcreated','quiz@quizcreated');
Route::get('/teacher/quiz/quizname/{quizname}/insertques','quiz@insertques');

// Generate Quiz

Route::get('/teacher/quiz/generatequiz','quiz@generatequiz');
Route::get('/teacher/quiz/generatequiz/generatequiz2','quiz@generatequiz2');



// ==================================== Student =================================================


Route::get('/student/quiz/showquiz','studentquiz@showquiz');
Route::get('/student/quiz/attemptquiz/{quizname}','studentquiz@attemptquiz');
Route::get('/teacher/logout','quiz@signout');

Route::view('/student/quiz/attemptquiz/{quizname}/showques','student_activequiz');
Route::get('/student/signout','studentquiz@signout');
Route::get('/student/quiz/dashbord','studentquiz@dashbord');
Route::get('/student/loggedout','studentquiz@loggedout');
Route::get('/student/topper','studentquiz@topper');



