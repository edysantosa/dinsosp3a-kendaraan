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
        // dd(config('app.url'));
        // dd(Carbon::today());
        // dd(Carbon::now()->endOfWeek());
        // dd(Jadwal::with(['user', 'pengemudi', 'kendaraan'])->whereDate('waktu', Carbon::today()->format('Y-m-d'))->latest('waktu')->get());
        return view('home', [
            'today' => Jadwal::with(['user', 'pengemudi', 'kendaraan'])->whereDate('waktu', Carbon::today())->orderBy('waktu', 'asc')->get(),
            'nextday' => Jadwal::with(['user', 'pengemudi', 'kendaraan'])->whereBetween('waktu', [Carbon::tomorrow(), Carbon::now()->endOfWeek()])->orderBy('waktu', 'asc')->get(),
            'menuList' => $this->menuList,
        ]);
    }
}
