<?php

namespace App\Http\Controllers\Litigation;

use App\Http\Controllers\Controller;
use App\Models\Litigation\Cs;
use App\Models\Litigation\Fraud;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FraudController extends Controller
{
    public function index()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Fraud::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $no_kasus = 'FR' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $no_kasus = 'FR' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $no_kasus = 'FR' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $no_kasus = 'FR' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $no_kasus = 'FR' . date('dmy') . $item;
            }
        }

        return view('pages.litigation.fraud.index', [
            'no_kasus' => $no_kasus,
            'datenow' => $datenow
        ]);
    }

    public function check()
    {
        return view('pages.litigation.fraud.check');
    }

    public function report()
    {
        return view('pages.litigation.fraud.report');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'case_type' => 'required',
            'causative_factor' => 'required',
            'perpetrator' => 'required',
            'unit' => 'required',
            'total_loss' => 'required',
            'incident_date' => 'required',
            'incident_scane' => 'required',
            'incident_chronology' => 'required',
            'fraud_classification' => 'required',
            'witness1' => 'required',
            'witness1_department' => 'required',
            'witness2' => 'required',
            'witness2_department' => 'required',
            'file_document_proof' => 'required',
            'file_perpetrator_statement' => 'required',
            'file_witness_statement' => 'required',
            'file_other' => 'required',
            'file_evidence_documentation' => 'required',
            'file_investigation_document' => 'required',
            'file_other_evidence' => 'required',
        ]);
        // $data = $request->all();
        $id = $validatedData['id'];
        $user_id = $request->user_id;

        $name1 = time() . '-' . $request->file('file_document_proof')->getClientOriginalName();
        $name2 = time() . '-' . $request->file('file_perpetrator_statement')->getClientOriginalName();
        $name3 = time() . '-' . $request->file('file_witness_statement')->getClientOriginalName();
        $name4 = time() . '-' . $request->file('file_other')->getClientOriginalName();
        $name2 = time() . '-' . $request->file('file_evidence_documentation')->getClientOriginalName();
        $name3 = time() . '-' . $request->file('file_investigation_document')->getClientOriginalName();
        $name4 = time() . '-' . $request->file('file_other_evidence')->getClientOriginalName();

        $validatedData['file_document_proof'] = $request->file('file_document_proof')->storeAs('public/litigation', $name1, 'public');
        $validatedData['file_perpetrator_statement'] = $request->file('file_perpetrator_statement')->storeAs('public/litigation', $name2, 'public');
        $validatedData['file_witness_statement'] = $request->file('file_witness_statement')->storeAs('public/litigation', $name3, 'public');
        $validatedData['file_other'] = $request->file('file_other')->storeAs('public/litigation', $name4, 'public');
        $validatedData['file_evidence_documentation'] = $request->file('file_evidence_documentation')->storeAs('public/litigation', $name2, 'public');
        $validatedData['file_investigation_document'] = $request->file('file_investigation_document')->storeAs('public/litigation', $name3, 'public');
        $validatedData['file_other_evidence'] = $request->file('file_other_evidence')->storeAs('public/litigation', $name4, 'public');

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
        Fraud::create($validatedData);
        Cs::create(['form_id' => $id, 'user_id' => $user_id]);

        return redirect()->route('home');
    }
}
