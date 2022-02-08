<?php

namespace App\Http\Controllers\Drafting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    public function index()
    {
        return view('pages.drafting.lease.index');
    }

    public function check()
    {
        return view('pages.drafting.lease.check');
    }
}
