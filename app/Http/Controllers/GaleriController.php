<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriModel;

class GaleriController extends Controller
{
    public function index() {
        $dataGaleri = GaleriModel::select()
            ->get();
        return view('pages.admin.galeri.index', compact('dataGaleri'));
    }

    public function create() {
        return view('pages.admin.galeri.create');
    }

    public function show($id) {
        $dataGaleri = GaleriModel::select()
            ->where('id', $id)
            ->get();
        return view('pages.admin.galeri.show', compact('dataGaleri'));
    }

    public function edit($id) {
        $dataGaleri = GaleriModel::select()
            ->where('id', $id)
            ->get();
        return view('pages.admin.galeri.edit', compact('dataGaleri'));
    }

    public function destroy($id) {
        $dataGaleri = GaleriModel::findOrFail($id);

        $dataGaleri->delete();

        return redirect()->route('galeri.index')->with('success', 'Data berhasil dihapus!');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required:max:500',
            'file' => 'file|max:240',
        ]);

        $dataGaleri = GaleriModel::findOrFail($id);

        if($request->file == null) {
            $dataGaleri->update([
                'judul_galeri' => $request->judul,
                'deskripsi_galeri' => $request->deskripsi,
            ]);
        } else {
            $theFile = $request->file('file');
            $filePath = $theFile->store('galeri_uploads', 'public');
            $dataGaleri->update([
                'judul_galeri' => $request->judul,
                'deskripsi_galeri' => $request->deskripsi,
                'dokumentasi_kegiatan' => $filePath,
                'file_type' => $theFile->getMimeType()
            ]);
        }

        return redirect()->route('galeri.show', ['galeri' => $id])->with('success', 'Data berhasil di edit!');
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required:max:500',
            'file' => 'required|file|max:240',
        ]);

        $theFile = $request->file('file');
        $filePath = $theFile->store('galeri_uploads', 'public');

        GaleriModel::create([
            'judul_galeri' => $request->judul,
            'deskripsi_galeri' => $request->deskripsi,
            'dokumentasi_kegiatan' => $filePath,
            'file_type' => $theFile->getMimeType()
        ]);

        return redirect('galeri');
    }
}
