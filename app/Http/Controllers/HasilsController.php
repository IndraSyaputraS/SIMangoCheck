<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilsController extends Controller
{
    function indexUser(){
        return view('pages.user-layout.hasil');
    }

    function indexAdmin(){
        return view('pages.admin-layout.hasil');
    }
}
