<?php

namespace App\Http\Controllers\Permit;

use Illuminate\Http\Request;
use App\Models\Permit\Permit;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class LegalPermitController extends Controller
{
    public function index()
    {
        if (request()->ajax())
        {

            $query = Permit::all();
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-approval',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Approval
                            </button>
                        </a>
                        <a href = "'.route('perizinan-baru-update',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Update
                            </button>
                        </a>
                        <a href = "'.route('perizinan-baru-finish',$permit->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Finish
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.permit.legal-permit.index');
    }

    public function store(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Permit::findOrFail($id);

                $item->update([$data, 'status' => 'RETURN']);

                return redirect()->route('legal-permit-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = Permit::findOrFail($id);

                $item->update([$data, 'status' => 'IN PROGRESS']);

                return redirect()->route('legal-permit-dashboard');
                break;
        }
    }

    public function checkPost(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Permit::findOrFail($id);

                $item->update([$data, 'status' => 'RETURNED BY LEGAL PERMIT']);

                return redirect()->route('legal-permit-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = Permit::findOrFail($id);

                $item->update([$data, 'status' => 'APPROVED BY LEGAL PERMIT']);

                return redirect()->route('legal-permit-dashboard');
                break;
        }
    }

    public function update($id)
    {
        $data = Permit::where('id', $id)->firstOrFail();
        return view('pages.permit.perizinan_baru.update', [
            'data' => $data
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        $data = $request->all();

        $item = Permit::findOrFail($id);

        if($request->file('latest_skpd'))
        $name1 = $request->file('latest_skpd')->getClientOriginalName();
        $data['latest_skpd'] = $request->file('latest_skpd')->storeAs('public/permit',$name1,'public');

        $item->update([
            'latest_skpd' => $data['latest_skpd'],
            'note' => $request->note,
            'status' => 'PROCESSED']);

        return redirect()->route('legal-permit-dashboard');
    }

    public function finish($id)
    {
        $data = Permit::where('id', $id)->firstOrFail();
        return view('pages.permit.perizinan_baru.finish', [
            'data' => $data
        ]);
    }

    public function finishPost(Request $request, $id)
    {
        $data = $request->all();

        $item = Permit::findOrFail($id);

        if($request->file('latest_skpd'))
        $name1 = $request->file('latest_skpd')->getClientOriginalName();
        $data['latest_skpd'] = $request->file('latest_skpd')->storeAs('public/permit',$name1,'public');

        if($request->file('proof_of_payment'))
        $name2 = $request->file('proof_of_payment')->getClientOriginalName();
        $data['proof_of_payment'] = $request->file('proof_of_payment')->storeAs('public/permit',$name2,'public');

        $item->update([
            'latest_skpd' => $data['latest_skpd'],
            'proof_of_payment' => $data['proof_of_payment'],
            'note' => $request->note,
            'status' => 'CLOSE']);

        return redirect()->route('legal-permit-dashboard');
    }
}
