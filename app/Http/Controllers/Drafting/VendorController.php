<?php

namespace App\Http\Controllers\Drafting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        return view('pages.drafting.vendor_supplier.index');
    }

    public function check()
    {
        return view('pages.drafting.vendor_supplier.check');
    }
}
