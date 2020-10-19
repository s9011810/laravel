<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class LoginController extends Controller
{
    public function show(){
        return View('login/login_info');
    }
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3',
        ]);
        $user_data = array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        );
        if(Auth::attempt($user_data)){
            return redirect('success_login');
        }else{
            return back()->with('error','Wrong Login Detail');
    }
    }
    public function show_logout(){

    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function Success_Login(){
        return View('index/movie_info');
    }
}
