<?php

namespace App\Http\Controllers;

use App\Models\Permit\Permit;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    // function downloadFile($id)
    // {
    //     // $file = Storage::disk('public')->get($file_name);
    //     // $file = public_path() . "$file_name";

    //     // $headers = array(
    //     //     'Content-Type: application/pdf',
    //     // );

    //     // // return Storage::download($request->file);

    //     // return response()->download($file, 'abc.pdf', $headers);
    //     // $permit = Permit::where('id', $id)->
    //     // dd($permit->id);

    //     $path = storage_path('storage/');

    //     if (!File::exists($path)) {
    //         abort(404);
    //     }

    //     $file = File::get($path);
    //     $type = File::mimeType($path);

    //     $headers = array(
    //         'Content-Type: application/pdf',
    //     );

    //     // return Storage::download($request->file);

    //     return response()->download($file, 'abc.pdf', $headers);

    //     // $response = Response::make($file, 200)->header("Content-Type", $type);

    //     // return $response;
    // }
}
