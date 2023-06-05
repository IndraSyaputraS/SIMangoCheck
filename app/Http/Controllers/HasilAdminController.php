<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\hasil;
use App\Models\hasil_hama;

class HasilAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function hasil(){
        $hasil = hasil::all();
        $hasilHama = hasil_hama::all();
        $user = User::where('role_id', 3)->get();
        $array = [
            'hasil' => $hasil,
            'hasilHama' => $hasilHama,
            'user' => $user,
        ];
        return view('pages.admin-layout.hasil', $array);
    }
}
