<?php

namespace App\Http\Controllers;

use App\Models\hasil;
use App\Models\gejala;
use App\Models\hasil_hama;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class HasilsController extends Controller
{
    public function __construct()
    {   
        $this->middleware('isPengguna');
    }

    public function indexPenyakit(){
        $hasil = hasil::all();
        $user = User::where('role_id', 3)->get();
        $array = [
            'hasil' => $hasil,
            'user' => $user,
        ];
        return view('pages.user-layout.hasil.hasil', $array);
    }

    function indexHama(){
        $hasilHama = hasil_hama::all();
        $user = User::where('role_id', 3)->get();
        $array = [
            'hasilHama' => $hasilHama,
            'user' => $user,
        ];
        return view('pages.user-layout.hasil.hasilHama', $array);
    }

    public function cetak1(){
        $hasil = hasil::all();
        $pdf = PDF::loadView('pages.user-layout.hasil.report', ['hasil'=>$hasil])->setPaper('a4', 'landscape');
        return $pdf->download('Hasil-Konsultasi-Penyakit.pdf');
    }
}
