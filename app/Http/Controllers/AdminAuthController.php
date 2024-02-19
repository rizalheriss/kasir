<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;

class AdminAuthController extends Controller
{
    //
    function index()
    {
        return view('admin.auth.login');
    }

    function dologin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);

        if (Auth::attempt($data)) {
            if (Auth::user()->role == 'admin') {
                return redirect('admin/kategori');
            } elseif (Auth::user()->role == 'pengguna') {
                return redirect('kasir/transaksi');
            }
        } else {
            // Jika login gagal, redirect ke halaman login dengan pesan error
            return back()->with('loginError', 'Email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout();
        Alert::error('Logout', 'Anda Berhasil Log out');
        return redirect()->raoute('login');
    }

    public function dashboard()
    {
        $totalUsers = User::count();
        $totalProduk = Produk::count();
        $totalKategori = kategori::count();

        $totalPenjualan = Transaksi::sum('total');
        return view('dashboard', compact('totalUsers', 'totalProduk', 'totalPenjualan', 'totalKategori'));
    }
}