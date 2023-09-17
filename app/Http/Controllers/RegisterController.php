<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:25', 'unique:users'],
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        $validationData['password'] = Hash::make($validationData['password']);
        User::create($validationData);
        return redirect('/login')->with('success', 'Data telah berhasil ditambahkan');
    }
}
