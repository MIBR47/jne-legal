<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'ADMIN'){
            return redirect()->route('admin-dashboard');
        }elseif(auth()->user()->role == 'LEGALPERMIT'){
            return redirect()->route('legal-permit-dashboard');
        }elseif(auth()->user()->role == 'TEAMCS'){
            return redirect()->route('team-cs-dashboard');
        }elseif(auth()->user()->role == 'USER'){
            return view('welcome');
        }

    }

    public function contactUs()
    {
        return view('contact_us');
    }

    public function login()
    {
        return view('pages.auth.login');
    }
}
