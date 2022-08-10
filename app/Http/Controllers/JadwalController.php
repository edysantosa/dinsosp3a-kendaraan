<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kendaraan;
use App\Models\Pengemudi;
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

        return view('jadwal-edit', [
            'menuList' => $this->menuList,
            'pengemudi' => Pengemudi::all(),
            'kendaraan' => Kendaraan::all(),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'waktu'     => 'required|date_format:d/m/Y H:i',
        ]);
        // dd($request->user()->id);
        
        if (isset($request->id)) {
            $jadwal = Jadwal::find($request->id)->update([
                'waktu'     => Carbon::createFromFormat('d/m/Y H:i', $request->waktu)->format('Y-m-d H:i'),
                'kegiatan'     => $request->kegiatan,
                'pengemudi_id'     => $request->pengemudi,
                'kendaraan_id' => $request->kendaraan,
                'user_id' => $request->user()->id,
            ]);
        } else {
            Jadwal::create([
                'waktu'     => Carbon::createFromFormat('d/m/Y H:i', $request->waktu)->format('Y-m-d H:i'),
                'kegiatan'     => $request->kegiatan,
                'pengemudi_id'     => $request->pengemudi,
                'kendaraan_id' => $request->kendaraan,
                'user_id' => $request->user()->id,
            ]);
        }

        return redirect()->route('dashboard');
    }
}
