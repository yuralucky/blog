<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\auth\AuthController;
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
    return view('layout');
//    'Hello';
});


Route::get('auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('auth/registration', [AuthController::class, 'registrationForm'])->name('registration.form');
Route::post('auth/login', [AuthController::class, 'handleLogin'])->name('auth.handle-login');
Route::post('auth/registration', [AuthController::class, 'registration'])->name('registration');
Route::get('auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('articles', [ArticleController::class, 'index'])->name('articles');

Route::get('send-mail', function () {
    \Illuminate\Support\Facades\Mail::to('yeo@afsas.com')->send(new \App\Mail\RegistrationMail());
    dd('message sent');
});
