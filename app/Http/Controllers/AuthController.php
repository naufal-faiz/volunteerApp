<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    // Login & Register Page
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            'header' => 'GoodDeed'
        ]);
    }

    public function create()
    {
        return view('auth.register', [
            'title' => 'Daftar',
            'header' => 'GoodDeed'
        ]);
    }

    // Register
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|phone:ID|unique:users,phone',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registrasi berhasil dilakukan!');
    }

}
