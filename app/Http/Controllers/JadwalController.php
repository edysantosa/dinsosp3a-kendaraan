<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kendaraan;
use App\Models\Pengemudi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
            $data = Jadwal::with(['user', 'pengemudi', 'kendaraan'])->latest('waktu')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('surat_tugas', function ($row) {
                    if ($row->getFirstMediaUrl('surat_tugas')) {
                        return '<a type="button" href="'.$row->getFirstMedia('surat_tugas')->getFullUrl().'" target="_blank" class="btn btn-primary"><i class="mdi mdi-file-pdf"></i></a>';
                    } else {
                        return "";
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button type="button" class="btn btn-primary trigger" data-trigger="edit"><i class="mdi mdi-pencil"></i></button>
                    <button type="button" class="btn btn-danger trigger" data-trigger="delete"><i class="mdi mdi-delete-sweep"></i></button>';
                    return $actionBtn;
                })
                ->rawColumns(['action', 'surat_tugas'])
                ->setRowId('id')
                ->make(true);
        }

        return view('jadwal-edit', [
            'menuList' => $this->menuList,
            'pengemudi' => Pengemudi::all(),
            'kendaraan' => Kendaraan::all(),
        ]);
    }

    public function edit(Jadwal $jadwal)
    {
        return view('jadwal-edit', [
            'menuList' => $this->menuList,
            'pengemudi' => Pengemudi::all(),
            'kendaraan' => Kendaraan::all(),
            'jadwal' => $jadwal->exists ? $jadwal : null,
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->validate($request, [
                'waktu'     => 'required|date_format:d/m/Y H:i',
                'surat_tugas' => 'file|mimes:pdf',
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
                if ($request->has('surat_tugas')) {
                    $suratTugas = Storage::putFile('uploads', $request->file('surat_tugas'));
                    Jadwal::find($request->id)->getFirstMedia('surat_tugas')->delete();
                    Jadwal::find($request->id)->addMediaFromDisk($suratTugas, 'local')->toMediaCollection('surat_tugas');
                }
            } else {
                $jadwal = Jadwal::create([
                    'waktu'     => Carbon::createFromFormat('d/m/Y H:i', $request->waktu)->format('Y-m-d H:i'),
                    'kegiatan'     => $request->kegiatan,
                    'pengemudi_id'     => $request->pengemudi,
                    'kendaraan_id' => $request->kendaraan,
                    'user_id' => $request->user()->id,
                ]);
                if ($request->has('surat_tugas')) {
                    $suratTugas = Storage::putFile('uploads', $request->file('surat_tugas'));
                    $jadwal->addMediaFromDisk($suratTugas, 'local')->toMediaCollection('surat_tugas');
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        return redirect()->route('dashboard');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return response()->json([
            'name' => $jadwal,
            'message' => 'Data jadwal dihapus',
        ]);
    }
}
