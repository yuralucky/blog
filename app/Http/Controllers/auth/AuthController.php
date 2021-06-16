<?php


namespace App\Http\Controllers\auth;


use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function login()
    {
        return view('auth/login');
    }

    public function registrationForm()
    {
        return view('registration/registration');
    }

    public function handleLogin(UserLoginRequest $request)
    {
        $credential = $request->only('login', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->route('articles');
        }

        return redirect()->route('registration.form');
    }

    public function registration(Request $request)
    {
        dd($request);
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('articles');
    }
}
