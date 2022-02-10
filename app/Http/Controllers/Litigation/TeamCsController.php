<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamCsController extends Controller
{
    public function index()
    {
        return view('pages.team-cs.index');
    }
}
