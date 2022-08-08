<?php

namespace App\Http\Controllers;

use App\Models\Pengemudi;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PengemudiController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        parent::__construct();
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pengemudi::latest()->get();
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

        return view('pengemudi.index', [
            'menuList' => $this->menuList,
        ]);
    }

    public function edit(Pengemudi $pengemudi)
    {
        return view('pengemudi.edit', [
            'menuList' => $this->menuList,
            'pengemudi' => $pengemudi,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required|max:255',
            'nik'     => 'required|max:255',
            'hp'     => 'required|max:255',
        ]);

        if (isset($request->id)) {
            $pengemudi = Pengemudi::find($request->id)->update($request->only('nama', 'nik', 'hp'));
        } else {
            Pengemudi::create($request->only('nama', 'nik', 'hp'));
        }

        return redirect()->route('pengemudi');
    }

    public function destroy(Pengemudi $pengemudi)
    {
        // $this->authorize('delete', $post);
        // $post->delete();
        // return back();

        $pengemudi->delete();
        return response()->json([
            'name' => $pengemudi,
            'message' => 'Data pengemudi dihapus',
        ]);
    }
}
