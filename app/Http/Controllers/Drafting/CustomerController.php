<?php

namespace App\Http\Controllers\Drafting;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Drafting\Customer;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y',strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Customer::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'CS' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'CS' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'CS' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'CS' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'CS' . date('dmy') . $item;
            }
        }

        return view('pages.drafting.customer.index', [
            'no_kasus' => $no_kasus,
            'datenow'=>$datenow
        ]);
    }

    public function check()
    {
        return view('pages.drafting.customer.check');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $name1 = $request->file('file_mom')->getClientOriginalName();
        $name2 = $request->file('file_agreement_draft')->getClientOriginalName();
        $name3 = $request->file('file_claim_form')->getClientOriginalName();
        $name4 = $request->file('file_sk_menkumham')->getClientOriginalName();
        $name2 = $request->file('file_nib')->getClientOriginalName();
        $name3 = $request->file('file_npwp')->getClientOriginalName();
        $name4 = $request->file('file_business_permit')->getClientOriginalName();
        $name3 = $request->file('file_director_id_card')->getClientOriginalName();
        $name4 = $request->file('file_other')->getClientOriginalName();

        $data['file_mom'] = $request->file('file_mom')->storeAs('public/files/file_mom',$name1,'public');
        $data['file_agreement_draft'] = $request->file('file_agreement_draft')->storeAs('public/files/file_agreement_draft',$name2,'public');
        $data['file_claim_form'] = $request->file('file_claim_form')->storeAs('public/files/file_claim_form',$name3,'public');
        $data['file_sk_menkumham'] = $request->file('file_sk_menkumham')->storeAs('public/files/file_sk_menkumham',$name4,'public');
        $data['file_nib'] = $request->file('file_nib')->storeAs('public/files/file_nib',$name2,'public');
        $data['file_npwp'] = $request->file('file_npwp')->storeAs('public/files/file_npwp',$name3,'public');
        $data['file_business_permit'] = $request->file('file_business_permit')->storeAs('public/files/file_business_permit',$name4,'public');
        $data['file_director_id_card'] = $request->file('file_director_id_card')->storeAs('public/files/file_director_id_card',$name3,'public');
        $data['file_other'] = $request->file('file_other')->storeAs('public/files/file_other',$name4,'public');
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
        Customer::create($data);

        return redirect()->route('home');
    }
}
