@extends('layouts.app', ['breadcrum' => ['Riwayat Data'], 'currentBreadcrum' => 'Riwayat Data'])
@section('title', 'Riwayat Data')
@section('content')
<div class="row mt-4">
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="card p-4">
      <div class="card-title">
        <h6>Pilih Tanggal Spesifik</h6>
      </div>
      <div class="card-body p-2">
        <form action="{{ route('riwayatdata.show', ['riwayatdatum' => 'show']) }}" method="GET">
          <div class="form-group">
            <input type="date" name="tgl" id="" class="form-control border p-2">
            <small id="tgl" class="form-text text-xs text-muted">Tanggal yang dipilih akan ditampilkan 7 hari kebelakang</small>
          </div>
          <input class="btn btn-info my-2" type="submit" value="Terapkan!">
          <a class="btn btn-danger my-2" href="{{ route('riwayatdata.index') }}">Reset</a>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-4">
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
      <div class="col-lg-4 col-md-4 mt-4">
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
                  <td class="text-sm">{{ $totalValuePupuk }} kali</td>
                  </script>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-4">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-success shadow-primary border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-bars2" class="chart-canvas" height="170"></canvas>
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
      <div class="col-lg-4 col-md-4 mt-4">
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
                  <td class="text-sm">{{ $totalValueAir }} kali</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-4">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-bars3" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0 ">Suhu Tidak Normal</h6>
            <p class="text-sm ">Suhu melebihi batas normal per Minggu</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <i class="material-icons text-sm my-auto me-1">info</i>
              <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4">
        <div class="card z-index-2 h-100">
          <div class="card-body">
            <h6 class="mb-0 ">Suhu</h6>
            <p class="text-sm ">Frekuensi Suhu Tidak Normal pada Semua Kebun</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <table width="100%">
                <tr>
                  <th>Lokasi Blok</th>
                  <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
                </tr>
                <tr>
                  <td class="text-sm">Blok Satu</td>
                  <td class="text-sm">{{ $totalValueSuhu }} kali</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-4">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-bars4" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0 ">Intensitas Cahaya Tidak Normal</h6>
            <p class="text-sm ">Intensitas Cahaya melebihi batas normal per Minggu</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <i class="material-icons text-sm my-auto me-1">info</i>
              <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4">
        <div class="card z-index-2 h-100">
          <div class="card-body">
            <h6 class="mb-0 ">Intensitas Cahaya</h6>
            <p class="text-sm ">Frekuensi Cahaya Tidak Normal pada Semua Kebun</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <table width="100%">
                <tr>
                  <th>Lokasi Blok</th>
                  <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
                </tr>
                <tr>
                  <td class="text-sm">Blok Satu</td>
                  <td class="text-sm">{{ $totalValueCahaya }} kali</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-4">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-bars5" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0 ">Kelembaban Udara Tidak Normal</h6>
            <p class="text-sm ">Kelembaban Udara melebihi batas normal per Minggu</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <i class="material-icons text-sm my-auto me-1">info</i>
              <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4">
        <div class="card z-index-2 h-100">
          <div class="card-body">
            <h6 class="mb-0 ">Kelembaban Udara</h6>
            <p class="text-sm ">Frekuensi Kelembaban Udara Tidak Normal pada Semua Kebun</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <table width="100%">
                <tr>
                  <th>Lokasi Blok</th>
                  <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
                </tr>
                <tr>
                  <td class="text-sm">Blok Satu</td>
                  <td class="text-sm">{{ $totalValueUdara }} kali</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 mt-4 mb-4">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-4">
        <div class="card z-index-2 ">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
              <div class="chart">
                <canvas id="chart-bars6" class="chart-canvas" height="170"></canvas>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-0 ">Kelembaban Tanah Tidak Normal</h6>
            <p class="text-sm ">Kelembaban Tanah melebihi batas normal per Minggu</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <i class="material-icons text-sm my-auto me-1">info</i>
              <p class="mb-0 text-sm"><i>Data ini di ambil dari range tanggal yang dipilih (ditampilkan per minggu)</i></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 mt-4">
        <div class="card z-index-2 h-100">
          <div class="card-body">
            <h6 class="mb-0 ">Kelembaban Tanah</h6>
            <p class="text-sm ">Frekuensi Kelembaban Tanah Tidak Normal pada Semua Kebun</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
              <table width="100%">
                <tr>
                  <th>Lokasi Blok</th>
                  <th>Frekuensi ( <i class="material-icons text-sm my-auto me-1">schedule</i>)</th>
                </tr>
                <tr>
                  <td class="text-sm">Blok Satu</td>
                  <td class="text-sm">{{ $totalValueTanah }} kali</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var grafikPupuk = document.getElementById("chart-bars1").getContext("2d");
  var grafikAir = document.getElementById("chart-bars2").getContext("2d");
  var grafikSuhu = document.getElementById("chart-bars3").getContext("2d");
  var grafikCahaya = document.getElementById("chart-bars4").getContext("2d");
  var grafikUdara = document.getElementById("chart-bars5").getContext("2d");
  var grafikTanah = document.getElementById("chart-bars6").getContext("2d");

  var pupuk = new Chart(grafikPupuk, {
    type: "bar",
    data: {
      labels: [
        @foreach ($hariPupuk as $item)
          "{{ $item }}",
        @endforeach
      ],
      datasets: [{
        label: "kali",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($jumlahIDPupuk as $item)
            {{ $item }},
          @endforeach
        ],
        maxBarThickness: 6

      }],
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
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
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
  var air = new Chart(grafikAir, {
    type: "bar",
    data: {
      labels: [
        @foreach ($hariAir as $item)
          "{{ $item }}",
        @endforeach
      ],
      datasets: [{
        label: "kali",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($jumlahIDAir as $item)
            {{ $item }},
          @endforeach
        ],
        maxBarThickness: 6

      }],
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
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
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
  var suhu = new Chart(grafikSuhu, {
    type: "bar",
    data: {
      labels: [
        @foreach ($hariSuhu as $item)
          "{{ $item }}",
        @endforeach
      ],
      datasets: [{
        label: "kali",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($jumlahIDSuhu as $item)
            {{ $item }},
          @endforeach
        ],
        maxBarThickness: 6

      }],
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
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
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
  var cahaya = new Chart(grafikCahaya, {
    type: "bar",
    data: {
      labels: [
        @foreach ($hariCahaya as $item)
          "{{ $item }}",
        @endforeach
      ],
      datasets: [{
        label: "kali",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($jumlahIDCahaya as $item)
            {{ $item }},
          @endforeach
        ],
        maxBarThickness: 6

      }],
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
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
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
  var udara = new Chart(grafikUdara, {
    type: "bar",
    data: {
      labels: [
        @foreach ($hariUdara as $item)
          "{{ $item }}",
        @endforeach
      ],
      datasets: [{
        label: "kali",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($jumlahIDUdara as $item)
            {{ $item }},
          @endforeach
        ],
        maxBarThickness: 6

      }],
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
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
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
  var tanah = new Chart(grafikTanah, {
    type: "bar",
    data: {
      labels: [
        @foreach ($hariTanah as $item)
          "{{ $item }}",
        @endforeach
      ],
      datasets: [{
        label: "kali",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($jumlahIDTanah as $item)
            {{ $item }},
          @endforeach
        ],
        maxBarThickness: 6

      }],
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
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
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
</script>
@endsection