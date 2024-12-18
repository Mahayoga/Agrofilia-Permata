<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function index() {
        $dataUser = User::all();

        return view('pages.admin.pengguna.index', compact('dataUser'));
    }

    public function create() {
        if(Auth::user()->role == "Super Admin") {
            return view('pages.admin.pengguna.create');
        } else {
            abort('403', 'Forbidden');
        }
    }

    public function edit($id) {
        $dataUser = User::select()
            ->where('id', $id)
            ->get();
        
        return view('pages.admin.pengguna.edit', compact('dataUser'));
    }

    public function show($id) {
        if(Auth::user()->role == "Super Admin" && $id != "show") {
            $dataUser = User::select()
                ->where("id", $id)
                ->get()[0];
            return view('pages.admin.profil.show', compact("dataUser"));
        } elseif(Auth::user()->role != "Super Admin" && $id != "show") {
            abort('403', 'Forbidden');
        }

        return view('pages.admin.profil.show', ['dataUser' => Auth::user()]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|max:255',
            'role' => 'required',
            'no_tlp' => 'required|max:16',
            'alamat' => 'required|max:255',
            'deskripsi' => 'required|max:400',
            'email' => 'required|email'
        ]);

        $dataUser = User::findOrFail($id);

        $dataUser->update([
            'name' => $request->nama,
            'role' => $request->role,
            'nomor_telepon' => $request->no_tlp,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi,
            'email' => $request->email
        ]);

        return redirect('pengguna');
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

        return redirect('pengguna');
    }

    public function destroy($id) {
        $dataUser = User::findOrFail($id);

        $dataUser->delete();

        return redirect('pengguna');
    }
}
