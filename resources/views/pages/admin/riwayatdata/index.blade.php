@extends('layouts.app')
@section('content')
<div class="row mt-4">
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-bars1" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Penyiraman Pupuk</h6>
        <p class="text-sm ">Total Penyiraman Pupuk per Minggu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">info</i>
          <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Penyiraman Pupuk</h6>
        <p class="text-sm ">Frekuensi Penyiraman Pupuk pada Semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm" id="jumlahKaliPenyiramanPupuk"></td>
              <script>
                $.get("{{ route('dataSensorPupukPerHari') }}", function(data) {
                  document.getElementById("jumlahKaliPenyiramanPupuk").innerText = data.totalValue + " kali";
                });
              </script>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-success shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-bars1" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Penyiraman Air</h6>
        <p class="text-sm ">Total Penyiraman Air per Minggu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">info</i>
          <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Penyiraman Air</h6>
        <p class="text-sm ">Frekuensi Penyiraman Air pada Semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm">10 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Dua</td>
              <td class="text-sm">9 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tiga</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Empat</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Lima</td>
              <td class="text-sm">5 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Enam</td>
              <td class="text-sm">4 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tujuh</td>
              <td class="text-sm">4 kali</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-bars1" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Suhu rata-rata</h6>
        <p class="text-sm ">Suhu rata-rata per Minggu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">info</i>
          <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Suhu rata-rata</h6>
        <p class="text-sm ">Frekuensi Suhu Normal pada Semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm">10 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Dua</td>
              <td class="text-sm">9 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tiga</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Empat</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Lima</td>
              <td class="text-sm">5 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Enam</td>
              <td class="text-sm">4 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tujuh</td>
              <td class="text-sm">4 kali</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-bars1" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Intensitas Cahaya rata-rata</h6>
        <p class="text-sm ">Intensitas Cahaya rata-rata per Minggu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">info</i>
          <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Intensitas Cahaya rata-rata</h6>
        <p class="text-sm ">Frekuensi Cahaya Normal pada Semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm">10 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Dua</td>
              <td class="text-sm">9 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tiga</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Empat</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Lima</td>
              <td class="text-sm">5 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Enam</td>
              <td class="text-sm">4 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tujuh</td>
              <td class="text-sm">4 kali</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-bars1" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Udara rata-rata</h6>
        <p class="text-sm ">Kelembaban Udara rata-rata per Minggu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">info</i>
          <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Udara rata-rata</h6>
        <p class="text-sm ">Frekuensi Kelembaban Udara Normal pada Semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm">10 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Dua</td>
              <td class="text-sm">9 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tiga</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Empat</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Lima</td>
              <td class="text-sm">5 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Enam</td>
              <td class="text-sm">4 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tujuh</td>
              <td class="text-sm">4 kali</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-bars1" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Tanah rata-rata</h6>
        <p class="text-sm ">Kelembaban Tanah rata-rata per Minggu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">info</i>
          <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Tanah rata-rata</h6>
        <p class="text-sm ">Frekuensi Kelembaban Tanah Normal pada Semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm">10 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Dua</td>
              <td class="text-sm">9 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tiga</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Empat</td>
              <td class="text-sm">7 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Lima</td>
              <td class="text-sm">5 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Enam</td>
              <td class="text-sm">4 kali</td>
            </tr>
            <tr>
              <td class="text-sm">Blok Tujuh</td>
              <td class="text-sm">4 kali</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection