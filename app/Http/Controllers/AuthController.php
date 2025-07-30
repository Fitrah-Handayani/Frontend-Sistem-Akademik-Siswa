<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect berdasarkan role
            $role = Auth::user()->role;
            switch ($role) {
                case 'siswa':
                    return redirect()->route('siswa.index');
                case 'guru':
                    return redirect()->route('guru.index');
                case 'admin':
                    return redirect()->route('admin.index');
                case 'walikelas':
                    return redirect()->route('walikelas.index');
                case 'orangtua':
                    return redirect()->route('orangtua.index');
                default:
                    return redirect('/home');
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
    