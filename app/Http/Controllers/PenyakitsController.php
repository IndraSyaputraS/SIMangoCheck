<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use Illuminate\Support\Facades\File;
use App\Models\penyakit;

class PenyakitsController extends Controller
{
    function index()
    {
        $penyakit = penyakit::all();
        return view('pages.pakar-layout.penyakits.penyakit', ['penyakits' => $penyakit]);
    }

    function create()
    {
        $obat = obat::all();
        $array = [
            'obat' => $obat,
        ];
        return view('pages.pakar-layout.penyakits.create', $array);
    }

    function store(Request $request)
    {
        $penyakit = new Penyakit();
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

        $penyakit = Penyakit::Create([
            'nama_penyakit' => $request->input('nama'),
            'deskripsi_penyakit' => $request->input('deskripsi'),
            'solusi_penyakit' => $request->input('solusi'),
            'kode_obat' => $request->obat,
            'foto_penyakit' => $nama_foto,
        ]);
        $penyakit->save();
        return redirect()->route('penyakit');
    }

    function edit($id)
    {
        $penyakit = penyakit::find($id);
        $obat = obat::all();
        $array = [
            'obat' => $obat,
            'penyakit' => $penyakit,
        ];
        return view('pages.pakar-layout.penyakits.edit', $array);
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
        $penyakit = Penyakit::find($id);
        if ($request->hasFile('gambar')) {
            $file_foto = $request->file('gambar');
            $ekstensi_foto = $file_foto->getClientOriginalName();
            $nama_foto = date('ymdhis') . "." . $ekstensi_foto;
            $file_foto->move(public_path('img'), $nama_foto);
            $data_foto = Penyakit::where('id', $id)->first();
            File::delete(public_path('img') . '/' . $data_foto->foto_penyakit);
        }
        Penyakit::where('id', $id)->update([
            'nama_penyakit' => $request->nama,
            'deskripsi_penyakit' => $request->deskripsi,
            'solusi_penyakit' => $request->solusi,
            'kode_obat' => $request->obat,
            'foto_penyakit' => $request->gambar ? $nama_foto : $penyakit->foto_penyakit,
        ]);
        return redirect()->route('penyakit');
    }

    function delete($id)
    {
        Penyakit::where('id', $id)->delete();
        return redirect()->route('penyakit');
    }
}
