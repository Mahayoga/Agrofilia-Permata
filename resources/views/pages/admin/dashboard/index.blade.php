@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-header p-3 pt-2">
        <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
          <i class="material-icons opacity-10">weekend</i>
        </div>
        <div class="text-end pt-1">
          <p class="text-sm mb-0 text-capitalize">Musim Bulan Ini</p>
          <h4 class="mb-0">Kemarau</h4>
        </div>
      </div>
      <hr class="dark horizontal my-0">
      <div class="card-footer p-3">
        <p class="mb-0">Bulan saat ini: <span class="text-success text-sm font-weight-bolder">
          @php
            echo date("F");
          @endphp
        </span></p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 col-md-12 mb-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-header">
            <h6 class="mb-0 ">Pilih kebun yang akan ditampilkan</h6>
          </div>
          <div class="card-body py-0 pb-4">
            <select class="select-option p-3" name="kebun" id="kebun" onchange="testRes()">
              <script>
                $.get("{{ route('listKebun') }}", function(data) {
                  // console.log(data.daftar_kebun[0].nama_kebun);
                  const theElement = document.createElement("option");
                  const contentElement = document.createTextNode(data.daftar_kebun[0].nama_kebun);
                  theElement.setAttribute("value", data.daftar_kebun[0].id_kebun);
                  theElement.appendChild(contentElement);

                  const parentElement = document.getElementById("kebun");
                  parentElement.appendChild(theElement);
                });
              </script>
              <option value="notSelected">-- Pilih --</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-header">
            <h6 class="mb-0 ">Pilih blok dari kebun yang akan ditampilkan</h6>
          </div>
          <div class="card-body py-0 pb-4">
            <select class="select-option p-3" name="kebun" id="kebun-blok" onchange="setStatusOfKebun()">
              <option class="" value="notSelected">-- Pilih --</option>
              <script>
                function testRes() {
                  let theKebunOption = document.getElementById("kebun");
                  let theOption = document.getElementById("kebun-blok");
                  let oldOption = document.querySelectorAll(".availableOpt");

                  for (var i = 0; i < oldOption.length; i++) {
                    oldOption[i].remove();
                  }
                  if (theKebunOption.value != "notSelected") {
                    $.get("{{ route('listBlok', ['id_kebun' => " + theOption.value + "]) }}", function(data) {
                      for (var i = 0; i < data.dataLength; i++) {
                        const theElement = document.createElement("option");
                        const contentElement = document.createTextNode(data.daftar_blok[i].nama_blok);
                        theElement.setAttribute("value", data.daftar_blok[i].id_detail_blok);
                        theElement.setAttribute("class", "availableOpt");
                        theElement.appendChild(contentElement);

                        const parentElement = document.getElementById("kebun-blok");
                        parentElement.appendChild(theElement);
                      }
                    });
                  }
                }
              </script>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-header">
            <h6 class="mb-0 ">Status singkat kebun</h6>
          </div>
          <div class="card-body py-0 pb-4">
            <div class="d-flex align-items-center">
              <span class="text-md font-weight-bold text-dark">Umur:</span>
              <span>&nbsp;</span>
              <span class="text-sm" id="umur">&nbsp;2.5 tahun (30 bulan)</span>
            </div>
            <div class="d-flex align-items-center">
              <span class="text-md font-weight-bold text-dark">Tahun Tanam:</span>
              <span>&nbsp;</span>
              <span class="text-sm" id="tahunTanam">&nbsp;2020</span>
            </div>
            <div class="d-flex align-items-center">
              <span class="text-md font-weight-bold text-dark">Status Perlakuan:</span>
              <span>&nbsp;</span>
              <span class="text-sm" id="masaTanaman">&nbsp;Masa Kritis</span>
            </div>
            <div class="d-flex align-items-center">
              <span class="text-md font-weight-bold text-dark">Status Tanaman:</span>
              <span>&nbsp;</span>
              <span class="text-sm" id="statusTanaman">&nbsp;Generatif</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-pupuk" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Penyiraman Pupuk</h6>
        <p class="text-sm ">Total Penyiraman Pupuk per Minggu pada Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> data terakhir <span id="updateTimePupuk"></span> yang lalu </p>
          <script>
            $.get("{{ route('pupukLastUpdateTime') }}", function(data) {
              document.getElementById("updateTimePupuk").innerText = data.timeResult;
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Penyiraman Pupuk</h6>
        <p class="text-sm ">Frekuensi Penyiraman Pupuk pada Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Kebun dan Blok</th>
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
    <div class="card z-index-2  ">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-air" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 "> Penyiraman Air </h6>
        <p class="text-sm "> Total Penyiraman Air per Minggu pada Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> data terakhir <span id="updateTimeAir"></span> yang lalu </p>
          <script>
            $.get("{{ route('airLastUpdateTime') }}", function(data) {
              document.getElementById("updateTimeAir").innerText = data.timeResult;
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Penyiraman Air</h6>
        <p class="text-sm ">Frekuensi Penyiraman Air pada Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm" id="jumlahKaliPenyiramanAir"></td>
              <script>
                $.get("{{ route('dataSensorAirPerHari') }}", function(data) {
                  document.getElementById("jumlahKaliPenyiramanAir").innerText = data.totalValue + " kali";
                });
              </script>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-dark border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-suhu" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Suhu rata-rata</h6>
        <p class="text-sm ">Suhu rata-rata dari Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> data terakhir <span id="updateTimeSuhu"></span> yang lalu </p>
          <script>
            $.get("{{ route('suhuLastUpdateTime') }}", function(data) {
              document.getElementById("updateTimeSuhu").innerText = data.timeResult;
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Suhu rata-rata</h6>
        <p class="text-sm ">Suhu diatas normal dari semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm" id="jumlahKaliSuhuBahaya">10 kali</td>
              <script>
                $.get("{{ route('dataNotifikasiSuhu') }}", function(data) {
                  document.getElementById("jumlahKaliSuhuBahaya").innerText = data.dataNotif + " kali";
                });
              </script>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-dark border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-cahaya" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Intensitas Cahaya rata-rata</h6>
        <p class="text-sm ">Intensitas Cahaya rata-rata dari Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> data terakhir <span id="updateTimeCahaya"></span> yang lalu </p>
          <script>
            $.get("{{ route('cahayaLastUpdateTime') }}", function(data) {
              document.getElementById("updateTimeCahaya").innerText = data.timeResult;
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Intensitas Cahaya rata-rata</h6>
        <p class="text-sm ">Intensitas Cahaya diatas normal dari semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm" id="jumlahKaliCahayaBahaya">10 kali</td>
              <script>
                $.get("{{ route('dataNotifikasiCahaya') }}", function(data) {
                  document.getElementById("jumlahKaliCahayaBahaya").innerText = data.dataNotif + " kali";
                });
              </script>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-dark border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-udara" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Udara rata-rata</h6>
        <p class="text-sm ">Kelembaban Udara rata-rata dari Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> data terakhir <span id="updateTimeUdara"></span> yang lalu </p>
          <script>
            $.get("{{ route('udaraLastUpdateTime') }}", function(data) {
              document.getElementById("updateTimeUdara").innerText = data.timeResult;
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Udara rata-rata</h6>
        <p class="text-sm ">Kelembaban Udara diatas normal dari semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm" id="jumlahKaliUdaraBahaya">10 kali</td>
              <script>
                $.get("{{ route('dataNotifikasiUdara') }}", function(data) {
                  document.getElementById("jumlahKaliUdaraBahaya").innerText = data.dataNotif + " kali";
                });
              </script>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-8 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
        <div class="bg-gradient-info shadow-dark border-radius-lg py-3 pe-1">
          <div class="chart">
            <canvas id="chart-tanah" class="chart-canvas" height="170"></canvas>
          </div>
        </div>
      </div>
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Tanah rata-rata</h6>
        <p class="text-sm ">Kelembaban Tanah rata-rata dari Kebun Satu</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <i class="material-icons text-sm my-auto me-1">schedule</i>
          <p class="mb-0 text-sm"> data terakhir <span id="updateTimeTanah"></span> yang lalu </p>
          <script>
            $.get("{{ route('tanahLastUpdateTime') }}", function(data) {
              document.getElementById("updateTimeTanah").innerText = data.timeResult;
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 mt-4 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body">
        <h6 class="mb-0 ">Kelembaban Tanah rata-rata</h6>
        <p class="text-sm ">Kelembaban Tanah diatas normal dari semua Kebun</p>
        <hr class="dark horizontal">
        <div class="d-flex ">
          <table width="100%">
            <tr>
              <th>Lokasi Blok</th>
              <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
            </tr>
            <tr>
              <td class="text-sm">Blok Satu</td>
              <td class="text-sm" id="jumlahKaliTanahBahaya">10 kali</td>
              <script>
                $.get("{{ route('dataNotifikasiTanah') }}", function(data) {
                  document.getElementById("jumlahKaliTanahBahaya").innerText = data.dataNotif + " kali";
                });
              </script>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Live Kondisi Kebun</h6>
            <p class="text-sm mb-0">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              Terdapat Total<span id="totalKebun" class="font-weight-bold ms-1"></span> dan<span id="totalBlok" class="font-weight-bold ms-1"></span>
              <script>
                $.get("{{ route('ambilDataTotalBlok') }}", function(data) {
                  document.getElementById("totalKebun").innerText = data.jumlahKebun + " kebun";
                  document.getElementById("totalBlok").innerText = data.jumlahBlok + " blok";
                });
              </script>
            </p>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <div class="dropdown float-lg-end pe-4">
              <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v text-secondary"></i>
              </a>
              <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi Kebun</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tindakan</th>
              </tr>
            </thead>
            <tbody id="tbodyKebun">
              <script>
                $.get("{{ route('ambilDataKebunBerbahaya') }}", function(data) {
                  let tbody = document.getElementById("tbodyKebun");
                  for (var i = 0; i < data.dataKebun.length; i++) {
                    let tableRow = document.createElement("tr");
                    let tableData1 = document.createElement("td");
                    let divElement1 = document.createElement("div");
                    let divElement2 = document.createElement("div");
                    let headingSix1 = document.createElement("h6");

                    let tableData2 = document.createElement("td");
                    let spanElement1 = document.createElement("span");

                    let tableData3 = document.createElement("td");
                    let spanElement2 = document.createElement("span");

                    divElement1.setAttribute("class", "d-flex px-2 py-1");
                    divElement2.setAttribute("class", "d-flex flex-column justify-content-center");
                    headingSix1.setAttribute("class", "mb-0 text-sm");
                    if (data.dataKebun[i].kondisi_blok == "Normal") {
                      spanElement1.setAttribute("class", "badge badge-sm bg-gradient-success");
                      spanElement2.appendChild(document.createTextNode("Tidak Ada"));
                    } else if (data.dataKebun[i].kondisi_blok == "Peringatan") {
                      spanElement1.setAttribute("class", "badge badge-sm bg-gradient-warning");
                      spanElement2.appendChild(document.createTextNode("Terdapat Masalah"));
                    } else if (data.dataKebun[i].kondisi_blok == "Bahaya") {
                      spanElement1.setAttribute("class", "badge badge-sm bg-gradient-danger");
                      spanElement2.appendChild(document.createTextNode("Perlu Tindakan Segera!"));
                    }
                    tableData3.setAttribute("class", "align-middle text-sm");
                    spanElement2.setAttribute("class", "text-xs font-weight-bold");

                    headingSix1.appendChild(document.createTextNode(data.dataKebun[i].nama_kebun + " - " + data.dataKebun[i].nama_blok));
                    spanElement1.appendChild(document.createTextNode(data.dataKebun[i].kondisi_blok));

                    tableData3.appendChild(spanElement2);
                    tableData2.appendChild(spanElement1);

                    divElement2.appendChild(headingSix1);
                    divElement1.appendChild(divElement2);
                    tableData1.appendChild(divElement1);

                    tableRow.appendChild(tableData1);
                    tableRow.appendChild(tableData2);
                    tableRow.appendChild(tableData3);

                    tbody.appendChild(tableRow);
                  }
                });
              </script>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var chartPupuk = document.getElementById("chart-pupuk").getContext("2d");
  var chartAir = document.getElementById("chart-air").getContext("2d");
  var chartSuhu = document.getElementById("chart-suhu").getContext("2d");
  var chartCahaya = document.getElementById("chart-cahaya").getContext("2d");
  var chartUdara = document.getElementById("chart-udara").getContext("2d");
  var chartTanah = document.getElementById("chart-tanah").getContext("2d");

  var pupukChart = new Chart(chartPupuk, {
    type: "bar",
    data: {
      labels: [],
      datasets: [{
        label: "",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: [],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var airChart = new Chart(chartAir, {
    type: "bar",
    data: {
      labels: [],
      datasets: [{
        label: "",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: [],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var suhuChart = new Chart(chartSuhu, {
    type: "bar",
    data: {
      labels: [],
      datasets: [{
        label: "",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: [],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var cahayaChart = new Chart(chartCahaya, {
    type: "bar",
    data: {
      labels: [],
      datasets: [{
        label: "",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: [],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var udaraChart = new Chart(chartUdara, {
    type: "bar",
    data: {
      labels: [],
      datasets: [{
        label: "",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: [],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var tanahChart = new Chart(chartTanah, {
    type: "bar",
    data: {
      labels: [],
      datasets: [{
        label: "",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: [],
        maxBarThickness: 6
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });

  function suhuPerHari() {
    $.get("{{ route('dataSensorAirPerHari') }}", function(data) {
      if (data.countID7 != 0) {
        airChart.data.datasets[0].data.unshift(data.countID7);
        airChart.data.labels.unshift(data.hariID7);
      }
      if (data.countID6 != 0) {
        airChart.data.datasets[0].data.unshift(data.countID6);
        airChart.data.labels.unshift(data.hariID6);
      }
      if (data.countID5 != 0) {
        airChart.data.datasets[0].data.unshift(data.countID5);
        airChart.data.labels.unshift(data.hariID5);
      }
      if (data.countID4 != 0) {
        airChart.data.datasets[0].data.unshift(data.countID4);
        airChart.data.labels.unshift(data.hariID4);
      }
      if (data.countID3 != 0) {
        airChart.data.datasets[0].data.unshift(data.countID3);
        airChart.data.labels.unshift(data.hariID3);
      }
      if (data.countID2 != 0) {
        airChart.data.datasets[0].data.unshift(data.countID2);
        airChart.data.labels.unshift(data.hariID2);
      }
      if (data.countID1 != 0) {
        airChart.data.datasets[0].data.unshift(data.countID1);
        airChart.data.labels.unshift(data.hariID1);
      }

      for (var i = 0; airChart.data.datasets[0].data.length != 7; i++) {
        airChart.data.datasets[0].data.unshift(0);
        airChart.data.labels.unshift("---");
      }
      airChart.update();
    });
    $.get("{{ route('dataSensorPupukPerHari') }}", function(data) {
      if (data.countID7 != 0) {
        pupukChart.data.datasets[0].data.unshift(data.countID7);
        pupukChart.data.labels.unshift(data.hariID7);
      }
      if (data.countID6 != 0) {
        pupukChart.data.datasets[0].data.unshift(data.countID6);
        pupukChart.data.labels.unshift(data.hariID6);
      }
      if (data.countID5 != 0) {
        pupukChart.data.datasets[0].data.unshift(data.countID5);
        pupukChart.data.labels.unshift(data.hariID5);
      }
      if (data.countID4 != 0) {
        pupukChart.data.datasets[0].data.unshift(data.countID4);
        pupukChart.data.labels.unshift(data.hariID4);
      }
      if (data.countID3 != 0) {
        pupukChart.data.datasets[0].data.unshift(data.countID3);
        pupukChart.data.labels.unshift(data.hariID3);
      }
      if (data.countID2 != 0) {
        pupukChart.data.datasets[0].data.unshift(data.countID2);
        pupukChart.data.labels.unshift(data.hariID2);
      }
      if (data.countID1 != 0) {
        pupukChart.data.datasets[0].data.unshift(data.countID1);
        pupukChart.data.labels.unshift(data.hariID1);
      }

      for (var i = 0; pupukChart.data.datasets[0].data.length != 7; i++) {
        pupukChart.data.datasets[0].data.unshift(0);
        pupukChart.data.labels.unshift("---");
      }
      pupukChart.update();
    });
    $.get("{{ route('dataSensorSuhuPerHari') }}", function(data) {
      if (data.countID7 != 0) {
        suhuChart.data.datasets[0].data.unshift(data.countID7);
        suhuChart.data.labels.unshift(data.hariID7);
      }
      if (data.countID6 != 0) {
        suhuChart.data.datasets[0].data.unshift(data.countID6);
        suhuChart.data.labels.unshift(data.hariID6);
      }
      if (data.countID5 != 0) {
        suhuChart.data.datasets[0].data.unshift(data.countID5);
        suhuChart.data.labels.unshift(data.hariID5);
      }
      if (data.countID4 != 0) {
        suhuChart.data.datasets[0].data.unshift(data.countID4);
        suhuChart.data.labels.unshift(data.hariID4);
      }
      if (data.countID3 != 0) {
        suhuChart.data.datasets[0].data.unshift(data.countID3);
        suhuChart.data.labels.unshift(data.hariID3);
      }
      if (data.countID2 != 0) {
        suhuChart.data.datasets[0].data.unshift(data.countID2);
        suhuChart.data.labels.unshift(data.hariID2);
      }
      if (data.countID1 != 0) {
        suhuChart.data.datasets[0].data.unshift(data.countID1);
        suhuChart.data.labels.unshift(data.hariID1);
      }

      for (var i = 0; suhuChart.data.datasets[0].data.length != 7; i++) {
        suhuChart.data.datasets[0].data.unshift(0);
        suhuChart.data.labels.unshift("---");
      }
      suhuChart.update();
    });
    $.get("{{ route('dataSensorCahayaPerHari') }}", function(data) {
      if (data.countID7 != 0) {
        cahayaChart.data.datasets[0].data.unshift(data.countID7);
        cahayaChart.data.labels.unshift(data.hariID7);
      }
      if (data.countID6 != 0) {
        cahayaChart.data.datasets[0].data.unshift(data.countID6);
        cahayaChart.data.labels.unshift(data.hariID6);
      }
      if (data.countID5 != 0) {
        cahayaChart.data.datasets[0].data.unshift(data.countID5);
        cahayaChart.data.labels.unshift(data.hariID5);
      }
      if (data.countID4 != 0) {
        cahayaChart.data.datasets[0].data.unshift(data.countID4);
        cahayaChart.data.labels.unshift(data.hariID4);
      }
      if (data.countID3 != 0) {
        cahayaChart.data.datasets[0].data.unshift(data.countID3);
        cahayaChart.data.labels.unshift(data.hariID3);
      }
      if (data.countID2 != 0) {
        cahayaChart.data.datasets[0].data.unshift(data.countID2);
        cahayaChart.data.labels.unshift(data.hariID2);
      }
      if (data.countID1 != 0) {
        cahayaChart.data.datasets[0].data.unshift(data.countID1);
        cahayaChart.data.labels.unshift(data.hariID1);
      }

      for (var i = 0; cahayaChart.data.datasets[0].data.length != 7; i++) {
        cahayaChart.data.datasets[0].data.unshift(0);
        cahayaChart.data.labels.unshift("---");
      }
      cahayaChart.update();
    });
    $.get("{{ route('dataSensorUdaraPerHari') }}", function(data) {
      if (data.countID7 != 0) {
        udaraChart.data.datasets[0].data.unshift(data.countID7);
        udaraChart.data.labels.unshift(data.hariID7);
      }
      if (data.countID6 != 0) {
        udaraChart.data.datasets[0].data.unshift(data.countID6);
        udaraChart.data.labels.unshift(data.hariID6);
      }
      if (data.countID5 != 0) {
        udaraChart.data.datasets[0].data.unshift(data.countID5);
        udaraChart.data.labels.unshift(data.hariID5);
      }
      if (data.countID4 != 0) {
        udaraChart.data.datasets[0].data.unshift(data.countID4);
        udaraChart.data.labels.unshift(data.hariID4);
      }
      if (data.countID3 != 0) {
        udaraChart.data.datasets[0].data.unshift(data.countID3);
        udaraChart.data.labels.unshift(data.hariID3);
      }
      if (data.countID2 != 0) {
        udaraChart.data.datasets[0].data.unshift(data.countID2);
        udaraChart.data.labels.unshift(data.hariID2);
      }
      if (data.countID1 != 0) {
        udaraChart.data.datasets[0].data.unshift(data.countID1);
        udaraChart.data.labels.unshift(data.hariID1);
      }

      for (var i = 0; udaraChart.data.datasets[0].data.length != 7; i++) {
        udaraChart.data.datasets[0].data.unshift(0);
        udaraChart.data.labels.unshift("---");
      }
      udaraChart.update();
    });
    $.get("{{ route('dataSensorTanahPerHari') }}", function(data) {
      if (data.countID7 != 0) {
        tanahChart.data.datasets[0].data.unshift(data.countID7);
        tanahChart.data.labels.unshift(data.hariID7);
      }
      if (data.countID6 != 0) {
        tanahChart.data.datasets[0].data.unshift(data.countID6);
        tanahChart.data.labels.unshift(data.hariID6);
      }
      if (data.countID5 != 0) {
        tanahChart.data.datasets[0].data.unshift(data.countID5);
        tanahChart.data.labels.unshift(data.hariID5);
      }
      if (data.countID4 != 0) {
        tanahChart.data.datasets[0].data.unshift(data.countID4);
        tanahChart.data.labels.unshift(data.hariID4);
      }
      if (data.countID3 != 0) {
        tanahChart.data.datasets[0].data.unshift(data.countID3);
        tanahChart.data.labels.unshift(data.hariID3);
      }
      if (data.countID2 != 0) {
        tanahChart.data.datasets[0].data.unshift(data.countID2);
        tanahChart.data.labels.unshift(data.hariID2);
      }
      if (data.countID1 != 0) {
        tanahChart.data.datasets[0].data.unshift(data.countID1);
        tanahChart.data.labels.unshift(data.hariID1);
      }

      for (var i = 0; tanahChart.data.datasets[0].data.length != 7; i++) {
        tanahChart.data.datasets[0].data.unshift(0);
        tanahChart.data.labels.unshift("---");
      }
      tanahChart.update();
    });
  }
  suhuPerHari();

  function setStatusOfKebun() {
    let selectOption = document.getElementById("kebun-blok");
    let umurText = document.getElementById("umur");
    let tahunTanamText = document.getElementById("tahunTanam");
    let masaTanamanText = document.getElementById("masaTanaman");
    let statusTanamanText = document.getElementById("statusTanaman");

    if (selectOption.value != "notSelected") {
      let baseUrl = "{{ route('ambilDataStatusKebun', ['id' => '__ID__']) }}";
      let finalUrl = baseUrl.replace("__ID__", selectOption.value);
      $.get(finalUrl, function(data) {
        if (data.jenisUmur == "Hari") {
          umurText.innerText = data.umurBlok + " hari yang lalu";
        }
        if (data.jenisUmur == "Bulan") {
          umurText.innerText = data.umurBlok + " bulan yang lalu";
        }
        if (data.jenisUmur == "Tahun") {
          umurText.innerText = data.umurBlok + " tahun yang lalu";
        }

        tahunTanamText.innerText = data.tahunBlok;
        masaTanamanText.innerText = data.statusBlok;
        statusTanamanText.innerText = data.faseBlok;
      });
    }
  }
</script>
@endsection