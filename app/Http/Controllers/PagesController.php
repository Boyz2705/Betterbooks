<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function index(){
        return view('index');
    }

    function welcome(){
        return view('/welcome');
    }
}
