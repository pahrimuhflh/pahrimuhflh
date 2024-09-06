<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function dasbord(){
        return view('dasbord');
    }

    function auth(Request $request){
        $validasi = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validasi)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/dasbord');
            }
            return redirect('/home');
        }
    }
}
