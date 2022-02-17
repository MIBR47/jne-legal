<?php

namespace App\Http\Controllers;

use App\Models\Permit\Permit;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

use App\Http\Controllers\Storage;

class DownloadController extends Controller
{
    function downloadPermit($id)
    {
        $pathToFile = public_path('storage/public/permit/' . $id);
        return response()->download($pathToFile);
    }
    function downloadLitigation($id)
    {
        $pathToFile = public_path('storage/public/litigation/' . $id);
        return response()->download($pathToFile);
    }
}
