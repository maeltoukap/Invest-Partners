<?php

namespace App\Http\Controllers\spashScrenn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class splashScreenController extends Controller
{
    public function home(){
        return view('splashScreen.firstSplashScreen');
    }
}
