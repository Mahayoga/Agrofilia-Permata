<?php

namespace App\Http\Controllers;

use App\Models\IndividualBlockSensor;
use Illuminate\Http\Request;
use App\Models\NotifikasiModeModel;
use App\Models\NotifikasiSensorModel;
use Illuminate\Support\Facades\DB;

class RiwayatDataController extends Controller
{
    public function index() {
        $totalJumlahAirPerHari = NotifikasiModeModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, waktu"))
            ->where("deskripsi", "Penyiraman Air Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahAirPerHari = NotifikasiModeModel::select(DB::raw("waktu"))
            ->where("deskripsi", "Penyiraman Air Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $totalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, waktu"))
            ->where("deskripsi", "Penyiraman Pupuk Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("waktu"))
            ->where("deskripsi", "Penyiraman Pupuk Telah Hidup!")
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahSuhuPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Suhu")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahSuhuPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Suhu")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahCahayaPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Intensitas Cahaya")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahCahayaPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Intensitas Cahaya")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahUdaraPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Udara")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahUdaraPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Udara")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahTanahPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Tanah")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahTanahPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Tanah")
            ->where("level_notifikasi", "Bahaya")
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $jumlahIDAir = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "jumlahID");
        $hariAir = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "hari");

        $jumlahIDPupuk = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "jumlahID");
        $hariPupuk = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "hari");

        $jumlahIDSuhu = $this->setJumlahDataSensor($totalJumlahSuhuPerHari, $hariPerTotalJumlahSuhuPerHari, "jumlahID");
        $hariSuhu = $this->setJumlahDataSensor($totalJumlahSuhuPerHari, $hariPerTotalJumlahSuhuPerHari, "hari");
        
        $jumlahIDCahaya = $this->setJumlahDataSensor($totalJumlahCahayaPerHari, $hariPerTotalJumlahCahayaPerHari, "jumlahID");
        $hariCahaya = $this->setJumlahDataSensor($totalJumlahCahayaPerHari, $hariPerTotalJumlahCahayaPerHari, "hari");
        
        $jumlahIDUdara = $this->setJumlahDataSensor($totalJumlahUdaraPerHari, $hariPerTotalJumlahUdaraPerHari, "jumlahID");
        $hariUdara = $this->setJumlahDataSensor($totalJumlahUdaraPerHari, $hariPerTotalJumlahUdaraPerHari, "hari");

        $jumlahIDTanah = $this->setJumlahDataSensor($totalJumlahTanahPerHari, $hariPerTotalJumlahTanahPerHari, "jumlahID");
        $hariTanah = $this->setJumlahDataSensor($totalJumlahTanahPerHari, $hariPerTotalJumlahTanahPerHari, "hari");
        
        $totalValueAir = array_sum($jumlahIDAir);
        $totalValuePupuk = array_sum($jumlahIDPupuk);
        $totalValueSuhu = array_sum($jumlahIDSuhu);
        $totalValueCahaya = array_sum($jumlahIDCahaya);
        $totalValueUdara = array_sum($jumlahIDUdara);
        $totalValueTanah = array_sum($jumlahIDTanah);
        return view("pages.admin.riwayatdata.index", compact(
            "jumlahIDAir", "hariAir", 
            "jumlahIDPupuk", "hariPupuk", 
            "jumlahIDSuhu", "hariSuhu", 
            "jumlahIDCahaya", "hariCahaya", 
            "jumlahIDUdara", "hariUdara", 
            "jumlahIDTanah", "hariTanah", 
            "totalValueAir", "totalValuePupuk", "totalValueSuhu", "totalValueCahaya",
            "totalValueUdara", "totalValueTanah"
        ));
    }

    public function show(Request $request) {
        $splitRequestDate = explode("-", $request->tgl);
        $limitDate = date("Y-m-d", mktime(0, 0, 0, $splitRequestDate[1], $splitRequestDate[2], $splitRequestDate[0]) - (86400 * 7));
        $totalJumlahAirPerHari = NotifikasiModeModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, waktu"))
            ->where("deskripsi", "Penyiraman Air Telah Hidup!")
            ->where("waktu", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("waktu", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahAirPerHari = NotifikasiModeModel::select(DB::raw("waktu"))
            ->where("deskripsi", "Penyiraman Air Telah Hidup!")
            ->where("waktu", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("waktu", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, waktu"))
            ->where("deskripsi", "Penyiraman Pupuk Telah Hidup!")
            ->where("waktu", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("waktu", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();

        $hariPerTotalJumlahPupukPerHari = NotifikasiModeModel::select(DB::raw("waktu"))
            ->where("deskripsi", "Penyiraman Pupuk Telah Hidup!")
            ->where("waktu", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("waktu", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(waktu, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahSuhuPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Suhu")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahSuhuPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Suhu")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahCahayaPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Intensitas Cahaya")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahCahayaPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Intensitas Cahaya")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $totalJumlahUdaraPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Udara")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahUdaraPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Udara")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit(7)
            ->get();
        $totalJumlahTanahPerHari = NotifikasiSensorModel::select(DB::raw("COUNT(id_notifikasi) AS jumlah, created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Tanah")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit("7")
            ->get();
        $hariPerTotalJumlahTanahPerHari = NotifikasiSensorModel::select(DB::raw("created_at"))
            ->where("nama_notifikasi", "Peringatan Kelembaban Tanah")
            ->where("level_notifikasi", "Bahaya")
            ->where("created_at", "<", DB::raw("'$request->tgl 23:59:59'"))
            ->where("created_at", ">", DB::raw("'$limitDate 23:59:59'"))
            ->groupBy(DB::raw("SUBSTRING(created_at, 1, 10)"))
            ->limit(7)
            ->get();
        $jumlahIDAir = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "jumlahID");
        $hariAir = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "hari");

        $jumlahIDPupuk = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "jumlahID");
        $hariPupuk = $this->setJumlahDataMode($totalJumlahAirPerHari, $hariPerTotalJumlahAirPerHari, "hari");

        $jumlahIDSuhu = $this->setJumlahDataSensor($totalJumlahSuhuPerHari, $hariPerTotalJumlahSuhuPerHari, "jumlahID");
        $hariSuhu = $this->setJumlahDataSensor($totalJumlahSuhuPerHari, $hariPerTotalJumlahSuhuPerHari, "hari");
        
        $jumlahIDCahaya = $this->setJumlahDataSensor($totalJumlahCahayaPerHari, $hariPerTotalJumlahCahayaPerHari, "jumlahID");
        $hariCahaya = $this->setJumlahDataSensor($totalJumlahCahayaPerHari, $hariPerTotalJumlahCahayaPerHari, "hari");
        
        $jumlahIDUdara = $this->setJumlahDataSensor($totalJumlahUdaraPerHari, $hariPerTotalJumlahUdaraPerHari, "jumlahID");
        $hariUdara = $this->setJumlahDataSensor($totalJumlahUdaraPerHari, $hariPerTotalJumlahUdaraPerHari, "hari");

        $jumlahIDTanah = $this->setJumlahDataSensor($totalJumlahTanahPerHari, $hariPerTotalJumlahTanahPerHari, "jumlahID");
        $hariTanah = $this->setJumlahDataSensor($totalJumlahTanahPerHari, $hariPerTotalJumlahTanahPerHari, "hari");
        
        $totalValueAir = array_sum($jumlahIDAir);
        $totalValuePupuk = array_sum($jumlahIDPupuk);
        $totalValueSuhu = array_sum($jumlahIDSuhu);
        $totalValueCahaya = array_sum($jumlahIDCahaya);
        $totalValueUdara = array_sum($jumlahIDUdara);
        $totalValueTanah = array_sum($jumlahIDTanah);
        return view("pages.admin.riwayatdata.index", compact(
            "jumlahIDAir", "hariAir", 
            "jumlahIDPupuk", "hariPupuk", 
            "jumlahIDSuhu", "hariSuhu", 
            "jumlahIDCahaya", "hariCahaya", 
            "jumlahIDUdara", "hariUdara", 
            "jumlahIDTanah", "hariTanah", 
            "totalValueAir", "totalValuePupuk", "totalValueSuhu", "totalValueCahaya",
            "totalValueUdara", "totalValueTanah"
        ));
        
    }

    public function setJumlahDataMode($totalJumlahData, $hariPerTotalJumlahDataPerHari, $param) {
        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahData); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahDataPerHari[(count($hariPerTotalJumlahDataPerHari) - 1) - $i]->waktu);
            $dateArr = explode(" ", $arrTemp[2]);

            $hari[6 - $i] = date("Y-m-d", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]));
            $jumlahID[6 - $i] = $totalJumlahData[(count($totalJumlahData) - 1) - $i]->jumlah;
        }
        if($param === "jumlahID") {
            return $jumlahID;
        } else if($param === "hari") {
            return $hari;
        }
    }
    public function setJumlahDataSensor($totalJumlahData, $hariPerTotalJumlahDataPerHari, $param) {
        $jumlahID = [0, 0, 0, 0, 0, 0, 0];
        $hari = [0, 0, 0, 0, 0, 0, 0];
        for($i = 0; $i < count($totalJumlahData); $i++) {
            $arrTemp = explode("-", $hariPerTotalJumlahDataPerHari[(count($hariPerTotalJumlahDataPerHari) - 1) - $i]->created_at);
            $dateArr = explode(" ", $arrTemp[2]);

            $hari[6 - $i] = date("Y-m-d", mktime(0, 0, 0, $arrTemp[1], $dateArr[0], $arrTemp[0]));
            $jumlahID[6 - $i] = $totalJumlahData[(count($totalJumlahData) - 1) - $i]->jumlah;
        }
        if($param === "jumlahID") {
            return $jumlahID;
        } else if($param === "hari") {
            return $hari;
        }
    }
}
