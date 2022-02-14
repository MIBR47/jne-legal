<?php

namespace App\Http\Controllers\Litigation;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Http\Controllers\Controller;
use App\Models\Litigation\Outstanding;

class OutstandingController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y',strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Outstanding::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'OUT' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'OUT' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'OUT' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'OUT' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'OUT' . date('dmy') . $item;
            }
        }

        return view('pages.litigation.outstanding.index', [
            'no_kasus' => $no_kasus,
            'datenow'=>$datenow
        ]);
    }

    public function check()
    {
        return view('pages.litigation.outstanding.check');
    }

    public function report()
    {
        return view('pages.litigation.outstanding.report');
    }

    public function store(Request $request){

        // $validatedData = $request->validate([
        //     'user_id' => 'required',
        //     'date' => 'required',
        //     'company_name' => 'required',
        //     'department' => 'required',
        //     'agreement_number' => 'required',
        //     'total_outstanding' => 'required',
        //     'from_date' => 'required',
        //     'till_date' => 'required',
        //     'incident_chronology' => 'required',
        //     'file_data_recap' => 'required',
        //     'file_document_proof' => 'required',
        //     'file_agreement' => 'required',
        //     'file_billing_proof	' => 'required',
        //     'file_disposition' => 'required',
        //     'file_other_document' => 'required',
        // ]);
#
        // $validatedData2 = $request->validate([
        //     // 'id' => 'required',

        // ]);
        // $validatedData[;'']
        $data = $request->all();
        $id = $data['id'];
        $user_id = $request->user_id;

        $name = $request->file('file_data_recap')->getClientOriginalName();
        $name2 = $request->file('file_document_proof')->getClientOriginalName();
        $name3 = $request->file('file_agreement')->getClientOriginalName();
        $name4 = $request->file('file_billing_proof')->getClientOriginalName();
        $name5 = $request->file('file_disposition')->getClientOriginalName();
        $name6 = $request->file('file_other_document')->getClientOriginalName();

        $data['file_data_recap'] = $request->file('file_data_recap')->storeAs('public/files/file_data_recap',$name,'public');
        $data['file_document_proof'] = $request->file('file_document_proof')->storeAs('public/files/file_document_proof',$name2,'public');
        $data['file_agreement'] = $request->file('file_agreement')->storeAs('public/files/file_agreement',$name3,'public');
        $data['file_billing_proof'] = $request->file('file_billing_proof')->storeAs('public/files/file_billing_proof',$name4,'public');
        $data['file_disposition'] = $request->file('file_disposition')->storeAs('public/files/file_disposition',$name5,'public');
        $data['file_other_document'] = $request->file('file_other_document')->storeAs('public/files/file_other_document',$name6,'public');



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
        Outstanding::create($data);
        Cs::create(['form_id'=> $id,'user_id'=> $user_id]);

        return redirect()->route('home');
    }
}
