<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function create() {
        return view('pages.admin.tambahpengguna.create');
    }

    public function show($id) {
        if(Auth::user()->role == "Super Admin" && $id != "show") {
            $dataUser = User::select()
                ->where("id", $id)
                ->get()[0];
            return view('pages.admin.profil.show', compact("dataUser"));
        } elseif(Auth::user()->role != "Super Admin" && $id != "show") {
            return view('layouts.errorpage.forbidden');
        }

        return view('pages.admin.profil.show', ['dataUser' => Auth::user()]);
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|max:255',
            'role' => 'required',
            'no_tlp' => 'required|max:16',
            'alamat' => 'required|max:255',
            'deskripsi' => 'required|max:400',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name' => $request->nama,
            'role' => $request->role,
            'nomor_telepon' => $request->no_tlp,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('dashboard/tabel-data');
    }
}
