<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        if (auth()->user()->role == 'ADMIN') {
            return redirect()->route('admin-dashboard');
        } elseif (auth()->user()->role == 'LEGALPERMIT') {
            return redirect()->route('legal-permit-dashboard');
        } elseif (auth()->user()->role == 'TEAMCS') {
            return redirect()->route('team-cs-dashboard');
        } elseif (auth()->user()->role == 'LEGALLITIGASI1') {
            return redirect()->route('legal1-dashboard');
        } elseif (auth()->user()->role == 'LEGALLITIGASI2') {
            return redirect()->route('legal2-dashboard');
        } elseif (auth()->user()->role == 'LEGALMANAGER') {
            return redirect()->route('legal-manager-dashboard');
        } elseif (auth()->user()->role == 'CONTRACTBUSINESS') {
            return redirect()->route('cd-dashboard');
        } elseif (auth()->user()->role == 'USER') {
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
