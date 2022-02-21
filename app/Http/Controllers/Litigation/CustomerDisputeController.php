<?php

namespace App\Http\Controllers\Litigation;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Http\Controllers\Controller;
use App\Models\Litigation\CustomerDispute;

class CustomerDisputeController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = CustomerDispute::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'CD' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'CD' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'CD' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'CD' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'CD' . date('dmy') . $item;
            }
        }

        return view('pages.litigation.customer_dispute.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
        ]);
    }

    public function check()
    {
        return view('pages.litigation.customer_dispute.check');
    }

    public function report()
    {
        return view('pages.litigation.customer_dispute.report');
    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $id = $data['id'];
        $user_id = $request->user_id;

        $validatedData = $request->validate([
            'id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'case_type' => 'required',
            'causative_factor' => 'required',
            'causative_factor_others' => '',
            'total_loss' => 'required',
            'connote' => 'required',
            'incident_date' => 'required',
            'customer' => 'required',
            'shipping_type' => 'required',
            'assurance' => 'required',
            'incident_chronology' => 'required',
            'shipping_form' => 'required',
            'detail_shipping_form' => 'required',
            'file_witness_testimony' => 'required',
            'file_letter_document' => 'required',
            'file_claim_form_document' => 'required',
            'file_other_document' => 'required',
            'file_evidence' => 'required',
            'file_document_completeness' => 'required',
            'file_other_evidence' => 'required',
        ]);
        #
        $id = $validatedData['id'];
        // $validatedData2 = $request->validate([
        //     // 'id' => 'required',

        // ]);
        // $validatedData[;'']

        // $data = $request->all();

        $name = time() . '-' . $request->file('file_witness_testimony')->getClientOriginalName();
        $name2 = time() . '-' . $request->file('file_letter_document')->getClientOriginalName();
        $name3 = time() . '-' . $request->file('file_claim_form_document')->getClientOriginalName();
        $name4 = time() . '-' . $request->file('file_other_document')->getClientOriginalName();
        $name5 = time() . '-' . $request->file('file_evidence')->getClientOriginalName();
        $name6 = time() . '-' . $request->file('file_document_completeness')->getClientOriginalName();
        $name7 = time() . '-' . $request->file('file_other_evidence')->getClientOriginalName();

        // $path = $request->file('file_witness_testimony')->store('public/files');
        // $path2= $request->file('file_letter_document')->store('public/files');
        // $path3 = $request->file('file_claim_form_document')->store('public/files');
        // $path4 = $request->file('file_other_document')->store('public/files');
        // $path5 = $request->file('file_evidence')->store('public/files');
        // $path6 = $request->file('file_document_completeness')->store('public/files');
        // $path7 = $request->file('file_other_evidence')->store('public/files');

        $validatedData['file_witness_testimony'] = $request->file('file_witness_testimony')->storeAs('public/litigation', $name, 'public');
        $validatedData['file_letter_document'] = $request->file('file_letter_document')->storeAs('public/litigation', $name2, 'public');
        $validatedData['file_claim_form_document'] = $request->file('file_claim_form_document')->storeAs('public/litigation', $name3, 'public');
        $validatedData['file_other_document'] = $request->file('file_other_document')->storeAs('public/litigation', $name4, 'public');
        $validatedData['file_evidence'] = $request->file('file_evidence')->storeAs('public/litigation', $name5, 'public');
        $validatedData['file_document_completeness'] = $request->file('file_document_completeness')->storeAs('public/litigation', $name6, 'public');
        $validatedData['file_other_evidence'] = $request->file('file_other_evidence')->storeAs('public/litigation', $name7, 'public');

        // $save = new CustomerDispute;

        // $save->name = $name;
        // $save->name = $name2;
        // $save->name = $name3;
        // $save->name = $name4;
        // $save->name = $name5;
        // $save->name = $name6;
        // $save->name = $name7;

        // $save->path = $path;
        // $save->path = $path2;
        // $save->path = $path3;
        // $save->path = $path4;
        // $save->path = $path5;
        // $save->path = $path6;
        // $save->path = $path7;

        // UploadFile::create($validatedData2);
        CustomerDispute::create($validatedData);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('home');
    }
}
