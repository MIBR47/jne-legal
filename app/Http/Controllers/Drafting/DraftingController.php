<?php

namespace App\Http\Controllers\Drafting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DraftingController extends Controller
{
    public function index()
    {
        return view('pages.drafting.index');
    }
}
