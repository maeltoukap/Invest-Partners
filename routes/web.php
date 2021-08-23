<?php

use App\Http\Controllers\spashScrenn\splashScreenController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [splashScreenController::class, 'home'])-> name('firstSplashScreen');

//Route::get('/firstSplashScreen', function(){
//    return view('splashScreen.firstSplashScreen');
//})-> name('firstSplashScreen');


Route::get('/secondSplashScreen', function(){
    return view('splashScreen.secondSplashScreen');
})-> name('secondSplashScreen');

Route::get('/login', function(){
    return view('authenficate.login');
})-> name('login');
