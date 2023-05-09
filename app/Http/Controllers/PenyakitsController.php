<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\gejala;
use Illuminate\Support\Facades\Hash;
use App\Models\penyakit;

class PenyakitsController extends Controller
{
    function index()
    {
        return view('pages.pakar-layout.penyakits.penyakit');
    }

    public function create()
    {
        $obat = obat::all();
        $gejala = gejala::all();
        $array = [
            'obat' => $obat,
            'gejala' => $gejala,
        ];
        return view('pages.pakar-layout.penyakits.create', $array);
    }

    function store(Request $request){
        $penyakit = new Penyakit();
        $request->validate([
            'nama_penyakit' => 'required|unique:sicknesses,sickness_name',
            'deskripsi_penyakit' => 'required',
            'solusi_penyakit' => 'required',
            'id_obat' => 'required',
            'foto_penyakit' => 'required|image|mimes:jpg,png,jpeg|max:10240',
        ]);
            $file_foto = $request->file('foto_penyakit');
            $ekstensi_foto = $file_foto->extension();
            $nama_foto = date('ymdhis') . "." . $ekstensi_foto;
            $file_foto->move(public_path('img'), $nama_foto);
       
            $penyakit = Penyakit::Create([
                'nama_penyakit' => $request->input('nama_penyakit'),
                'deskripsi_penyakit' => $request->input('deskripsi_penyakit'),
                'solusi_penyakit' => $request->input('solusi_penyakit'),
                'obat_id' => $request->medicine_id,
                'foto_penyakit' => $nama_foto,
            ]);
            $penyakit->save();
        return redirect()->route('penyakit')->with('success-store-sickness', 'Data '.$request->nama_penyakit.' Saved Successfully');
    }
}
