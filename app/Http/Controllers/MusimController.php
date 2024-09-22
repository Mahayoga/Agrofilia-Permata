<?php

namespace App\Http\Controllers;

use App\Models\MusimModel;
use Illuminate\Http\Request;

class MusimController extends Controller
{
    public function edit($id) {
        $dataMusim = MusimModel::findOrFail($id);

        return view('pages.admin.musim.edit', compact('dataMusim'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'musim' => 'required'
        ]);

        $dataMusim = MusimModel::findOrFail($id);

        $dataMusim->update([
            'kondisi_musim' => $request->musim
        ]);

        return redirect('dashboard');
    }

    public function getMusim() {
        $dataMusim = MusimModel::findOrFail(1);

        return response()->json([
            'dataMusim' => $dataMusim->kondisi_musim
        ]);
    }
}
