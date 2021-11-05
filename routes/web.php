<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FcmController;
use Illuminate\Support\Facades\Artisan;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return 'Cache is cleared';
    });

    Route::get('/', 'Site\HomeController@index')->name('home');
    Route::get('/subject/{id}', 'Site\SubjectController@index')->name('subject');
    Route::get('/allSubject', 'Site\SubjectController@allSubjects')->name('allSubjects');
    Route::get('/instructors', 'Site\SubjectController@allInstructors')->name('allInstructors');
    Route::get('/blogs', 'Site\SubjectController@allBlogs')->name('blogs');
    Route::get('/blog/details/{id}', 'Site\SubjectController@blog')->name('blog.details');
    Route::get('/quiz/{id}', 'Site\QuizController@index')->name('exam');

    Route::any('/exam/star/{id}', 'Site\QuizController@examStore')->name('student.exam.store');

    Route::get('/about', function () {return view('Site.about');})->name('about');
    Route::get('/contact', function () {return view('Site.contact');})->name('contact');
    Route::post('/user/contact','Site\HomeController@contact')->name('site.contact');


    Route::get('/about', function () {return view('Site.aboutrtl');})->name('about');
    Route::get('/profile', function () {return view('Site.profile');})->name('profile');

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

    Route::get('/vendorRegister', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
    Route::post('/vendorRegister', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');

    Route::get('/studentRegister', 'Auth\StudentRegisterController@showRegisterForm')->name('student.register');
    Route::post('/studentRegister', 'Auth\StudentRegisterController@register')->name('student.register.submit');

});
