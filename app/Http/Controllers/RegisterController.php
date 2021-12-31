<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
            'active' => 'register'

        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            //'username' => 'required|unique:users|min:5|max:8',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::Create($validatedData);

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}
