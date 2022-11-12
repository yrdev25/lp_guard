<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

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
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            $guard = 'companyone';
        //     if(auth($guard)->check()){
        //    config()->set('auth.defaults.guard',$guard);
        //     }
            
            auth()->guard('companyone')->user();

//Auth::shouldUse($guard);

          // Auth::guard(Auth::user()->guard_name);
           return redirect()->route('home');
        }else{
            return view('welcome');
        }
    }


    public function logout(Request $request)
    {
        $this->guard()->logout();
    
        $request->session()->invalidate();
    
        return redirect()->route('home');
    }

     
}
