<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDisputeController extends Controller
{
    public function index()
    {
        return view('pages.litigation.customer_dispute.index');
    }

    public function check()
    {
        return view('pages.litigation.customer_dispute.check');
    }

    public function report()
    {
        return view('pages.litigation.customer_dispute.report');
    }
}
