<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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

        return view('kendaraan.index', [
            'menuList' => $this->menuList,
        ]);
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', [
            'menuList' => $this->menuList,
            'kendaraan' => $kendaraan->exists ? $kendaraan : null,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis'     => 'required|max:255',
            'merek'     => 'required|max:255',
            'kapasitas' => 'required|integer|numeric',
            'pelat'     => 'required|max:255',
            'pajak'     => 'required',
        ]);

        if (isset($request->id)) {
            $kendaraan = Kendaraan::find($request->id)->update([
                'jenis'     => $request->jenis,
                'merek'     => $request->merek,
                'kapasitas' => $request->kapasitas,
                'pelat'     => $request->pelat,
                'pajak'     => Carbon::createFromFormat('d/m/Y', $request->pajak)->format('Y-m-d'),
            ]);
        } else {
            Kendaraan::create([
                'jenis'     => $request->jenis,
                'merek'     => $request->merek,
                'kapasitas' => $request->kapasitas,
                'pelat'     => $request->pelat,
                'pajak'     => Carbon::createFromFormat('d/m/Y', $request->pajak)->format('Y-m-d'),
            ]);
        }

        return redirect()->route('kendaraan');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        // $this->authorize('delete', $post);
        // $post->delete();
        // return back();

        $kendaraan->delete();
        return response()->json([
            'name' => $kendaraan,
            'message' => 'Data kendaraan dihapus',
        ]);
    }
}
