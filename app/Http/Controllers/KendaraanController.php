<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KendaraanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        parent::__construct();
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Kendaraan::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button type="button" class="btn btn-primary trigger" data-trigger="edit"><i class="mdi mdi-pencil"></i></button>
                    <button type="button" class="btn btn-danger trigger" data-trigger="delete"><i class="mdi mdi-delete-sweep"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->setRowId('id')
                ->make(true);
        }

        return view('kendaraan', [
            'menuList' => $this->menuList,
        ]);
    }

    public function destroy(Kendaraan $kendaraan)
    {
        // $this->authorize('delete', $post);
        // $post->delete();
        // return back();

        $kendaraan->delete();
        return response()->json([
            'name' => $kendaraan
        ]);
    }
}
