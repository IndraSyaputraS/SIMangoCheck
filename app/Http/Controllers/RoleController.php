<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function index(){
        return view('pages.admin-layout.roles.roles');
    }

    function create(){
        return view('pages.admin-layout.roles.create');
    }
}
