<?php

namespace App\Http\Controllers;

use App\Models\KebunModel;
use App\Models\BlokModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class KebunController extends Controller {

    public function create() {
        return view("pages.admin.kebun.create");
    }

    public function edit($id) {
        $dataKebun = KebunModel::select()
            ->where('id_kebun', $id)
            ->get();

        $lokasiKebun = explode(',', $dataKebun[0]->lokasi_kebun);

        return view('pages.admin.kebun.edit', compact('dataKebun', 'lokasiKebun'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|max:255',
            'daerah' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'provinsi' => 'required|max:255'
        ]);

        $dataKebun = KebunModel::findOrFail($id);

        $dataKebun->update([
            'nama_kebun' => $request->nama,
            'nama_daerah' => $request->daerah,
            'lokasi_kebun' => $request->kecamatan . ", " . $request->provinsi,
        ]);

        return redirect("dashboard/tabel-data")->with("success","Data berhasil di edit!");
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|max:255',
            'daerah' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'provinsi' => 'required|max:255'
        ]);

        KebunModel::create([
            'nama_kebun' => $request->nama,
            'nama_daerah' => $request->daerah,
            'lokasi_kebun' => $request->kecamatan . ", " . $request->provinsi,
            'status_kebun' => "Normal"
        ]);

        return redirect("dashboard/tabel-data")->with("success","Data berhasil di simpan!");
    }

    public function kebunOptions() {
        $daftarKebun = KebunModel::select()->get();
        return response()->json([
            "daftar_kebun" => $daftarKebun
        ]);
    }

    public function blokOptions($id_kebun) {
        $daftarBlok = BlokModel::select()->get();
        return response()->json([
            "daftar_blok" => $daftarBlok,
            "dataLength" => count($daftarBlok)
        ]);
    }

    public function ambilDataStatusKebun($id) {
        $dataStatus = BlokModel::select()
            ->where("id_detail_blok", $id)
            ->get();

        $resultUmur = 0;
        $jenisUmur = "";
        $yearsNow = (int)date("Y");
        $yearsInData = (int)explode("-", $dataStatus[0]->created_at)[0];
        $resultUmur = $yearsNow - $yearsInData;
        $jenisUmur = "Tahun";
        if(($yearsNow - $yearsInData) == 0) {
            $monthNow = (int)date("m");
            $monthInData = (int)explode("-", $dataStatus[0]->created_at)[1];
            $resultUmur = $monthNow - $monthInData;
            $jenisUmur = "Bulan";
            if(($monthNow - $monthInData) == 0) {
                $dayNow = (int)date("d");
                $dayInData = (int)explode(" ", explode("-", $dataStatus[0]->created_at)[2])[0];
                $resultUmur = $dayNow - $dayInData;
                $jenisUmur = "Hari";
            }
        }

        return response()->json([
            "jenisUmur" => $jenisUmur,
            "umurBlok" => $resultUmur,
            "tahunBlok" => $yearsInData,
            "statusBlok" => $dataStatus[0]->status_blok,
            "faseBlok" => $dataStatus[0]->fase_tanaman
        ]);
    }

    public function ambilDataKebunBerbahaya() {
        $dataKebun = KebunModel::select()
            ->join("detail_blok", "kebun.id_kebun", "=", "detail_blok.id_kebun",)
            ->where("kondisi_blok", "Bahaya")
            ->orWhere("kondisi_blok", "Peringatan")
            ->get();

        return response()->json([
            'dataKebun' => $dataKebun,
            'count' => count($dataKebun)
        ]);
    }

    public function ambilDataTotalBlok() {
        $dataTotalBlok = BlokModel::select(DB::raw("COUNT(id_detail_blok) AS jumlah"))
            ->get();
        $dataTotalKebun = KebunModel::select(DB::raw("COUNT(id_kebun) AS jumlah"))
            ->get();
        return response()->json([
            'jumlahKebun' => $dataTotalKebun[0]->jumlah,
            'jumlahBlok' => $dataTotalBlok[0]->jumlah
        ]);
    }
}