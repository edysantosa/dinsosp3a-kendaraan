<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username'    => 'required',
            'password' => 'required',
        ]);
        
        if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
            return back()->with('status', 'Username atau password salah');
        }

        return redirect()->route('dashboard');
    }

    // public function xxx()
    // {
    //     User::create([
    //         'name'     => "Administrator",
    //         'username' => "admin",
    //         'email'    => "edy.santosa.p@gmail.com",
    //         'password' => Hash::make("123"),
    //     ]);
    // }
}
