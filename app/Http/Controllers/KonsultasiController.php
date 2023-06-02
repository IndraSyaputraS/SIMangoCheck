<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    function index(){
        return view('pages.user-layout.konsultasi.konsultasi');
    }

    function create(){
        return view('pages.user-layout.konsultasi.create');
    }
}
