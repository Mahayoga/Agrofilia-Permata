<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create() {
        return view('pages.admin.tambahpengguna.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|max:255',
            'role' => 'required',
            'no_tlp' => 'required|max:16',
            'alamat' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name' => $request->nama,
            'role' => $request->role,
            'nomor_telepon' => $request->no_tlp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('dashboard/tabel-data');
    }
}
