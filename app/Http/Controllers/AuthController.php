<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Register
    public function create()
    {
        return view('auth.register', [
            'title' => 'Daftar',
            'header' => 'GoodDeed'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|phone:ID|unique:users,phone',
            'username' => 'required|min:3|max:255|unique:users|regex:/^[a-z0-9._]+$/',
            'password' => 'required|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registrasi berhasil dilakukan!');
    }

    // Login
    public function login()
    {
        return view('auth.login', [
            'title' => 'Masuk',
            'header' => 'GoodDeed'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : (preg_match('/^[0-9]{8,15}$/', $login) ? 'phone' : 'username');
        $credentials = [
            $fieldType => $login,
            'password' => $password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('loginError', 'User tidak ditemukan!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
