<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPage extends Controller
{
    function index()
    {
        return view("user.home");
    }

    function events()
    {
        return view("user.events");
    }

    function about()
    {
        return view("user.about");
    }

    function feedback()
    {
        return view("user.feedback");
    }

    function contactus()
    {
        return view("user.contact");
    }

    function developers()
    {
        return view('user.developers');
    }
}
