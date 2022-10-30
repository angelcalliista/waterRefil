<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use session;
use RealRashid\SweetAlert\Facades\Alert;

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
    protected function redirectTo(){
    

        if(auth()->user()->level == 'admin') {
            toast('Selamat Datang Admin', 'success');
            return 'admin/dashboard';

        }
        //else{
          //  return redirect('/login')->with('flash_message_error', 'Username atau Password anda salah !!');

        //}
        toast('Selamat Datang', 'success');
        return '/Home';
       
    }

    // public function login(Request $request){
    //     if($request->isMethod('post')){
    //         $data = $request->input();
    //         if(auth()->user()->level == 'admin'){
    //             toast('Selamat Datang Admin', 'success');
    //             return 'admin/dashboard';
    //         }else{
    //             return redirect('/login')->with('flash_message_error', 'Username atau Password anda salah !!');
    //         }
    //     }
    //     toast('Selamat Datang', 'success');
    //     return '/Home';
    // }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
