<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function dashboard()
    {
        return view('dashboard');
        
    }
    function operator()
    {
        return view('dashboard');

    } function keuangan()
    {
        return view('dashboard');
    }
    function marketing()
    {
        return view('dashboard');
    }
}
