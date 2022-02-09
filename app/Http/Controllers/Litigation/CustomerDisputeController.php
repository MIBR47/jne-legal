<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use App\Models\Litigation\CustomerDispute;
use Illuminate\Http\Request;

class CustomerDisputeController extends Controller
{
    public function index()
    {
        return view('pages.litigation.customer_dispute.index');
    }

    public function check()
    {
        return view('pages.litigation.customer_dispute.check');
    }

    public function report()
    {
        return view('pages.litigation.customer_dispute.report');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'user_id' => 'required',
            'date' => 'required',
            'case_type' => 'required',
            'causative_factor' => 'required',
            'causative_factor_others' => 'required',
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
        // $validatedData2 = $request->validate([
        //     // 'id' => 'required',
            
        // ]);
        // $validatedData[;'']

        // $data = $request->all();

        $name = $request->file('file_witness_testimony')->getClientOriginalName();
        $name2 = $request->file('file_letter_document')->getClientOriginalName();
        $name3 = $request->file('file_claim_form_document')->getClientOriginalName();
        $name4 = $request->file('file_other_document')->getClientOriginalName();
        $name5 = $request->file('file_evidence')->getClientOriginalName();
        $name6 = $request->file('file_document_completeness')->getClientOriginalName();
        $name7 = $request->file('file_other_evidence')->getClientOriginalName();
        
        // $path = $request->file('file_witness_testimony')->store('public/files');
        // $path2= $request->file('file_letter_document')->store('public/files');
        // $path3 = $request->file('file_claim_form_document')->store('public/files');
        // $path4 = $request->file('file_other_document')->store('public/files');
        // $path5 = $request->file('file_evidence')->store('public/files');
        // $path6 = $request->file('file_document_completeness')->store('public/files'); 
        // $path7 = $request->file('file_other_evidence')->store('public/files'); 

        $data['file_witness_testimony'] = $request->file('file_witness_testimony')->storeAs('public/files/file_witness_testimony',$name,'public');
        $data['file_letter_document'] = $request->file('file_letter_document')->storeAs('public/files/file_letter_document',$name2,'public');
        $data['file_claim_form_document'] = $request->file('file_claim_form_document')->storeAs('public/files/file_claim_form_document',$name3,'public');
        $data['file_other_document'] = $request->file('file_other_document')->storeAs('public/files/file_other_document',$name4,'public');
        $data['file_evidence'] = $request->file('file_evidence')->storeAs('public/files/file_evidence',$name5,'public');
        $data['file_document_completeness'] = $request->file('file_document_completeness')->storeAs('public/files/file_document_completeness',$name6,'public');
        $data['file_other_evidence'] = $request->file('file_other_evidence')->storeAs('public/files/file_other_evidence',$name7,'public');

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


        return redirect()->route('home');
    }   
}
