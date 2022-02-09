<?php

namespace App\Http\Controllers\Permit;

use App\Models\UploadFile;
use Illuminate\Http\Request;
use App\Models\Permit\Permit;
use App\Http\Controllers\Controller;

class PerizinanBaruController extends Controller
{
    public function index(){
        return view('pages.permit.perizinan_baru.index');
    }

    public function check()
    {
        return view('pages.permit.perizinan_baru.check');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'user_id' => 'required',
            'permit_type' => 'required',
            'location' => 'required',
            'specification' => 'required',
            'application_reason' => 'required',
            'file_disposition' => 'required',
            'file_document1' => 'required',
            'file_document2' => 'required',
            'file_document3' => 'required',
        ]);

        $name = $request->file('file_disposition')->getClientOriginalName();
        $name2 = $request->file('file_document1')->getClientOriginalName();
        $name3 = $request->file('file_document2')->getClientOriginalName();
        $name4 = $request->file('file_document3')->getClientOriginalName();

        $path = $request->file('file_disposition')->store('public/files');
        $path2= $request->file('file_document1')->store('public/files');
        $path3 = $request->file('file_document2')->store('public/files');
        $path4 = $request->file('file_document3')->store('public/files');

        $save = new Permit();

        $save->name = $name;
        $save->name = $name2;
        $save->name = $name3;
        $save->name = $name4;

        $save->path = $path;
        $save->path = $path2;
        $save->path = $path3;
        $save->path = $path4;


        // UploadFile::create($validatedData2);
        Permit::create($validatedData);


        return redirect()->route('home');
    }
}
