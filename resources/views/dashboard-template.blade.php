<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template-assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('template-assets/img/favicon.png') }}">
  <title>
    Kebun Vanili - Dashboard | Agrofilia Permata
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('template-assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('template-assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('template-assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
  <link href="{{ asset('template-assets/css/my-style.css') }}" rel="stylesheet" />
  <!-- JQuery -->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 d-flex align-items-center" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('img/Agrofilia Logo (crop).png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Agrofilia Permata</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('tableView') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('historyDataView') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Riwayat Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('notificationView') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/profile.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div> -->
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
            </li> -->
            <!-- <li class="mt-2">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
            </li> -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                <ul class="p-0">{{ Auth::user()->name }}</ul>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <svg width="10" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 60 l200 0 l-100 100" fill="#7b809a" stroke="black"></path>
                </svg>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      Profile
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="{{ route('logout') }}">
                    <div class="d-flex py-1">
                      Logout
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                {{-- <span class="d-sm-inline d-none">Sign In</span> --}}
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
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
              <p class="mb-0">Bulan saat ini: <span class="text-success text-sm font-weight-bolder">Agustus</span></p>
            </div>
          </div>
        </div>
        {{-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Today's Users</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">New Clients</p>
                <h4 class="mb-0">3,462</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Sales</p>
                <h4 class="mb-0">$103,430</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
            </div>
          </div>
        </div> --}}
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

                        for(var i = 0; i < oldOption.length; i++) {
                          oldOption[i].remove();
                        }
                        if(theKebunOption.value != "notSelected") {
                          $.get("{{ route('listBlok', ['id_kebun' => " + theOption.value + "]) }}", function(data) {
                            for(var i = 0; i < data.dataLength; i++) {
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
                        for(var i = 0; i < data.dataKebun.length; i++) {
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
                          if(data.dataKebun[i].kondisi_blok == "Normal") {
                            spanElement1.setAttribute("class", "badge badge-sm bg-gradient-success");
                            spanElement2.appendChild(document.createTextNode("Tidak Ada"));
                          } else if(data.dataKebun[i].kondisi_blok == "Peringatan") {
                            spanElement1.setAttribute("class", "badge badge-sm bg-gradient-warning");
                            spanElement2.appendChild(document.createTextNode("Terdapat Masalah"));
                          } else if(data.dataKebun[i].kondisi_blok == "Bahaya") {
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
        {{-- <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Schedule overview</h6>
              {{-- <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold">24%</span> this month
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-success text-gradient">notifications</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Penyiraman</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-danger text-gradient">code</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient">shopping_cart</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-warning text-gradient">credit_card</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-primary text-gradient">key</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="material-icons text-dark text-gradient">payments</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('template-assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('template-assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('template-assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('template-assets/js/plugins/chartjs.min.js') }}"></script>
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
        if(data.countID7 != 0) {
          airChart.data.datasets[0].data.unshift(data.countID7);
          airChart.data.labels.unshift(data.hariID7);
        }
        if(data.countID6 != 0) {
          airChart.data.datasets[0].data.unshift(data.countID6);
          airChart.data.labels.unshift(data.hariID6);
        }
        if(data.countID5 != 0) {
          airChart.data.datasets[0].data.unshift(data.countID5);
          airChart.data.labels.unshift(data.hariID5);
        }
        if(data.countID4 != 0) {
          airChart.data.datasets[0].data.unshift(data.countID4);
          airChart.data.labels.unshift(data.hariID4);
        }
        if(data.countID3 != 0) {
          airChart.data.datasets[0].data.unshift(data.countID3);
          airChart.data.labels.unshift(data.hariID3);
        }
        if(data.countID2 != 0) {
          airChart.data.datasets[0].data.unshift(data.countID2);
          airChart.data.labels.unshift(data.hariID2);
        }
        if(data.countID1 != 0) {
          airChart.data.datasets[0].data.unshift(data.countID1);
          airChart.data.labels.unshift(data.hariID1);
        }

        for(var i = 0; airChart.data.datasets[0].data.length != 7; i++) {
          airChart.data.datasets[0].data.unshift(0);
          airChart.data.labels.unshift("---");
        }        
        airChart.update();
      });
      $.get("{{ route('dataSensorPupukPerHari') }}", function(data) {
        if(data.countID7 != 0) {
          pupukChart.data.datasets[0].data.unshift(data.countID7);
          pupukChart.data.labels.unshift(data.hariID7);
        }
        if(data.countID6 != 0) {
          pupukChart.data.datasets[0].data.unshift(data.countID6);
          pupukChart.data.labels.unshift(data.hariID6);
        }
        if(data.countID5 != 0) {
          pupukChart.data.datasets[0].data.unshift(data.countID5);
          pupukChart.data.labels.unshift(data.hariID5);
        }
        if(data.countID4 != 0) {
          pupukChart.data.datasets[0].data.unshift(data.countID4);
          pupukChart.data.labels.unshift(data.hariID4);
        }
        if(data.countID3 != 0) {
          pupukChart.data.datasets[0].data.unshift(data.countID3);
          pupukChart.data.labels.unshift(data.hariID3);
        }
        if(data.countID2 != 0) {
          pupukChart.data.datasets[0].data.unshift(data.countID2);
          pupukChart.data.labels.unshift(data.hariID2);
        }
        if(data.countID1 != 0) {
          pupukChart.data.datasets[0].data.unshift(data.countID1);
          pupukChart.data.labels.unshift(data.hariID1);
        }

        for(var i = 0; pupukChart.data.datasets[0].data.length != 7; i++) {
          pupukChart.data.datasets[0].data.unshift(0);
          pupukChart.data.labels.unshift("---");
        }        
        pupukChart.update();
      });
      $.get("{{ route('dataSensorSuhuPerHari') }}", function(data) {
        if(data.countID7 != 0) {
          suhuChart.data.datasets[0].data.unshift(data.countID7);
          suhuChart.data.labels.unshift(data.hariID7);
        }
        if(data.countID6 != 0) {
          suhuChart.data.datasets[0].data.unshift(data.countID6);
          suhuChart.data.labels.unshift(data.hariID6);
        }
        if(data.countID5 != 0) {
          suhuChart.data.datasets[0].data.unshift(data.countID5);
          suhuChart.data.labels.unshift(data.hariID5);
        }
        if(data.countID4 != 0) {
          suhuChart.data.datasets[0].data.unshift(data.countID4);
          suhuChart.data.labels.unshift(data.hariID4);
        }
        if(data.countID3 != 0) {
          suhuChart.data.datasets[0].data.unshift(data.countID3);
          suhuChart.data.labels.unshift(data.hariID3);
        }
        if(data.countID2 != 0) {
          suhuChart.data.datasets[0].data.unshift(data.countID2);
          suhuChart.data.labels.unshift(data.hariID2);
        }
        if(data.countID1 != 0) {
          suhuChart.data.datasets[0].data.unshift(data.countID1);
          suhuChart.data.labels.unshift(data.hariID1);
        }

        for(var i = 0; suhuChart.data.datasets[0].data.length != 7; i++) {
          suhuChart.data.datasets[0].data.unshift(0);
          suhuChart.data.labels.unshift("---");
        }        
        suhuChart.update();
      });
      $.get("{{ route('dataSensorCahayaPerHari') }}", function(data) {
        if(data.countID7 != 0) {
          cahayaChart.data.datasets[0].data.unshift(data.countID7);
          cahayaChart.data.labels.unshift(data.hariID7);
        }
        if(data.countID6 != 0) {
          cahayaChart.data.datasets[0].data.unshift(data.countID6);
          cahayaChart.data.labels.unshift(data.hariID6);
        }
        if(data.countID5 != 0) {
          cahayaChart.data.datasets[0].data.unshift(data.countID5);
          cahayaChart.data.labels.unshift(data.hariID5);
        }
        if(data.countID4 != 0) {
          cahayaChart.data.datasets[0].data.unshift(data.countID4);
          cahayaChart.data.labels.unshift(data.hariID4);
        }
        if(data.countID3 != 0) {
          cahayaChart.data.datasets[0].data.unshift(data.countID3);
          cahayaChart.data.labels.unshift(data.hariID3);
        }
        if(data.countID2 != 0) {
          cahayaChart.data.datasets[0].data.unshift(data.countID2);
          cahayaChart.data.labels.unshift(data.hariID2);
        }
        if(data.countID1 != 0) {
          cahayaChart.data.datasets[0].data.unshift(data.countID1);
          cahayaChart.data.labels.unshift(data.hariID1);
        }

        for(var i = 0; cahayaChart.data.datasets[0].data.length != 7; i++) {
          cahayaChart.data.datasets[0].data.unshift(0);
          cahayaChart.data.labels.unshift("---");
        }        
        cahayaChart.update();
      });
      $.get("{{ route('dataSensorUdaraPerHari') }}", function(data) {
        if(data.countID7 != 0) {
          udaraChart.data.datasets[0].data.unshift(data.countID7);
          udaraChart.data.labels.unshift(data.hariID7);
        }
        if(data.countID6 != 0) {
          udaraChart.data.datasets[0].data.unshift(data.countID6);
          udaraChart.data.labels.unshift(data.hariID6);
        }
        if(data.countID5 != 0) {
          udaraChart.data.datasets[0].data.unshift(data.countID5);
          udaraChart.data.labels.unshift(data.hariID5);
        }
        if(data.countID4 != 0) {
          udaraChart.data.datasets[0].data.unshift(data.countID4);
          udaraChart.data.labels.unshift(data.hariID4);
        }
        if(data.countID3 != 0) {
          udaraChart.data.datasets[0].data.unshift(data.countID3);
          udaraChart.data.labels.unshift(data.hariID3);
        }
        if(data.countID2 != 0) {
          udaraChart.data.datasets[0].data.unshift(data.countID2);
          udaraChart.data.labels.unshift(data.hariID2);
        }
        if(data.countID1 != 0) {
          udaraChart.data.datasets[0].data.unshift(data.countID1);
          udaraChart.data.labels.unshift(data.hariID1);
        }

        for(var i = 0; udaraChart.data.datasets[0].data.length != 7; i++) {
          udaraChart.data.datasets[0].data.unshift(0);
          udaraChart.data.labels.unshift("---");
        }        
        udaraChart.update();
      });
      $.get("{{ route('dataSensorTanahPerHari') }}", function(data) {
        if(data.countID7 != 0) {
          tanahChart.data.datasets[0].data.unshift(data.countID7);
          tanahChart.data.labels.unshift(data.hariID7);
        }
        if(data.countID6 != 0) {
          tanahChart.data.datasets[0].data.unshift(data.countID6);
          tanahChart.data.labels.unshift(data.hariID6);
        }
        if(data.countID5 != 0) {
          tanahChart.data.datasets[0].data.unshift(data.countID5);
          tanahChart.data.labels.unshift(data.hariID5);
        }
        if(data.countID4 != 0) {
          tanahChart.data.datasets[0].data.unshift(data.countID4);
          tanahChart.data.labels.unshift(data.hariID4);
        }
        if(data.countID3 != 0) {
          tanahChart.data.datasets[0].data.unshift(data.countID3);
          tanahChart.data.labels.unshift(data.hariID3);
        }
        if(data.countID2 != 0) {
          tanahChart.data.datasets[0].data.unshift(data.countID2);
          tanahChart.data.labels.unshift(data.hariID2);
        }
        if(data.countID1 != 0) {
          tanahChart.data.datasets[0].data.unshift(data.countID1);
          tanahChart.data.labels.unshift(data.hariID1);
        }

        for(var i = 0; tanahChart.data.datasets[0].data.length != 7; i++) {
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

      if(selectOption.value != "notSelected") {
        let baseUrl = "{{ route('ambilDataStatusKebun', ['id' => '__ID__']) }}";
        let finalUrl = baseUrl.replace("__ID__", selectOption.value);
        $.get(finalUrl, function(data) {
          if(data.jenisUmur == "Hari") {
            umurText.innerText = data.umurBlok + " hari yang lalu";
          }
          if(data.jenisUmur == "Bulan") {
            umurText.innerText = data.umurBlok + " bulan yang lalu";
          }
          if(data.jenisUmur == "Tahun") {
            umurText.innerText = data.umurBlok + " tahun yang lalu";
          }

          tahunTanamText.innerText = data.tahunBlok;
          masaTanamanText.innerText = data.statusBlok;
          statusTanamanText.innerText = data.faseBlok;
        });
      }
    }
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('template-assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
</body>
  <!-- Script for Update Chart -->
   <script>
      
   </script>
</html>