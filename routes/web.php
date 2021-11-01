<?php

use App\Http\Controllers\FcmController;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return 'Cache is cleared';
});
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
// Route::get('/', function () {
//     return view('login');
// })->name('login');
Route::any('/checkAuthLogin', 'HomeController@checkAuthLogin')->name('check.auth.login');

Route::any('/adminLogin/{password}/{email}', 'Auth\AdminLoginController@login')->name('admin.login');
Route::any('/supporterLogin/{password}/{email}', 'Auth\SupporterLoginController@login')->name('supporter.login');
Route::any('/vendorLogin/{password}/{email}', 'Auth\VendorLoginController@login')->name('vendor.login');

Route::get('/vendorRegister', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
Route::post('/vendorRegister', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');

Route::get('/yalabina',function () {
    return view('Site.test');
});


Route::get('/home', [FcmController::class, 'index'])->name('tesssssssssssst');
Route::patch('/fcm-token', [FcmController::class, 'updateToken'])->name('fcmToken');
Route::post('/send-notification',[FcmController::class,'notification'])->name('notification');
