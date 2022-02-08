<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FraudController extends Controller
{
    public function index()
    {
        return view('pages.litigation.fraud.index');
    }

    public function check()
    {
        return view('pages.litigation.fraud.check');
    }

    public function report()
    {
        return view('pages.litigation.fraud.report');
    }
}
