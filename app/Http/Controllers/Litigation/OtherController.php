<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use App\Models\Litigation\Other;
use App\Models\UploadFile;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function index()
    {
        return view('pages.litigation.other.index');
    }

    public function check()
    {
        return view('pages.litigation.other.check');
    }

    public function report()
    {
        return view('pages.litigation.other.report');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'user_id' => 'required',
            'date' => 'required',
            'party_name' => 'required',
            'department' => 'required',
            'document_number' => 'required',
            'total_loss' => 'required',
            'incident_chronology' => 'required',
            'file_document' => 'required',
            'file_proof1' => 'required',
            'file_proof2' => 'required',
            'file_proof3' => 'required',
            'file_disposition' => 'required',
            'file_other_document' => 'required',
        ]);
#
        $validatedData2 = $request->validate([
            // 'id' => 'required',
            
        ]);
        // $validatedData[;'']

        $name = $request->file('file_document')->getClientOriginalName();
        $name2 = $request->file('file_proof1')->getClientOriginalName();
        $name3 = $request->file('file_proof2')->getClientOriginalName();
        $name4 = $request->file('file_proof3')->getClientOriginalName();
        $name5 = $request->file('file_disposition')->getClientOriginalName();
        $name6 = $request->file('file_other_document')->getClientOriginalName();
        
        $path = $request->file('file_document')->store('public/files');
        $path2= $request->file('file_proof1')->store('public/files');
        $path3 = $request->file('file_proof2')->store('public/files');
        $path4 = $request->file('file_proof3')->store('public/files');
        $path5 = $request->file('file_disposition')->store('public/files');
        $path6 = $request->file('file_other_document')->store('public/files'); 

        $save = new Other;
 
        $save->name = $name;
        $save->name = $name2;
        $save->name = $name3;
        $save->name = $name4;
        $save->name = $name5;
        $save->name = $name6;

        $save->path = $path;
        $save->path = $path2;
        $save->path = $path3;
        $save->path = $path4;
        $save->path = $path5;
        $save->path = $path6;

        // UploadFile::create($validatedData2);
        Other::create($validatedData);


        return redirect()->route('home');
    }
}
