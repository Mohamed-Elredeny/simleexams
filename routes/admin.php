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

Route::resource('admins','AdminController');
Route::resource('subAdmins','AdminController');
Route::resource('packages','AdminController');
Route::resource('transactions','AdminController');
Route::resource('subjects','SubjectController');
Route::resource('lessons','AdminController');
Route::resource('questions','AdminController');
Route::resource('exams','AdminController');
