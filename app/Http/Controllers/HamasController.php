<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hama;
use App\Models\obat;
use Illuminate\Support\Facades\File;

class HamasController extends Controller
{
    function index()
    {
        $hama = hama::all();
        return view('pages.pakar-layout.hamas.hama', ['hamas' => $hama]);
    }

    function create()
    {
        $obat = obat::all();
        $array = [
            'obat' => $obat,
        ];
        return view('pages.pakar-layout.hamas.create', $array);
    }

    function store(Request $request)
    {
        $hama = new Hama();
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'solusi' => 'required',
            'obat' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:10240',
        ]);
        $file_foto = $request->file('gambar');
        $ekstensi_foto = $file_foto->extension();
        $nama_foto = date('ymdhis') . "." . $ekstensi_foto;
        $file_foto->move(public_path('img'), $nama_foto);

        $hama = Hama::Create([
            'nama_hama' => $request->input('nama'),
            'deskripsi_hama' => $request->input('deskripsi'),
            'solusi_hama' => $request->input('solusi'),
            'kode_obat' => $request->obat,
            'foto_hama' => $nama_foto,
        ]);
        $hama->save();
        return redirect()->route('hama');
    }

    function edit($id){
        $hama = hama::find($id);
        $obat = obat::all();
        $array = [
            'obat' => $obat,
            'hama' => $hama,
        ];
        return view('pages.pakar-layout.hamas.edit', $array);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'solusi' => 'required',
            'obat' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:10240',
        ]);
        $hama = Hama::find($id);
        if ($request->hasFile('gambar')) {
            $file_foto = $request->file('gambar');
            $ekstensi_foto = $file_foto->getClientOriginalName();
            $nama_foto = date('ymdhis') . "." . $ekstensi_foto;
            $file_foto->move(public_path('img'), $nama_foto);
            $data_foto = Hama::where('id', $id)->first();
            File::delete(public_path('img') . '/' . $data_foto->foto_hama);
        }
        Hama::where('id', $id)->update([
            'nama_hama' => $request->nama,
            'deskripsi_hama' => $request->deskripsi,
            'solusi_hama' => $request->solusi,
            'kode_obat' => $request->obat,
            'foto_hama' => $request->gambar ? $nama_foto : $hama->foto_hama,
        ]);
        return redirect()->route('hama');
    }

    function delete($id)
    {
        Hama::where('id', $id)->delete();
        return redirect()->route('hama');
    }
}
