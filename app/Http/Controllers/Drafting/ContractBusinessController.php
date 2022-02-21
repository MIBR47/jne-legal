<?php

namespace App\Http\Controllers\Drafting;

use Illuminate\Http\Request;
use App\Models\Drafting\Customer;
use App\Http\Controllers\Controller;
use App\Models\Drafting\VendorSupplier;
use Yajra\DataTables\Facades\DataTables;

class ContractBusinessController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {

            $query = Customer::all();
            // $query['vendor'] = VendorSupplier::all();
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($cd) {
                    return '
                        <a href = "' . route('cd-check', $cd->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.legal-drafting.index');
    }

    public function table_vendor()
    {

        if (request()->ajax()) {

            // $query = Customer::all();
            $query = VendorSupplier::all();
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($cd) {
                    return '
                        <a href = "' . route('cd-check-vendor', $cd->id) . '">
                            <button type="button" class="text-white bg-blue-700
                                hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                font-medium rounded-full text-sm px-5 py-4 text-center mr-2 mb-2
                                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Check
                            </button>
                        </a>
                    ';
                })

                ->rawColumns(['action'])
                ->make();
        }
        // return view('pages.legal-drafting.index');
    }

    public function check($id)
    {
        $data = Customer::where('id', $id)->firstOrFail();
        return view('pages.drafting.contract-business.check', [
            'data' => $data
        ]);
    }

    public function checkPost(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Customer::findOrFail($id);

                $item->update([$data, 'note' => $request->note, 'status' => 'RETURNED BY CONTRACT BUSINESS']);

                return redirect()->route('cd-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = Customer::findOrFail($id);

                $item->update([$data, 'note' => $request->note, 'status' => 'APPROVED BY CONTRACT BUSINESS']);

                return redirect()->route('cd-dashboard');
                break;
        }
    }

    public function checkVendor($id)
    {
        $data = VendorSupplier::where('id', $id)->firstOrFail();
        return view('pages.drafting.contract-business.checkVendor', [
            'data' => $data
        ]);
    }

    public function checkVendorPost(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = VendorSupplier::findOrFail($id);

                $item->update([$data, 'note' => $request->note, 'status' => 'RETURNED BY CONTRACT BUSINESS']);

                return redirect()->route('cd-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = VendorSupplier::findOrFail($id);

                $item->update([$data, 'note' => $request->note, 'status' => 'APPROVED BY CONTRACT BUSINESS']);

                return redirect()->route('cd-dashboard');
                break;
        }
    }

    public function update($id)
    {
        $data = Customer::where('id', $id)->firstOrFail();
        return view('pages.drafting.customer.check', [
            'data' => $data
        ]);
    }

    public function updatePost(Request $request, $id)
    {
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Customer::findOrFail($id);

                if ($request->file('file_internal_memo'))
                    $name1 = $request->file('file_internal_memo')->getClientOriginalName();
                $data['file_internal_memo'] = $request->file('file_internal_memo')->storeAs('public/files/file_internal_memo', $name1, 'public');

                $item->update([$data, 'file_internal_memo' => $data['file_internal_memo'], 'note' => $request->note, 'status' => 'UPDATED BY USER']);

                return redirect()->route('home');
                break;

            case 'approve':
                $data = $request->all();

                $item = Customer::findOrFail($id);

                $item->update([$data, 'note' => $request->note, 'status' => 'UPDATED BY USER']);

                return redirect()->route('home');
                break;
        }
    }
}
