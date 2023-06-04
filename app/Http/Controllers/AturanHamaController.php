<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gejala;
use App\Models\hama;

class AturanHamaController extends Controller
{
    public function __construct()
    {
        $this->middleware('isPakar');
    }

    function index()
    {
        $hama = hama::all();
        return view('pages.pakar-layout.aturans_hama.aturan', ['hama' => $hama]);
    }

    function edit($id)
    {
        $hama = hama::findOrfail($id);
        $gejala = gejala::all();
        $array = [
            'hama' => $hama,
            'gejala' => $gejala,
        ];
        return view('pages.pakar-layout.aturans_hama.edit', $array);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'hama' => 'required',
            'gejala' => 'required',
        ]);

        $hama=hama::find($id);

        hama::where('id', $id)->update([
            'nama_hama' => $request->hama,
        ]);
        $hama->gejala()->sync($request->gejala);
        return redirect() -> route('aturan.hama');
    }

    function delete($id)
    {
        hama::where('id', $id)->delete();
        return redirect() -> route('aturan.hama');
    }
}
