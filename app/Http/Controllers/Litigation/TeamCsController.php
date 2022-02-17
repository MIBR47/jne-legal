<?php

namespace App\Http\Controllers\Litigation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Litigation\Cs;
use Yajra\DataTables\Facades\DataTables;

class TeamCsController extends Controller
{

    public function index()
    {
        if (request()->ajax())
        {
            $name = 'LEGAL MANAGER';
            $query = Cs::query()->where('status', 'LIKE', '%'.$name.'%')->orWhere('status', '=', 'PENDING');
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($cs){
                    if ($cs->status == 'PENDING') {
                        return '
                        <a href = "'.route('cs-update',$cs->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                        </a>
                    ';
                    } else {
                        return '
                        <a href = "'.route('cs-finish',$cs->id).'">
                            <button type="button" class="text-white bg-red-700
                                hover:bg-red-800 focus:ring-4 focus:ring-red-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Finish
                            </button>
                        </a>
                    ';
                    }
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.litigation.team-cs.index');
    }

    public function update($id)
    {
        $data = Cs::with(['other','fraud','customerDispute','outstanding'])->where('id', $id)->firstOrFail();
        return view('pages.litigation.team-cs.update', [
            'data' => $data
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        $data = $request->all();

        $item = Cs::findOrFail($id);

        $name1 = $request->file('file_consumer_dispute_case_form')->getClientOriginalName();
        $name2 = $request->file('file_operational_delivery_chronology')->getClientOriginalName();
        $name3 = $request->file('file_cs_handling_chronology')->getClientOriginalName();
        $name4 = $request->file('file_pod_evidence')->getClientOriginalName();
        $name5 = $request->file('file_receipt_proof')->getClientOriginalName();
        $name6 = $request->file('file_proof_of_documentation1')->getClientOriginalName();
        $name7 = $request->file('file_proof_of_documentation2')->getClientOriginalName();
        $name8 = $request->file('file_proof_of_documentation3')->getClientOriginalName();
        $name9 = $request->file('file_other_supporting_document')->getClientOriginalName();

        $data['file_consumer_dispute_case_form'] = $request->file('file_consumer_dispute_case_form')->storeAs('public/files/file_consumer_dispute_case_form',$name1,'public');
        $data['file_operational_delivery_chronology'] = $request->file('file_operational_delivery_chronology')->storeAs('public/files/file_operational_delivery_chronology',$name2,'public');
        $data['file_cs_handling_chronology'] = $request->file('file_cs_handling_chronology')->storeAs('public/files/file_cs_handling_chronology',$name3,'public');
        $data['file_pod_evidence'] = $request->file('file_pod_evidence')->storeAs('public/files/file_pod_evidence',$name4,'public');
        $data['file_receipt_proof'] = $request->file('file_receipt_proof')->storeAs('public/files/file_receipt_proof',$name5,'public');
        $data['file_proof_of_documentation1'] = $request->file('file_proof_of_documentation1')->storeAs('public/files/file_proof_of_documentation1',$name6,'public');
        $data['file_proof_of_documentation2'] = $request->file('file_proof_of_documentation2')->storeAs('public/files/file_proof_of_documentation2',$name7,'public');
        $data['file_proof_of_documentation3'] = $request->file('file_proof_of_documentation3')->storeAs('public/files/file_proof_of_documentation3',$name8,'public');
        $data['file_other_supporting_document'] = $request->file('file_other_supporting_document')->storeAs('public/files/file_other_supporting_document',$name9,'public');

        $item->update([
            'file_consumer_dispute_case_form' => $data['file_consumer_dispute_case_form'],
            'file_operational_delivery_chronology' => $data['file_operational_delivery_chronology'],
            'file_cs_handling_chronology' => $data['file_cs_handling_chronology'],
            'file_pod_evidence' => $data['file_pod_evidence'],
            'file_receipt_proof' => $data['file_receipt_proof'],
            'file_proof_of_documentation1' => $data['file_proof_of_documentation1'],
            'file_proof_of_documentation2' => $data['file_proof_of_documentation2'],
            'file_proof_of_documentation3' => $data['file_proof_of_documentation3'],
            'file_other_supporting_document' => $data['file_other_supporting_document'],
            'nominal_indemnity_offer' => $data['nominal_indemnity_offer'],
            'status' => 'DILENGKAPI OLEH CS']);

        return redirect()->route('team-cs-dashboard');
    }

    public function finish($id)
    {
        $data = Cs::where('id', $id)->firstOrFail();
        return view('pages.litigation.team-cs.finish', [
            'data' => $data
        ]);
    }

    public function finishPost(Request $request, $id)
    {
        $user = auth()->user()->name;
        $data = $request->all();

        $item = Cs::findOrFail($id);

        // if($request->file('file_response_letter'))
        // dd($data['file_response_letter']);
        $name1 = $request->file('file_response_letter')->getClientOriginalName();
        $data['file_response_letter'] = $request->file('file_response_letter')->storeAs('public/files/file_response_letter',$name1,'public');

        $name2 = $request->file('file_proof_shipment')->getClientOriginalName();
        $data['file_proof_shipment'] = $request->file('file_proof_shipment')->storeAs('public/files/file_proof_shipment',$name2,'public');

        $item->update([
            'file_response_letter' => $data['file_response_letter'],
            'file_proof_shipment' => $data['file_proof_shipment'],
            'status' => 'FINISHED BY '.$user.' TEAM CS']);

        return redirect()->route('team-cs-dashboard');
    }
}
