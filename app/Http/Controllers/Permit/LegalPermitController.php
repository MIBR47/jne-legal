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
                            Check
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

                $item->update([$data, 'status' => 'APPROVE']);

                return redirect()->route('legal-permit-dashboard');
                break;
        }
    }
}
