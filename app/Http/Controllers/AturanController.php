<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\aturan;
use App\Models\gejala;
use App\Models\hama;
use App\Models\penyakit;

class AturanController extends Controller
{
    function index()
    {
        $penyakit = penyakit::all();
        return view('pages.pakar-layout.aturans.aturan', ['penyakit' => $penyakit]);
    }

    function getGejala(Request $request){
        
    }

    function edit($id)
    {
        $penyakit = penyakit::findOrfail($id);
        $gejala = gejala::all();
        $array = [
            'penyakit' => $penyakit,
            'gejala' => $gejala,
        ];
        return view('pages.pakar-layout.aturans.edit', $array);
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
        return redirect() -> route('aturan');
    }

    function delete($id)
    {
        penyakit::where('id', $id)->delete();
        return redirect() -> route('aturan');
    }
}
