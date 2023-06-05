<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    penyakit,
    obat,
    gejala,
    hama,
    aturan_penyakit,
    aturan_hama,
    hasil,
    hasil_hama,
    user
};

class Dashboard extends Controller
{
    function pakar(){
        $tampil = penyakit::all();
        $penyakit = penyakit::count();
        $hama = hama::count();
        $obat = obat::count();
        $gejala = gejala::count();
        $aturan_penyakit = aturan_penyakit::count();
        $aturan_hama = aturan_hama::count();
        $array = [
            'tampil' => $tampil,
            'penyakit' => $penyakit,
            'hama' => $hama,
            'obat' => $obat,
            'gejala' => $gejala,
            'aturan_penyakit' => $aturan_penyakit,
            'aturan_hama' => $aturan_hama,
        ];
        return view('pages.pakar-layout.dashboard', $array);
    }

    function admin(){
        $users = user::all();
        $user = user::count();
        $array = [
            'user' =>$user,
            'users' =>$users,
        ];
        return view('pages.admin-layout.dashboard', $array);
    }

    function user(){
        $user = user::where('role_id', 3)->get();
        $konsulPenyakit = hasil::count();
        $konsulHama = hasil_hama::count();
        $array = [
            'user' => $user,
            'konsulPenyakit' => $konsulPenyakit,
            'konsulHama' => $konsulHama,
        ];
        return view('pages.user-layout.dashboard', $array);
    }
}
