<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    function pakar(){
        return view('pages.pakar-layout.dashboard');
    }

    function admin(){
        return view('pages.admin-layout.dashboard');
    }

    function user(){
        return view('pages.user-layout.dashboard');
    }
}
