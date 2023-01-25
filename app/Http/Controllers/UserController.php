<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        
        $formData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required|confirmed|min:8, alpha_num'
        ]);

        // Hash Password

        $formData['password'] = bcrypt($formData['password']);

        $user = User::create($formData);
        
        // Login
        auth()->login($user);
        return redirect('/')->with('message', 'Registration successful');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out.');
    }

    // Show login form
    public function login(Request $request)
    {
        return view('users.login');    
    }

    // Authenticate
    public function authenticate(Request $request)
    {
        $formData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formData)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Login success.');
        }

        return back()->withErrors(['password' => 'Invalid Credentials'])->onlyInput('email');
    }
}
