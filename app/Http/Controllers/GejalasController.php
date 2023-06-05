<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gejala;

class GejalasController extends Controller
{
    public function __construct()
    {
        $this->middleware('isPakar');
    }
    function index()
    {
        $gejala = gejala::all();
        return view('pages.pakar-layout.gejalas.gejala', ['gejalas' => $gejala]);
    }

    function create()
    {
        return view('pages.pakar-layout.gejalas.create');
    }

    function store(Request $request)
    {
        $gejala = new Gejala();
        $request->validate([
            'nama' => 'required',
        ]);

        $gejala = Gejala::Create([
            'nama_gejala' => $request->input('nama'),
        ]);
        $gejala->save();
        return redirect()->route('gejala');
    }

    function edit($id)
    {
        $gejala = gejala::find($id);
        return view('pages.pakar-layout.gejalas.edit', ['gejala' => $gejala]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Gejala::where('id', $id)->update([
            'nama_gejala' => $request->nama,
        ]);
        return redirect()->route('gejala');
    }

    function delete($id){
        Gejala::where('id', $id)->delete();
        return redirect()->route('gejala');
    }
}
