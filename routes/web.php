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

Route::get('/', function () {return view('Site.index');})->name('home');
Route::get('/subject', function () {return view('Site.subject');})->name('subject');
Route::get('/lesson', function () {return view('Site.lesson');})->name('lesson');
Route::get('/quiz', function () {return view('Site.quiz');})->name('quiz');
Route::get('/about', function () {return view('Site.about');})->name('about');
Route::get('/blog', function () {return view('Site.blog');})->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('rand',function (){
   $rand = rand(0,1);
   $rand1 = ['mohamed','martina'];
    return $rand1[$rand];
});
