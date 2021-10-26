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
    return view('admin.home');
});

Route::resource('instructors','InstructorController');
Route::resource('students','StudentController');
Route::resource('subjects','SubjectController');
Route::resource('lessons','LessonController');
Route::resource('questions','QuestionController');
Route::resource('exams','ExamController');
