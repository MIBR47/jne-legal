<?php

namespace App\Http\Controllers;

use App\Models\Drafting\Customer;
use Illuminate\Http\Request;
use App\Models\Permit\Permit;
use App\Models\Drafting\Lease;
use App\Models\Drafting\VendorSupplier;
use App\Models\Litigation\CustomerDispute;
use App\Models\Litigation\Fraud;
use App\Models\Litigation\Other;
use App\Models\Litigation\Outstanding;
use Yajra\DataTables\Facades\DataTables;

class DatabaseController extends Controller
{
    public function index()
    {
        if (request()->ajax())
        {

            $query = Customer::where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }

    public function dataVendor()
    {
        if (request()->ajax())
        {

            $query = VendorSupplier::where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }

    public function dataLease()
    {
        if (request()->ajax())
        {

            $query = Lease::where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }

    public function dataCustomerDispute()
    {
        if (request()->ajax())
        {

            $query = CustomerDispute::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }

    public function dataFraud()
    {
        if (request()->ajax())
        {

            $query = Fraud::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }

    public function dataOutstanding()
    {
        if (request()->ajax())
        {

            $query = Outstanding::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }

    public function dataOther()
    {
        if (request()->ajax())
        {

            $query = Other::with('cs')->where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }

    public function dataPerizinan()
    {
        if (request()->ajax())
        {

            $query = Permit::where('user_id', '=', auth()->user()->id);
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($permit){
                    return '
                        <a href = "'.route('perizinan-baru-check',$permit->id).'">
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

        return view('pages.database.index');
    }
}
