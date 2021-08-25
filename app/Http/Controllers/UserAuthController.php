<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserAuthController extends Controller
{
    function login(){
        return view('authenficate.login');
    }
    function register(){
        return view('authenficate.login');
    }
    function create(Request $request){
//        return $request->input();
        $request -> validate([
            'name' => "required",
            'email' => "required|email|unique:users",
            'password' => "required|min:6|max:18",
            'type' => "required"
        ]);

        //if form validated successfuly, then craeate new user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->gender = $request->gender;
        $query = $user -> save();

        if ($query){
            return back() -> with('success', 'You have been successfuly registered');
        }else{
            return back() -> with('fail', 'Something went wrong');
        }
    }
    function check(Request $request){
//        return $request -> input();
        $request -> validate([
            'email' => "required|email",
            'password' => "required|min:6|max:18",
        ]);
        //if form validated successfuly, then craeate new user
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request-> session()->put('LoggedUser', $user->id);
                return redirect('profile');
            }else{
                return back() -> with('fail', 'invalid password');
            }
        }else{
            return back() -> with('fail', 'No account found for this email');
        }
    }
    function profile(){
        if (session()->has('LoggedUser')){
            $user = User::where('id','=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfos' => $user
            ];
        }
         return view('splashScreen.secondSplashScreen', $data);
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}
