<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index(){
        return view('welcome');
    }

    function login(){
        return view('login');
    }

    function signup(){
        return view('signup');
    }
}
