<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // dd(Carbon::today());
        // dd(Jadwal::with(['user', 'pengemudi', 'kendaraan'])->whereDate('waktu', Carbon::today()->format('Y-m-d'))->latest('waktu')->get());
        return view('home', [
            'today' => Jadwal::with(['user', 'pengemudi', 'kendaraan'])->whereDate('waktu', Carbon::today())->latest('waktu')->get(),
            'nextday' => Jadwal::with(['user', 'pengemudi', 'kendaraan'])->whereDate('waktu', '>', Carbon::today())->latest('waktu')->get(),
            'menuList' => $this->menuList,
        ]);
    }
}
