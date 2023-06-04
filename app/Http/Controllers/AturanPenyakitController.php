<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gejala;
use App\Models\penyakit;

class AturanPenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('isPakar');
    }

    function index()
    {
        $penyakit = penyakit::all();
        return view('pages.pakar-layout.aturans_penyakit.aturan', ['penyakit' => $penyakit]);
    }

    function edit($id)
    {
        $penyakit = penyakit::findOrfail($id);
        $gejala = gejala::all();
        $array = [
            'penyakit' => $penyakit,
            'gejala' => $gejala,
        ];
        return view('pages.pakar-layout.aturans_penyakit.edit', $array);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'penyakit' => 'required',
            'gejala' => 'required',
        ]);

        $penyakit=penyakit::find($id);

        penyakit::where('id', $id)->update([
            'nama_penyakit' => $request->penyakit,
        ]);
        $penyakit->gejala()->sync($request->gejala);
        return redirect() -> route('aturan.penyakit');
    }

    function delete($id)
    {
        penyakit::where('id', $id)->delete();
        return redirect() -> route('aturan.penyakit');
    }
}
