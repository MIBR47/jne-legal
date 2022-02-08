<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
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
