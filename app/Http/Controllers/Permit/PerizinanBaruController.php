<?php

namespace App\Http\Controllers\Permit;

use Carbon\Carbon;
use App\Models\UploadFile;
use App\Models\ReasonPermit;
use App\Models\StatusPermit;
use Illuminate\Http\Request;
use App\Models\Permit\Permit;
use App\Http\Controllers\Controller;

class PerizinanBaruController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Permit::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'PRM' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'PRM' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'PRM' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'PRM' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'PRM' . date('dmy') . $item;
            }
        }

        return view('pages.permit.perizinan_baru.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
        ]);
    }

    public function check($id)
    {
        $data = Permit::where('id', $id)->firstOrFail();
        return view('pages.permit.perizinan_baru.check', [
            'data' => $data
        ]);
    }

    public function approval($id)
    {
        $data = Permit::where('id', $id)->firstOrFail();
        return view('pages.permit.perizinan_baru.approval', [
            'data' => $data
        ]);
    }

    public function store(Request $request)
    {

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
        $id_permit = $data['id'];

        $name1 = $request->file('file_disposition')->getClientOriginalName();
        $name2 = $request->file('file_document1')->getClientOriginalName();
        $name3 = $request->file('file_document2')->getClientOriginalName();
        $name4 = $request->file('file_document3')->getClientOriginalName();

        $data['file_disposition'] = $request->file('file_disposition')->storeAs('public/files/file_disposition', $name1, 'public');
        $data['file_document1'] = $request->file('file_document1')->storeAs('public/files/file_document1', $name2, 'public');
        $data['file_document2'] = $request->file('file_document2')->storeAs('public/files/file_document2', $name3, 'public');
        $data['file_document3'] = $request->file('file_document3')->storeAs('public/files/file_document3', $name4, 'public');

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
        StatusPermit::create(['permit_id' => $id_permit]);
        ReasonPermit::create(['permit_id' => $id_permit]);

        return redirect()->route('home');
    }
}
