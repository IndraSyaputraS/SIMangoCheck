<?php

namespace App\Http\Controllers;

use App\Models\aturan_hama;
use Illuminate\Http\Request;
use App\Models\gejala;
use App\Models\penyakit;
use App\Models\hasil;
use App\Models\hasil_hama;
use App\Models\hama;
use App\Models\User;
use App\Models\aturan_penyakit;
use Carbon\Carbon;
use LDAP\Result;

class KonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('isPengguna');
    }

    function index_penyakit()
    {
        $gejalas = gejala::all();
        $penyakit = penyakit::all();
        $SelectedGejala = [1, 3];
        $aturan_penyakit = aturan_penyakit::whereIn('gejala_id', $SelectedGejala)->get();
        $array = [
            'gejala' => $gejalas,
            'penyakit' => $penyakit,
            'aturan_penyakit' => $aturan_penyakit,
        ];
        return view('pages.user-layout.konsultasi.konsultasi_penyakit', $array);
    }

    function check_penyakit(Request $request)
    {
        $result = new hasil();
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
            // $penyakits = penyakit::where('id', '=', $max_key[0])->get();
            // $user = User::where('role_id', 3)->get();
            $myTime = Carbon::now();
            $result = hasil::Create([
                'datetime' => $myTime,
                'penyakit_id' => $max_key[0],
                'user_id' => auth()->user()->id,
            ]);
            $result->save();
            $result->gejala()->attach($request->gejala);
            return redirect()->route('hasil.penyakit.user');
        }else{
            return redirect()->back();
        }
    }

    function index_hama()
    {
        $gejalas = gejala::all();
        $hama = hama::all();
        $SelectedGejala = [1, 3];
        $aturan_hama = aturan_hama::whereIn('gejala_id', $SelectedGejala)->get();
        $array = [
            'gejala' => $gejalas,
            'hama' => $hama,
            'aturan_hama' => $aturan_hama,
        ];
        return view('pages.user-layout.konsultasi.konsultasi_hama', $array);
    }

    function check_hama(Request $request)
    {
        $results = new hasil_hama();
        $DataAturan = aturan_hama::all();
        $SelectedGejala = $request->gejala;
        $aturan = [];
        foreach ($DataAturan as $item) {
            if (!isset($aturan[$item->hama_id])) {
                $aturan[$item->hama_id] = [];
            }
            array_push($aturan[$item->hama_id], $item->gejala_id);
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
            $myTime = Carbon::now();
            $results = hasil_hama::Create([
                'datetime' => $myTime,
                'hama_id' => $max_key[0],
                'user_id' => auth()->user()->id,
            ]);
            $results->gejalaHama()->attach($request->gejala);
            $results->save();
            return redirect()->route('hasil.hama.user');
        }else{
            return redirect()->back();
        }
    }
}
