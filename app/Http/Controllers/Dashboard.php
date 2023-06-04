<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penyakit;
use App\Models\hama;
use App\Models\obat;
use App\Models\gejala;
use App\Models\aturan_penyakit;
use App\Models\aturan_hama;

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
        return view('pages.admin-layout.dashboard');
    }

    function user(){
        return view('pages.user-layout.dashboard');
    }
}
