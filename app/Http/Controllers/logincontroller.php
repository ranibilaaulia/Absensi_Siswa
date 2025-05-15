<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard-admin');
            } elseif (Auth::user()->role == 'siswa') {
                return redirect()->route('dashboard-siswa');
            } elseif (Auth::user()->role == 'ortu') {
                return redirect()->route('dashboard-ortu');
            }
            return redirect()->route('dashboard-admin');
        }
        return back()->with('loginError','Login Gagal');
    }

    public function view()
    {
        return view('utama.login_admin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Ensure the redirection route exists and is correct
        return redirect()->route('login-view')->with('success', 'Logout berhasil.');
    }

}
