<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{

    function index()
    {
        return view('welcome');
    }

    function masuk()
    {
        return view('login');
    }

    function signup()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        $users = new User();
        $users = User::Create([
            'nama_user' => $request->nama,
            'pekerjaan_user' => 'Petani Mangga',
            'telp_user' => '+62',
            'email_user' => $request->email,
            'password_user' => Hash::make($request->password),
            'role_id' => 3,
        ]);
        $users->save();
        return redirect()->route('login.page');
    }

    public function submit(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email_user' => $request->input('email'),
            'password_user' => $request->input('password')
        ];

        if (auth()->attempt( $credentials)) {
            $user = auth()->user();
            if ($user->role_id == 1) {
                return redirect()->route('admin');
            } elseif ($user->role_id == 2) {
                return redirect()->route('dashboard.pakar');
            } elseif ($user->role_id == 3) {
                return redirect()->route('dashboard-user');
            }
        }
        return redirect()->route('login.page')->with('error', 'Invalid email or password');

        // if (auth()->attempt(array('email_user' => $input['email'], 'password_user' => $input['password']))) {
        //     if (auth()->user()->role_id == 1) {
        //         return redirect()->route('admin');
        //     }
        // } else {
        //     return redirect()->route('login.page');
        // }

        // if (auth()->attempt(array('email_user' => $input['email'], 'password_user' => $input['password']))) {
        //     if (auth()->user()->role_id == 2) {
        //         return redirect()->route('dashboard.pakar');
        //     }
        // } else {
        //     return redirect()->route('login.page');
        // }

        // if (auth()->attempt(array('email_user' => $input['email'], 'password_user' => $input['password']))) {
        //     if (auth()->user()->role_id == 3) {
        //         return redirect()->route('dashboard-user');
        //     }
        // } else {
        //     return redirect()->route('login.page');
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
