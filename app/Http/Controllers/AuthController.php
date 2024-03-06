<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home(){
        return view('home');
    }

    public function homeUser(){
        return view('homeUser');
    }

    public function login(){
        return view('login');
    }

    public function loginProcess(Request $request){
        $request->validate([
            "email" => "required|email",
            "password"=>"required"
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            // Nge check klo user itu admin
            if(Auth::user()->isAdmin){
                return redirect(route('home'));
            } else {
                return redirect(route('homeUser'));
            }
        }else{
            return redirect(route('login'))->with('error', "Invalid credentials");
        }
    }

    public function registerProcess(Request $request){
        $request->validate([
            "name" => "required|min:3",
            "email" => "required|unique:users,email",
            "password"=>"required",
            "confirmation_password" => "required|required_with:password|same:password",
        ]);

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect(route('home'));
        }else{
            return redirect(route('register'));
        }
    }

    public function register(){
        return view('register');
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
