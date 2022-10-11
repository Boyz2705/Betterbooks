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

    function book2Disp(){
        return view('books/book2');
    }
    
    function book3Disp(){
        return view('books/book3');
    }

    function book4Disp(){
        return view('books/book4');
    }

    function book5Disp(){
        return view('books/book5');
    }

    function book6Disp(){
        return view('books/book6');
    }

    function book7Disp(){
        return view('books/book7');
    }

    function book8Disp(){
        return view('books/book8');
    }

    function formBuy(){
        return view('form');
    }

    function accPage(){
        return view('account');
    }

    function signAdmin(){
        return view('soft-ui-dashboard/pages/sign-in');
    }
}