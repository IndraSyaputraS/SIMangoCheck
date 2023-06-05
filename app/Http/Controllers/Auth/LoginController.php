<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
        protected function redirectTo(){
            if( Auth()->user()->role == 1){
                return route('admin');
            }
            elseif( Auth()->user() == 2){
                return route('dashboard.pakar');
            }
            elseif( Auth()->user() == 3){
                return route('dashboard-user');
            }
        }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) )
        {

            if( auth()->user()->role_id == 1 ){
                // dd('admin');
                return redirect()->route('admin');
            }
            elseif( auth()->user()->role_id == 2 ){
                // dd('pakar');
                return redirect()->route('dashboard.pakar');
            }
            elseif( auth()->user()->role_id == 3 ){
                // dd('user');
                return redirect()->route('dashboard-user');
            }

        }
        else{
            // dd('salah');
            return redirect()->route('login')->with('Alert','Useremail atau Email, Salah !');
        }
    }
}
