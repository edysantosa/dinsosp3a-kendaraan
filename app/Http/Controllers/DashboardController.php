<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // dd($this->menuList->toArray());
        return view('index', [
            'menuList' => $this->menuList,
        ]);
    }
}
