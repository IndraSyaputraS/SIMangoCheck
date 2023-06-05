<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index(){
        $user=User::all();
        return view('pages.admin-layout.users.users', ['user'=>$user]);
    }

    function delete($id){
        $user=user::where('id', $id)->delete();
        return view('pages.admin-layout.users.users');
    }
}
