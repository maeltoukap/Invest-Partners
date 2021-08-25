<?php

use App\Http\Controllers\spashScrenn\splashScreenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [splashScreenController::class, 'home'])-> name('firstSplashScreen');
Route::get('/login', [UserAuthController::class, 'login'])-> name('login')->middleware('AlreadyLoggedIn');
Route::get('/register', [UserAuthController::class, 'register'])-> name('register')->middleware('AlreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])-> name('auth.create');
Route::post('check', [UserAuthController::class, 'check'])-> name('auth.check');
Route::get('profile', [UserAuthController::class, 'profile'])-> name('auth.profile') -> middleware('isLogged');
Route::get('logout', [UserAuthController::class, 'logout'])-> name('auth.logout');
//Route::get('/firstSplashScreen', function(){
//    return view('splashScreen.firstSplashScreen');
//})-> name('firstSplashScreen');


Route::get('/secondSplashScreen', function(){
    return view('splashScreen.secondSplashScreen');
})-> name('secondSplashScreen');

//Route::get('/login', function(){
//    return view('authenficate.login');
//})-> name('login');

Route::get('/home', function(){
    return view('pages.home');
})-> name('home');
