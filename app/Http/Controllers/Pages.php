<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
class Pages extends Controller
{
    //
    public function index():View{
        return view('landing');
    }

    public function loginForm():View{
        return view('login');
    }

    public function registerForm():View
    {
        return view('register');
    }

    public function dashboard():View{
        return view('dashboard');
    }

    public function login(Request $request):RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        Log::info('Attempting login with credentials:', $credentials);

        if (Auth::attempt($credentials)) {
            Log::info('Login successful');
            return redirect('/dashboard');
        }
        Log::warning('Login failed');
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request):RedirectResponse
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);


        Auth::login($user);

        return redirect('/dashboard');
    }
}
