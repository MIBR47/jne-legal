<?php

namespace App\Http\Controllers\Litigation;

use Carbon\Carbon;
use App\Models\UploadFile;
use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Models\Litigation\Other;
use App\Http\Controllers\Controller;

class OtherController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Other::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'OTH' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'OTH' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'OTH' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'OTH' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'OTH' . date('dmy') . $item;
            }
        }

        return view('pages.litigation.other.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
        ]);
    }

    public function check()
    {
        return view('pages.litigation.other.check');
    }

    public function report()
    {
        return view('pages.litigation.other.report');
    }

    public function store(Request $request)
    {

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
        // $validatedData2 = $request->validate([
        //     // 'id' => 'required',

        // ]);
        // $validatedData[;'']
        // $data = $request->all();
        $id = $validatedData['id'];
        $user_id = $request->user_id;

        $name = $request->file('file_document')->getClientOriginalName();
        $name2 = $request->file('file_proof1')->getClientOriginalName();
        $name3 = $request->file('file_proof2')->getClientOriginalName();
        $name4 = $request->file('file_proof3')->getClientOriginalName();
        $name5 = $request->file('file_disposition')->getClientOriginalName();
        $name6 = $request->file('file_other_document')->getClientOriginalName();

        $validatedData['file_document'] = $request->file('file_document')->storeAs('public/files/file_document', $name, 'public');
        $validatedData['file_proof1'] = $request->file('file_proof1')->storeAs('public/files/file_proof1', $name2, 'public');
        $validatedData['file_proof2'] = $request->file('file_proof2')->storeAs('public/files/file_proof2', $name3, 'public');
        $validatedData['file_proof3'] = $request->file('file_proof3')->storeAs('public/files/file_proof3', $name4, 'public');
        $validatedData['file_disposition'] = $request->file('file_disposition')->storeAs('public/files/file_disposition', $name5, 'public');
        $validatedData['file_other_document'] = $request->file('file_other_document')->storeAs('public/files/file_other_document', $name6, 'public');



        // $path = $request->file('file_document')->store('public/files');
        // $path2= $request->file('file_proof1')->store('public/files');
        // $path3 = $request->file('file_proof2')->store('public/files');
        // $path4 = $request->file('file_proof3')->store('public/files');
        // $path5 = $request->file('file_disposition')->store('public/files');
        // $path6 = $request->file('file_other_document')->store('public/files');

        // $save = new Other;

        // $save->name = $name;
        // $save->name = $name2;
        // $save->name = $name3;
        // $save->name = $name4;
        // $save->name = $name5;
        // $save->name = $name6;

        // $save->path = $path;
        // $save->path = $path2;
        // $save->path = $path3;
        // $save->path = $path4;
        // $save->path = $path5;
        // $save->path = $path6;

        // UploadFile::create($validatedData2);
        Other::create($validatedData);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('home');
    }
}
