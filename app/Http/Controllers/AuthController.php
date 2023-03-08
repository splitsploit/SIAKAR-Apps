<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        if(Auth::guard('employee')->attempt([
            'nik' => $request->nik,
            'password' => $request->password,
        ])) {
            return redirect()->route('dashboard.index');
        }

        return "Login Gagal";
    }

    public function logoutEmployee() {
        Auth::guard('employee')->logout();
        return redirect('/');
    }
}
