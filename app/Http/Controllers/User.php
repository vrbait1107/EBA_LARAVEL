<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        return view('login');
    }

    public function signup(){
        return view('register');
    }
}
