<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KebunModel;
use App\Models\BlokModel;

class BlokController extends Controller
{
    public function create() {
        $dataKebun = KebunModel::select()
            ->get();
        return view('pages.admin.blok.create', compact('dataKebun'));
    }

    public function edit($id) {
        $dataKebun = KebunModel::select()
            ->get();
        
        $dataBlok = BlokModel::select()
            ->where('id_detail_blok', $id)
            ->get();

        return view('pages.admin.blok.edit', compact('dataKebun', 'dataBlok'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|max:255',
            'kebun_asal' => 'required',
            'status_blok' => 'required',
            'fase_tanaman' => 'required',
        ]);

        $dataBlok = BlokModel::findOrFail($id);

        $dataBlok->update([
            'nama_blok' => $request->nama,
            'status_blok' => $request->status_blok,
            'fase_tanaman' => $request->fase_tanaman,
            'id_kebun' => $request->kebun_asal
        ]);

        return redirect("dashboard/tabel-data/tabel-blok/" . $request->kebun_asal)->with("success","Data berhasil di edit!");
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|max:255',
            'kebun_asal' => 'required'
        ]);

        BlokModel::create([
            'nama_blok' => $request->nama,
            'kondisi_blok' => 'Normal',
            'status_blok' => 'Normal',
            'fase_tanaman' => 'Generatif',
            'id_kebun' => $request->kebun_asal
        ]);

        return redirect("dashboard/tabel-data/tabel-blok/" . $request->kebun_asal)->with("success","Data berhasil di simpan!");
    }
}
