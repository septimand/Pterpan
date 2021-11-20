<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $users = DB::table('users')->where('email',$input['email'])->where('password', $input['password'])
        ->get();
        //$unit = DB::table('unit')->where('id_unit',$id)->get();
        foreach ($users as $user){
            $role = $user->role;
            if($user->role == 'admin'){
                return view('admin');
                //echo("oke");
            }else if($user->role=='pengguna'){
                return view('pengguna');
            }else{
                //return redirect('login');
                echo("oit");
            }
        }

    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }
}
