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


Route::get('/','HomeController@index')->name('dashboard');

Route::resource('blogs','BlogController');

Route::resource('instructors','InstructorController');
Route::get('/delete/instructor/{instructor}/{subject}','InstructorController@deleteSubject')->name('instructor.subject.delete');


Route::resource('students','StudentController');
Route::resource('subjects','SubjectController');

Route::resource('sections','SectionController');
Route::get('subject/sections/{id}','SectionController@index')->name('sections.index');


Route::resource('lessons','LessonController');
Route::get('subject/lessons/{id}','LessonController@index')->name('lessons.index');
Route::get('subject/lessons/create/{id}','LessonController@create')->name('lessons.create');


Route::resource('questions','QuestionController');
Route::get('subject/questions/{id}','QuestionController@index')->name('questions.index');
Route::get('subject/questions/create/{id}','QuestionController@create')->name('questions.create');
Route::get('subject/questions/delete/{id}/{model_type}/{model_id}','QuestionController@deleteImage')->name('question.deleteImage');

Route::resource('exams','ExamController');

Route::resource('examQuestions','ExamQuestionsController');
Route::get('exam/questions/{id}','ExamQuestionsController@index')->name('examQuestions.index');
