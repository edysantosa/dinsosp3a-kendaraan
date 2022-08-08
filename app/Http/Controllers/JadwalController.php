<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;

class JadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        parent::__construct();
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Jadwal::with(['user', 'pengemudi', 'kendaraan'])->latest()->get();
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

        return view('kendaraan.index', [
            'menuList' => $this->menuList,
        ]);
    }
}
