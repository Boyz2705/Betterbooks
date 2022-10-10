<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BooksDetail;

class PagesController extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    // function index(){
    //     return view('index', [
    //         "details" => BooksDetail::all()
    //     ]);
    // }

    function welcome(){
        return view('/welcome');
    }

    // function show($slug){
    //     return view('detailProduct', [
    //         "booksdetail" => BooksDetail::find($slug)
    //     ]);
    // }

    function forgot(){
        return view('forgot');
    }

    function index(){
        return view('index');
    }

    function book1Disp(){
        return view('books/book1');
    }

    function formBuy(){
        return view('form');
    }

    function accPage(){
        return view('account');
    }
}