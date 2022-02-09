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

        // $validatedData = $request->validate([
        //     'user_id' => 'required',
        //     'permit_type' => 'required',
        //     'location' => 'required',
        //     'specification' => 'required',
        //     'application_reason' => 'required',
        //     'file_disposition' => 'required',
        //     'file_document1' => 'required',
        //     'file_document2' => 'required',
        //     'file_document3' => 'required',
        // ]);
        $data = $request->all();

        $name1 = $request->file('file_disposition')->getClientOriginalName();
        $name2 = $request->file('file_document1')->getClientOriginalName();
        $name3 = $request->file('file_document2')->getClientOriginalName();
        $name4 = $request->file('file_document3')->getClientOriginalName();

        $data['file_disposition'] = $request->file('file_disposition')->storeAs('public/files/file_disposition',$name1,'public');
        $data['file_document1'] = $request->file('file_document1')->storeAs('public/files/file_document1',$name2,'public');
        $data['file_document2'] = $request->file('file_document2')->storeAs('public/files/file_document2',$name3,'public');
        $data['file_document3'] = $request->file('file_document3')->storeAs('public/files/file_document3',$name4,'public');

        // $save = new Permit();

        // $save->name = $name1;
        // $save->name = $name2;
        // $save->name = $name3;
        // $save->name = $name4;

        // $save->path = $path1;
        // $save->path = $path2;
        // $save->path = $path3;
        // $save->path = $path4;

        // UploadFile::create($validatedData2);
        Permit::create($data);

        return redirect()->route('home');
    }
}
