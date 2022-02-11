<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permit\Permit;
use Yajra\DataTables\Facades\DataTables;

class DatabaseController extends Controller
{
    public function index()
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
