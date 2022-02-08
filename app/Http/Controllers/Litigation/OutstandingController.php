<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OutstandingController extends Controller
{
    public function index()
    {
        return view('pages.litigation.outstanding.index');
    }

    public function check()
    {
        return view('pages.litigation.outstanding.check');
    }

    public function report()
    {
        return view('pages.litigation.outstanding.report');
    }
}
