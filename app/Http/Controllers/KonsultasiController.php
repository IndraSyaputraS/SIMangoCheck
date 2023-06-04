<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gejala;
use App\Models\penyakit;
use App\Models\hasil;
use App\Models\aturan_penyakit;
use Carbon\Carbon;
use LDAP\Result;

class KonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('isPengguna');
    }

    function index()
    {
        $gejalas = gejala::all();
        $penyakit = penyakit::all();
        $SelectedGejala = [1, 3];
        $aturan_penyakit = aturan_penyakit::whereIn('gejala_id', $SelectedGejala)->get();
        $array = [
            'gejalas' => $gejalas,
            'penyakit' => $penyakit,
            'aturan_penyakit' => $aturan_penyakit,
        ];
        return view('pages.user-layout.konsultasi.konsultasi_penyakit', $array);
    }

    function check(Request $request)
    {
        $results = new Result();
        $DataAturan = aturan_penyakit::all();
        $SelectedGejala = $request->gejala;
        $aturan = [];
        foreach ($DataAturan as $item) {
            if (!isset($aturan[$item->penyakit_id])) {
                $aturan[$item->penyakit_id] = [];
            }
            array_push($aturan[$item->penyakit_id], $item->gejala_id);
        }
        $result = [];
        foreach ($aturan as $key => $rules) {
            foreach ($SelectedGejala as $select) {
                if (in_array($select, $rules)) {
                    if (!isset($result[$key])) {
                        $result[$key] = 1;
                    } else {
                        $result[$key] = $request[$key] + 1;
                    }
                }
            }
        }
        if (count($result) > 0) {
            $max_key = array_keys($result, max($result));
            $penyakits = penyakit::where('id', '=', $max_key[0])->get();
            $gejalas = gejala::all();
            $myTime = Carbon::now();
            $result = hasil::Create([
                'datetime' => $myTime->toDayDateTimeString(),
                'penyakit_id' => $max_key[0],
                // 'user_id' => auth()->user()->id;
            ]);
            $result->gejala()->attach($request->gejala);
            $result->save();
            return view('pages.user-layout.hasil');
        }else{
            return redirect()->back();
        }
    }
}
