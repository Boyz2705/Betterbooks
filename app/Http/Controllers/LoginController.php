<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::user()){
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard');
            }
            else if(Auth::user()->role == 'customer'){
                return redirect()->intended('/index');
            }
            else{
                return redirect()->with('alert','Silakan login terlebih dahulu!');
            }
        }
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // return redirect()->intended('/');
            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/dashboard');
            }
            else{
                return redirect()->intended('/index');
            }
        }
        return back()->with('alert', 'Login gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // request()->session()->invalidate();

        // request()->session()->regenerateToken();

        return redirect()->intended('/login');
    }
}
