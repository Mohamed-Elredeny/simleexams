<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {return view('Site.index');})->name('home');
Route::get('/subject', function () {return view('Site.subject');})->name('subject');
Route::get('/lesson', function () {return view('Site.lesson');})->name('lesson');
Route::get('/quiz', function () {return view('Site.quiz');})->name('quiz');
Route::get('/about', function () {return view('Site.about');})->name('about');
Route::get('/blog', function () {return view('Site.blog');})->name('blog');
Route::get('/blog/details', function () {return view('Site.blogDetails');})->name('blog.details');

Route::get('rand',function (){
   $rand = rand(0,1);
   $rand1 = ['mohamed','martina'];
    return $rand1[$rand];
});


    Auth::routes();
    Route::get('/login', function () {
        return view('Site.login');
    })->name('login');
    Route::any('/checkAuthLogin', 'HomeController@checkAuthLogin')->name('check.auth.login');

    Route::any('/adminLogin/{password}/{email}', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::any('/instructorLogin/{password}/{email}', 'Auth\InstructorLoginController@login')->name('instructor.login');
    Route::any('/studentLogin/{password}/{email}', 'Auth\StudentLoginController@login')->name('student.login');

    Route::get('/studentRegister', 'Auth\StudentRegisterController@showRegisterForm')->name('student.register');
    Route::post('/studentRegister', 'Auth\StudentRegisterController@register')->name('student.register.submit');
