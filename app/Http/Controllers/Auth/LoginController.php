<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

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

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'ADMIN') {
                return redirect()->route('admin-dashboard');
            } elseif (auth()->user()->role == 'LEGALPERMIT') {
                return redirect()->route('legal-permit-dashboard');
            } elseif (auth()->user()->role == 'LEGALLEASE') {
                return redirect()->route('legal-lease-dashboard');
            } elseif (auth()->user()->role == 'TEAMCS') {
                return redirect()->route('team-cs-dashboard');
            } elseif (auth()->user()->role == 'LEGALLITIGASI1') {
                return redirect()->route('legal1');
            } elseif (auth()->user()->role == 'LEGALLITIGASI2') {
                return redirect()->route('legal2');
            } elseif (auth()->user()->role == 'LEGALMANAGER') {
                return redirect()->route('legalmanager');
            } elseif (auth()->user()->role == 'USER') {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }

        // if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        // {

        //     if (auth()->user()->role == 'ADMIN') {
        //         return redirect()->route('admin-dashboard');
        //     }elseif(auth()->user()->role == 'USER'){
        //         return redirect()->route('home');
        //     }
        // }else{
        //     return redirect()->route('login')
        //         ->with('error','Email-Address And Password Are Wrong.');
        // }

    }

    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
