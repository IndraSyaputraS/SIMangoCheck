<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;

class ObatsController extends Controller
{
    function index()
    {
        $obat = obat::all();
        return view('pages.pakar-layout.obat.obat', ['obats' => $obat]);
    }

    function create()
    {
        return view('pages.pakar-layout.obat.create');
    }

    function store(Request $request)
    {
        $obat = new Obat();
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $obat = Obat::Create([
            'nama_obat' => $request->input('nama'),
            'deskripsi_obat' => $request->input('deskripsi'),
            'harga_obat' => $request->input('harga'),
        ]);
        $obat->save();
        return redirect()->route('obat');
    }

    function edit($id)
    {
        $obat = Obat::find($id);
        $array = [
            'obat' => $obat,
        ];
        return view('pages.pakar-layout.obat.edit', $array);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        Obat::where('id', $id)->update([
            'nama_obat' => $request->nama,
            'deskripsi_obat' => $request->deskripsi,
            'harga_obat' => $request->harga,
        ]);
        return redirect()->route('obat');
    }

    function delete($id)
    {
        Obat::where('id', $id)->delete();
        return redirect()->route('obat');
    }
}
