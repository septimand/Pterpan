<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function postlogin (Request $request){
        $input=$request->all();
        if(null !==(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))){
            if(Auth::user()->hasRole=='admin'){
                return redirect('admin');
            }else if(Auth::user()->hasRole=='pengguna'){
                return redirect('pengguna');
            }
        }
        echo("terjadi kesalahan");
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }
}
