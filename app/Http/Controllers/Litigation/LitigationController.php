<?php

namespace App\Http\Controllers\Litigation;

use Illuminate\Http\Request;
use App\Models\Litigation\Cs;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class LitigationController extends Controller
{
    public function index()
    {
        return view('pages.litigation.index');
    }

    public function dashboardLiti1()
    {
        if (request()->ajax())
        {

            $query = Cs::where('status', '=', 'DILENGKAPI OLEH CS');
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($cs){
                    return '
                        <a href = "'.route('legal1-check',$cs->id).'">
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

        return view('pages.litigation.legal-litigation-1.index');
    }

    public function check($id)
    {
        $data = Cs::where('id', $id)->firstOrFail();
        return view('pages.litigation.legal-litigation-1.check', [
            'data' => $data
        ]);
    }

    public function checkPost(Request $request, $id)
    {
        $user = auth()->user()->name;
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Cs::findOrFail($id);

                $item->update([
                    'note' => $request->note,
                    'status' => 'RETURNED BY '.$user.' LEGAL LITIGASI 1']);

                return redirect()->route('legal1-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = Cs::findOrFail($id);

                $name1 = $request->file('file_subpoena_response')->getClientOriginalName();

                $data['file_subpoena_response'] = $request->file('file_subpoena_response')->storeAs('public/litigation', $name1, 'public');

                $item->update([
                    'file_subpoena_response' => $data['file_subpoena_response'],
                    'case_analysis' => $request->case_analysis,
                    'status' => 'APPROVED BY '.$user.' LEGAL LITIGASI 1']);

                return redirect()->route('legal1-dashboard');
                break;
        }
    }

    public function dashboardLiti2()
    {
        if (request()->ajax())
        {
            $name = 'LEGAL LITIGASI 1';
            $query = Cs::where('status', 'LIKE', '%'.$name.'%');
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($cs){
                    return '
                        <a href = "'.route('legal2-check',$cs->id).'">
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

        return view('pages.litigation.legal-litigation-1.index');
    }

    public function checkLiti2($id)
    {
        $data = Cs::where('id', $id)->firstOrFail();
        return view('pages.litigation.legal-litigation-2.check', [
            'data' => $data
        ]);
    }

    public function checkLiti2Post(Request $request, $id)
    {
        $user = auth()->user()->name;
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Cs::findOrFail($id);

                $item->update([
                    'note' => $request->note,
                    'status' => 'RETURNED BY '.$user.' LEGAL LITIGASI 2']);

                return redirect()->route('legal2-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = Cs::findOrFail($id);

                $item->update([
                    'status' => 'APPROVED BY '.$user.' LEGAL LITIGASI 2']);

                return redirect()->route('legal2-dashboard');
                break;
        }
    }

    public function dashboardManager()
    {
        if (request()->ajax())
        {
            $name = 'LEGAL LITIGASI 2';
            $query = Cs::where('status', 'LIKE', '%'.$name.'%');
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($cs){
                    return '
                        <a href = "'.route('legal-manager-check',$cs->id).'">
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

        return view('pages.litigation.legal-litigation-1.index');
    }

    public function checkManager($id)
    {
        $data = Cs::where('id', $id)->firstOrFail();
        return view('pages.litigation.legal-manager.check', [
            'data' => $data
        ]);
    }

    public function checkManagerPost(Request $request, $id)
    {
        $user = auth()->user()->name;
        switch ($request->input('action')) {
            case 'return':
                $data = $request->all();

                $item = Cs::findOrFail($id);

                $item->update([
                    'note' => $request->note,
                    'status' => 'RETURNED BY '.$user.' LEGAL MANAGER']);

                return redirect()->route('legal-manager-dashboard');
                break;

            case 'approve':
                $data = $request->all();

                $item = Cs::findOrFail($id);

                $item->update([
                    'status' => 'APPROVED BY '.$user.' LEGAL MANAGER']);

                return redirect()->route('legal-manager-dashboard');
                break;
        }
    }
}
