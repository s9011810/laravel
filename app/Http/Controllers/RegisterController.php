<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function show(){
        return View('register/register_info');
    }
//    public function store(){
//        $this->validate(request(), [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'phone' => ['required', 'numeric', 'min:11'],
//            'address' => ['required', 'string', 'max:255'],
//        ]);
//
//        $user = User::create(request(['name', 'email', 'password','phone','address']));
//
//        auth()->login($user);
//
//        return redirect()->to('/');
//    }
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'phone' => ['required', 'numeric', 'min:11'],
//            'address' => ['required', 'string', 'max:255'],
//        ]);
//    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone'=> $data['phone'],
            'address'=> $data['address'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
