<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function store()
    {
        $validatedData = request()->validate([
            "name" => ["required", "max:100", "min:3"],
            "username" => ["required", "max:100", "min:3", Rule::unique('users', 'username')],
            "email" => ["required", "email", "max:100", Rule::unique('users', 'email')],
            "password" => ["required", "min:6", "max:100"]
        ]);
        $user = User::create($validatedData);
        auth()->login($user);
        return redirect('/')->with('message', 'Welcome, ' . auth()->user()->name);
    }
    public function login()
    {
        return view('auth.login');
    }
    public function postLogin()
    {
        $validatedData = request()->validate([
            "email" => ["required", "email", "max:100", Rule::exists('users', 'email')],
            "password" => ["required"]
        ]);
        if (!auth()->attempt($validatedData)) {
            return redirect()->back()->withErrors(['errors' => 'Wrong Credentials']);
        }
        return redirect('/')->with('message', 'Welcome back, ' . auth()->user()->name);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->back()->with('message', 'See you soon');
    }
}
