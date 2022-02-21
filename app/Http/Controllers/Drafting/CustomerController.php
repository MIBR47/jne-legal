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
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
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
            'datenow' => $datenow
        ]);
    }

    public function check()
    {
        return view('pages.drafting.customer.check');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        // $validatedData = $request->validate([
        //     'id' => 'required',
        //     'user_id' => 'required',
        //     'first_party' => 'required',
        //     'second_party' => 'required',
        //     'third_party' => 'required',
        //     'agreement_draft' => 'required',
        //     'addendum' => 'required',
        //     'customer_type' => 'required',
        //     'assurance_goods' => 'required',
        //     'compensation' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'discount' => 'required',
        //     'other_point' => 'required',
        //     'shipping_type' => 'required',
        //     'shipping_type_description' => 'required',
        //     'file_mom' => 'required',
        //     'file_agreement_draft' => 'required',
        //     'file_claim_form' => 'required',
        //     'file_sk_menkumham' => 'required',
        //     'file_nib' => 'required',
        //     'file_npwp' => 'required',
        //     'file_business_permit	' => 'required',
        //     'file_npwp' => 'required',
        //     'file_business_permit	' => 'required',
        //     'file_other' => 'required',
        //     'status' => 'required',
        // ]);
        #

        $name1 = $request->file('file_mom')->getClientOriginalName();
        $name2 = $request->file('file_agreement_draft')->getClientOriginalName();
        $name3 = $request->file('file_claim_form')->getClientOriginalName();
        $name4 = $request->file('file_sk_menkumham')->getClientOriginalName();
        $name5 = $request->file('file_nib')->getClientOriginalName();
        $name6 = $request->file('file_npwp')->getClientOriginalName();
        $name7 = $request->file('file_business_permit')->getClientOriginalName();
        $name8 = $request->file('file_director_id_card')->getClientOriginalName();
        $name9 = $request->file('file_other')->getClientOriginalName();

        $data['file_mom'] = $request->file('file_mom')->storeAs('public/Drafting', $name1, 'public');
        $data['file_agreement_draft'] = $request->file('file_agreement_draft')->storeAs('public/Drafting', $name2, 'public');
        $data['file_claim_form'] = $request->file('file_claim_form')->storeAs('public/Drafting', $name3, 'public');
        $data['file_sk_menkumham'] = $request->file('file_sk_menkumham')->storeAs('public/Drafting', $name4, 'public');
        $data['file_nib'] = $request->file('file_nib')->storeAs('public/Drafting', $name5, 'public');
        $data['file_npwp'] = $request->file('file_npwp')->storeAs('public/Drafting', $name6, 'public');
        $data['file_business_permit'] = $request->file('file_business_permit')->storeAs('public/Drafting', $name7, 'public');
        $data['file_director_id_card'] = $request->file('file_director_id_card')->storeAs('public/Drafting', $name8, 'public');
        $data['file_other'] = $request->file('file_other')->storeAs('public/Drafting', $name9, 'public');
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
