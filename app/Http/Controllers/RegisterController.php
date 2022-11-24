<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function register(){
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'max:45'],
            'password_confirmation' => ['required', 'same:password']

        ]);
        // dd($validated);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('/login')->with('alert', 'Registrasi berhasil. Silahkan login!');

    }
}
