<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        parent::__construct();
    }

    public function index()
    {
        return view('kendaraan', [
            'menuList' => $this->menuList,
        ]);
    }
}
