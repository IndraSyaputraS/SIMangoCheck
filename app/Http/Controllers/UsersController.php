<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index(){
        return view('pages.admin-layout.users.users');
    }

    function create(){
        return view('pages.admin-layout.users.create');
    }
}
