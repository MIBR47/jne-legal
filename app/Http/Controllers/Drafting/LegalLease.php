<?php

namespace App\Http\Controllers\Drafting;

use Illuminate\Http\Request;
use App\Models\Drafting\Lease;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class LegalLease extends Controller
{
    public function index()
    {
        if (request()->ajax())
        {

            $query = Lease::all();
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($lease){
                    return '
                        <a href = "'.route('legal-lease-check',$lease->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                        <a href = "'.route('legal-lease-finish',$lease->id).'">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Finish
                            </button>
                        </a>
                    ';
                })

            ->rawColumns(['action'])
            ->make();
        }

        return view('pages.legal-lease.index');
    }

    public function check($id)
    {
        $data = Lease::where('id', $id)->firstOrFail();
        return view('pages.legal-drafting.check', [
            'data' => $data
        ]);
    }

    public function checkPost(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Lease::findOrFail($id);

                $item->update([$data, 'note' => $request->note ,'status' => 'RETURNED BY LEGAL LEASE']);

                return redirect()->route('legal-lease-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = Lease::findOrFail($id);

                $item->update([$data, 'note' => $request->note , 'status' => 'IN PROGRESS']);

                return redirect()->route('legal-lease-dashboard');
                break;
        }
    }

    public function finish($id)
    {
        $data = Lease::where('id', $id)->firstOrFail();
        return view('pages.legal-drafting.finish', [
            'data' => $data
        ]);
    }

    public function finishPost(Request $request, $id)
    {
        $data = $request->all();

        $item = Lease::findOrFail($id);

        if($request->file('file_agreement_draft'))
        $name1 = $request->file('file_agreement_draft')->getClientOriginalName();
        $data['file_agreement_draft'] = $request->file('file_agreement_draft')->storeAs('public/Drafting',$name1,'public');

        $item->update([
            'file_agreement_draft' => $data['file_agreement_draft'],
            'note' => $request->note,
            'status' => 'CLOSE']);

        return redirect()->route('legal-lease-dashboard');
    }
}
