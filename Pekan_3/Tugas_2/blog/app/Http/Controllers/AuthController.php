<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register(){
        return view('register');
    }

    function welcome(Request $request){
        $first_name = $request->first;
        $last_name = $request->last;
        return view('welcome',compact('first_name','last_name'));
    }
}
