<?php

namespace App\Http\Controllers\Permit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermitController extends Controller
{
    public function index()
    {
        return view('pages.permit.index');
    }
}
