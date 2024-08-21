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
    Kebun Vanili - Informasi Plot | Agrofilia Permata
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('template-assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('template-assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('template-assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
  <link href="{{ asset('template-assets/css/my-style.css') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('img/Agrofilia Logo (crop).png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Agrofilia Permata</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{ route('tableView') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
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
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Data Master</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Data Blok Kebun</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard Blok Kebun</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard Blok Kebun</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
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
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <h6 class="text-center">Peta Sensor pada Kebun</h6>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430 200" width="100%" height="200">
                    <rect width="430" height="200" x="0" y="0" rx="0.75rem" ry="0.75rem" fill="#dbdbdb" />
                    <line x1="20" y1="26" x2="410" y2="26" style="stroke:black;stroke-width:2" />
                    <line x1="20" y1="62" x2="410" y2="62" style="stroke:black;stroke-width:2" />
                    <line x1="20" y1="98" x2="410" y2="98" style="stroke:black;stroke-width:2" />
                    <line x1="20" y1="136" x2="410" y2="136" style="stroke:black;stroke-width:2" />
                    <line x1="20" y1="172" x2="410" y2="172" style="stroke:black;stroke-width:2" />
                  
                    <!--  Line 1 -->
                    <circle r="4" cx="43.333333333"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="86.666666666"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="129.999999999" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="173.333333332" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="216.666666665" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="259.999999998" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="303.333333331" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="346.666666664" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="389.999999997" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                  
                    <!-- Line 2 -->
                    <circle r="4" cx="43.333333333"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="86.666666666"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="129.999999999" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="173.333333332" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="216.666666665" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="259.999999998" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="303.333333331" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="346.666666664" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="389.999999997" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                  
                    <!-- Line 3 -->
                    <circle r="4" cx="43.333333333"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="86.666666666"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="129.999999999" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="173.333333332" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="216.666666665" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="259.999999998" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="303.333333331" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="346.666666664" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="389.999999997" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                  
                    <!-- Line 4 -->
                    <circle r="4" cx="43.333333333"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="86.666666666"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="129.999999999" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="173.333333332" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="216.666666665" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="259.999999998" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="303.333333331" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="346.666666664" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="389.999999997" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                  
                    <!-- Line 5 -->
                    <circle r="4" cx="43.333333333"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="86.666666666"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="129.999999999" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="173.333333332" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="216.666666665" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="259.999999998" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="303.333333331" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="346.666666664" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                    <circle r="4" cx="389.999999997" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>

                    {{-- Text -}}
                    {{-- 
                      Formula: 
                      rect: relative
                      rect-2: x= rect-x + 8; y= rect-y + 4
                      text-1: x= rect-x + 24; y= rect-y + 14
                      text-2: x= rect-x + 24; y= rect-y + 27
                    --}}
                    {{-- Sensor 1 --}}
                    <g id="sensorHover1">
                      <circle r="4" cx="43.333333333" cy="80" fill="#e045ff" style="stroke:black;stroke-width:2;"/>
                      <rect class="sensorDisplay1" x="50" y="70" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" fill-opacity="0.8"/>
                      <rect class="sensorDisplay1" x="58" y="74" width="12" height="12" fill="#e045ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                      <text class="sensorDisplay1" x="74" y="84" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                      <text class="sensorDisplay1" x="74" y="97" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                    </g>

                    {{-- Sensor 2 --}}
                    <g id="sensorHover2">
                      <circle r="4" cx="108.325" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                      <rect class="sensorDisplay2" x="120" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                      <rect class="sensorDisplay2" x="128" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                      <text class="sensorDisplay2" x="144" y="67" fill="white" style="font-size: 0.8rem;">Sensor Suhu</text>
                      <text class="sensorDisplay2" x="144" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                    </g>

                    {{-- Sensor 3 --}}
                    <g id="sensorHover3">
                      <circle r="4" cx="151.664" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                      <rect class="sensorDisplay3" x="160" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                      <rect class="sensorDisplay3" x="168" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                      <text class="sensorDisplay3" x="184" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                      <text class="sensorDisplay3" x="184" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                    </g>

                    {{-- Sensor 4 --}}
                    <g id="sensorHover4">
                      <circle r="4" cx="194.998333332" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                      <rect class="sensorDisplay4" x="206" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                      <rect class="sensorDisplay4" x="214" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                      <text class="sensorDisplay4" x="230" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                      <text class="sensorDisplay4" x="230" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                    </g>

                    {{-- Sensor 5 --}}
                    <g id="sensorHover5">
                      <circle r="4" cx="238.331666665" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                      <rect class="sensorDisplay5" x="250" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                      <rect class="sensorDisplay5" x="258" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                      <text class="sensorDisplay5" x="274" y="67" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                      <text class="sensorDisplay5" x="274" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                    </g>

                    {{-- Sensor 6 --}}
                    <g id="sensorHover6">
                      <circle r="4" cx="281.664999998" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                      <rect class="sensorDisplay6" x="294" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                      <rect class="sensorDisplay6" x="302" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                      <text class="sensorDisplay6" x="318" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                      <text class="sensorDisplay6" x="318" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                    </g>

                    {{-- Sensor 7 --}}
                    <g id="sensorHover7">
                      <circle r="4" cx="324.998333331" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                      <rect class="sensorDisplay7" x="194" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                      <rect class="sensorDisplay7" x="202" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                      <text class="sensorDisplay7" x="218" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                      <text class="sensorDisplay7" x="218" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                    </g>
                  </svg>
                </div>
                <div class="card-body pt-0 p-3">
                  <h6 class="mb-0">Deskripsi</h6>
                  <div class="d-flex align-items-center">
                    <div class="circle purple"></div>
                    <span class="text-xs">&nbsp;&nbsp;&nbsp;Sensor Cahaya dan Suhu</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="circle white"></div>
                    <span class="text-xs">&nbsp;&nbsp;&nbsp;Tanaman</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="circle blue"></div>
                    <span class="text-xs">&nbsp;&nbsp;&nbsp;Sensor Kelembaban</span>
                  </div>
                  <hr class="horizontal dark my-3">
                  <span class="text-xs mb-0">*Sentuh sensor untuk mengetahui status sensor</span>
                </div>
              </div>
            </div>
            <div class="col-xl-6 mb-xl-0">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <h6 class="text-center mb-0">Deskripsi Kebun Blok Satu</h6>
                </div>
                <div class="card-body pt-0 p-3">
                  <div class="d-flex align-items-center">
                    <span class="text-md font-weight-bold text-dark">Umur:</span>
                    <span class="text-sm">&nbsp;2.5 tahun (30 bulan)</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="text-md font-weight-bold text-dark">Tahun Tanam:</span>
                    <span class="text-sm">&nbsp;2020</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="text-md font-weight-bold text-dark">Status Perlakuan:</span>
                    <span class="text-sm">&nbsp;Masa Kritis</span>
                  </div>
                  <div class="d-flex align-items-center">
                    <span class="text-md font-weight-bold text-dark">Status Tanaman:</span>
                    <span class="text-sm">&nbsp;Generatif</span>
                  </div>
                  <hr class="horizontal dark my-3">
                  <span class="text-xs mb-0">*Detail dari kebun blok satu</span>
                </div>
              </div>
            </div>
            <div class="col-md-12 my-4">
              <div class="card p-4 mb-4"> {{-- Grafik Suhu --}}
                <div class="card-header">
                  <h5 class="mb-0 text-center">Grafik Rata-Rata Suhu (Realtime)</h5>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                          <div class="chart">
                            <canvas id="suhu-chart-line" class="chart-canvas" height="270"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 bg-light rounded p-4">
                        <h5 class="text-center">Detail Suhu</h5>
                        <div class="d-flex justify-content-center">
                          <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataSuhu">
                            <div class="d-flex justify-content-center align-items-center h-100">
                              <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataSuhu">32°C</h3>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                          <span class="text-md font-weight-bold text-dark">Kondisi suhu saat ini:</span>
                          <span class="text-sm">&nbsp;Terlalu Panas</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks suhu normal:</span>
                          <span class="text-sm">&nbsp;20°C - 25°C</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks suhu panas:</span>
                          <span class="text-sm">&nbsp;> 28°C</span>
                        </div>
                        <hr class="horizontal dark my-3">
                        <span class="text-xs mb-0">*Terakhir di update pada 4 menit yang lalu</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-4 mb-4"> {{-- Grafik Cahaya --}}
                <div class="card-header">
                  <h5 class="mb-0 text-center">Grafik Rata-Rata Cahaya (Realtime)</h5>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                          <div class="chart">
                            <canvas id="cahaya-chart-line" class="chart-canvas" height="270"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 bg-light rounded p-4">
                        <h5 class="text-center">Detail Cahaya</h5>
                        <div class="d-flex justify-content-center">
                          <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataCahaya">
                            <div class="d-flex justify-content-center align-items-center h-100">
                              <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataCahaya">45%</h3>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                          <span class="text-md font-weight-bold text-dark">Kondisi cahaya saat ini:</span>
                          <span class="text-sm">&nbsp;Normal</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks cahaya normal:</span>
                          <span class="text-sm">&nbsp;30% - 50%</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks cahaya diatas normal:</span>
                          <span class="text-sm">&nbsp;> 50% lx</span>
                        </div>
                        <hr class="horizontal dark my-3">
                        <span class="text-xs mb-0">*Terakhir di update pada 6 menit yang lalu</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-4 mb-4"> {{-- Grafik Kelembaban Udara--}}
                <div class="card-header">
                  <h5 class="mb-0 text-center">Grafik Rata-Rata Kelembaban Udara (Realtime)</h5>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                          <div class="chart">
                            <canvas id="kelembaban-chart-line" class="chart-canvas" height="270"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 bg-light rounded p-4">
                        <h5 class="text-center">Detail Kelembaban Udara</h5>
                        <div class="d-flex justify-content-center">
                          <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataKelembaban">
                            <div class="d-flex justify-content-center align-items-center h-100">
                              <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataKelembaban">10%</h3>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                          <span class="text-md font-weight-bold text-dark">Kelembaban saat ini:</span>
                          <span class="text-sm">&nbsp;Lumayan Kering</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks normal (kritis):</span>
                          <span class="text-sm">&nbsp;15%-25%</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks (kritis):</span>
                          <span class="text-sm">&nbsp;< 10% | > 30%</span>
                        </div>
                        <hr class="horizontal dark my-3">
                        <span class="text-xs mb-0">*Terakhir di update pada 2 menit yang lalu</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-4 mb-4"> {{-- Grafik Kelembaban Tanah --}}
                <div class="card-header">
                  <h5 class="mb-0 text-center">Grafik Rata-Rata Kelembaban Tanah (Realtime)</h5>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                          <div class="chart">
                            <canvas id="tanah-chart-line" class="chart-canvas" height="270"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 bg-light rounded p-4">
                        <h5 class="text-center">Detail Kelembaban Tanah</h5>
                        <div class="d-flex justify-content-center">
                          <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataPHTanah">
                            <div class="d-flex justify-content-center align-items-center h-100">
                              <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataPHTanah">5.7</h3>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                          <span class="text-md font-weight-bold text-dark">Kondisi tanah saat ini:</span>
                          <span class="text-sm">&nbsp;Normal</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks tanah normal:</span>
                          <span class="text-sm">&nbsp;5.5 - 7</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="text-md font-weight-bold text-dark">Indeks tanah tidak normal:</span>
                          <span class="text-sm">&nbsp;> 7.1 | < 5.5</span>
                        </div>
                        <hr class="horizontal dark my-3">
                        <span class="text-xs mb-0">*Terakhir di update pada 5 menit yang lalu</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-4">
                <div class="card-header pb-0 p-4">
                  <div class="row">
                    <div class="d-flex justify-content-center">
                      <h5 class="mb-0">Detail Semua Sensor</h5>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-12 mb-md-0 mb-4">
                      <div class="card card-body card-plain border-radius-lg d-flex align-items-center flex-row">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430 200" width="100%" height="250">
                          <rect width="430" height="200" x="0" y="0" rx="0.75rem" ry="0.75rem" fill="#dbdbdb" />
                          <line x1="20" y1="26" x2="410" y2="26" style="stroke:black;stroke-width:2" />
                          <line x1="20" y1="62" x2="410" y2="62" style="stroke:black;stroke-width:2" />
                          <line x1="20" y1="98" x2="410" y2="98" style="stroke:black;stroke-width:2" />
                          <line x1="20" y1="136" x2="410" y2="136" style="stroke:black;stroke-width:2" />
                          <line x1="20" y1="172" x2="410" y2="172" style="stroke:black;stroke-width:2" />
                        
                          <!--  Line 1 -->
                          <circle r="4" cx="43.333333333"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="86.666666666"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="129.999999999" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="173.333333332" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="216.666666665" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="259.999999998" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="303.333333331" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="346.666666664" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="389.999999997" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                        
                          <!-- Line 2 -->
                          <circle r="4" cx="43.333333333"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="86.666666666"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="129.999999999" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="173.333333332" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="216.666666665" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="259.999999998" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="303.333333331" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="346.666666664" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="389.999999997" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                        
                          <!-- Line 3 -->
                          <circle r="4" cx="43.333333333"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="86.666666666"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="129.999999999" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="173.333333332" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="216.666666665" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="259.999999998" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="303.333333331" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="346.666666664" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="389.999999997" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                        
                          <!-- Line 4 -->
                          <circle r="4" cx="43.333333333"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="86.666666666"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="129.999999999" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="173.333333332" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="216.666666665" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="259.999999998" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="303.333333331" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="346.666666664" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="389.999999997" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                        
                          <!-- Line 5 -->
                          <circle r="4" cx="43.333333333"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="86.666666666"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="129.999999999" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="173.333333332" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="216.666666665" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="259.999999998" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="303.333333331" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="346.666666664" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                          <circle r="4" cx="389.999999997" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
      
                          {{-- Text -}}
                          {{-- 
                            Formula: 
                            rect: relative
                            rect-2: x= rect-x + 8; y= rect-y + 4
                            text-1: x= rect-x + 24; y= rect-y + 14
                            text-2: x= rect-x + 24; y= rect-y + 27
                          --}}
                          {{-- Sensor 1 --}}
                          <g id="sensorHover1">
                            <circle r="4" cx="43.333333333" cy="80" fill="#e045ff" style="stroke:black;stroke-width:2;"/>
                            <rect class="sensorDisplay1" x="50" y="70" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" fill-opacity="0.8"/>
                            <rect class="sensorDisplay1" x="58" y="74" width="12" height="12" fill="#e045ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                            <text class="sensorDisplay1" x="74" y="84" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                            <text class="sensorDisplay1" x="74" y="97" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                          </g>
      
                          {{-- Sensor 2 --}}
                          <g id="sensorHover2">
                            <circle r="4" cx="108.325" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                            <rect class="sensorDisplay2" x="120" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                            <rect class="sensorDisplay2" x="128" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                            <text class="sensorDisplay2" x="144" y="67" fill="white" style="font-size: 0.8rem;">Sensor Suhu</text>
                            <text class="sensorDisplay2" x="144" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                          </g>
      
                          {{-- Sensor 3 --}}
                          <g id="sensorHover3">
                            <circle r="4" cx="151.664" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                            <rect class="sensorDisplay3" x="160" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                            <rect class="sensorDisplay3" x="168" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                            <text class="sensorDisplay3" x="184" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                            <text class="sensorDisplay3" x="184" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                          </g>
      
                          {{-- Sensor 4 --}}
                          <g id="sensorHover4">
                            <circle r="4" cx="194.998333332" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                            <rect class="sensorDisplay4" x="206" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                            <rect class="sensorDisplay4" x="214" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                            <text class="sensorDisplay4" x="230" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                            <text class="sensorDisplay4" x="230" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                          </g>
      
                          {{-- Sensor 5 --}}
                          <g id="sensorHover5">
                            <circle r="4" cx="238.331666665" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                            <rect class="sensorDisplay5" x="250" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                            <rect class="sensorDisplay5" x="258" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                            <text class="sensorDisplay5" x="274" y="67" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                            <text class="sensorDisplay5" x="274" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                          </g>
      
                          {{-- Sensor 6 --}}
                          <g id="sensorHover6">
                            <circle r="4" cx="281.664999998" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                            <rect class="sensorDisplay6" x="294" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                            <rect class="sensorDisplay6" x="302" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                            <text class="sensorDisplay6" x="318" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                            <text class="sensorDisplay6" x="318" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                          </g>
      
                          {{-- Sensor 7 --}}
                          <g id="sensorHover7">
                            <circle r="4" cx="324.998333331" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                            <rect class="sensorDisplay7" x="194" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                            <rect class="sensorDisplay7" x="202" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                            <text class="sensorDisplay7" x="218" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                            <text class="sensorDisplay7" x="218" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                          </g>
                        </svg>
                      </div>
                      <hr class="horizontal dark my-3">
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                          <h5 class="mb-0">Sensor Kelembaban Tanah</h5>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Kelembaban Tanah satu</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorKelembabanTanah1-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Kelembaban Tanah dua</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorKelembabanTanah2-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-warning shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Kelembaban Tanah tiga</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorKelembabanTanah3-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Kelembaban Tanah empat</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorKelembabanTanah4-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Kelembaban Tanah lima</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorKelembabanTanah5-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Kelembaban Tanah enam</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorKelembabanTanah6-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="horizontal dark my-3">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                          <h5 class="mb-0">Sensor Lainnya</h5>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Suhu</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorSuhu-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">32°C</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Cahaya</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorCahaya-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-warning shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">29%</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                              <h6 class="text-center mb-0">Sensor Kelembaban Udara</h6>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                      <canvas id="sensorKelembabanUdara-chart-line" class="chart-canvas" height="150"></canvas>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="text-center">
                                      <h6>Indeks:</h6>
                                    </div>
                                    <div class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                      <div class="d-flex justify-content-center align-items-center h-100">
                                        <h3 class="text-center font-weight-bold text-white mb-0">32 RH</h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Riwayat Penyiraman Air</h6>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">Lihat Semua</button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">28 Juli, 2023</h6>
                    <span class="text-xs">14.34 - 14.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">28 Juli, 2023</h6>
                    <span class="text-xs">13.34 - 13.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">12.34 - 12.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">11.34 - 11.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">10.34 - 10.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Riwayat Penyiraman Pupuk</h6>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">Lihat Semua</button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">28 Juli, 2023</h6>
                    <span class="text-xs">14.34 - 14.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">28 Juli, 2023</h6>
                    <span class="text-xs">13.34 - 13.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">12.34 - 12.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">11.34 - 11.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">10.34 - 10.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">1x</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Riwayat Lainnya</h6>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">Lihat Semua</button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">28 Juli, 2023</h6>
                    <span class="text-xs">14.34</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">Sensor Suhu 1: 30°C</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">28 Juli, 2023</h6>
                    <span class="text-xs">13.39</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">Sensor Suhu 1: 28°C</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">12.33</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">Sensor Suhu 4: 29°C</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">11.58</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">Sensor Suhu 2: 29°C</div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">27 Juli, 2023</h6>
                    <span class="text-xs">10.21</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">Sensor Kelembaban: 10%</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Pusat Kontrol</h6>
              <p class="text-warning font-weight-bold mb-0 text-xs" id="theAlert">Inisialisasi... Harap tunggu...</p>
            </div>
            <div class="card-body pt-4 p-3">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h6 class="mb-0 text-center">Kontrol Penyiraman Air</h6>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-center mb-4">
                        <div class="rounded-pill switch-container p-2 d-flex justify-content-end" id="switch1">
                          <div class="rounded-circle bg-light switch-inner"></div>
                        </div>
                      </div>
                      <div class="mb-0 font-weight-bold">Status: <span class="font-weight-light" id="switchStatus1">Hidup</span></div>
                      <div class="mb-0 font-weight-bold">Jarak Interval: <span class="font-weight-light">5 Menit</span></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <h6 class="mb-0 text-center">Kontrol Penyiraman Pupuk</h6>
                    </div>
                    <div class="card-body">
                      <div class="d-flex justify-content-center mb-4">
                        <div class="rounded-pill switch-container p-2 d-flex justify-content-end" id="switch2">
                          <div class="rounded-circle bg-light switch-inner"></div>
                        </div>
                      </div>
                      <div class="mb-0 font-weight-bold">Status: <span class="font-weight-light" id="switchStatus2">Hidup</span></div>
                      <div class="mb-0 font-weight-bold">Jarak Interval: <span class="font-weight-light">5 Menit</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Status Kontrol</h6>
                </div>
                {{-- <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                  <i class="material-icons me-2 text-lg">date_range</i>
                  <small>23 - 30 March 2020</small>
                </div> --}}
              </div>
            </div>
            <div class="card-body pt-4 p-3">
              {{-- <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6> --}}
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_more</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Netflix</h6>
                      <span class="text-xs">27 March 2020, at 12:30 PM</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
                    - $ 2,500
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Apple</h6>
                      <span class="text-xs">27 March 2020, at 04:30 AM</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                    + $ 2,000
                  </div>
                </li>
              </ul>
              <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Stripe</h6>
                      <span class="text-xs">26 March 2020, at 13:45 PM</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                    + $ 750
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">HubSpot</h6>
                      <span class="text-xs">26 March 2020, at 12:30 PM</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                    + $ 1,000
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">expand_less</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Creative Tim</h6>
                      <span class="text-xs">26 March 2020, at 08:30 AM</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                    + $ 2,500
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">priority_high</i></button>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-dark text-sm">Webflow</h6>
                      <span class="text-xs">26 March 2020, at 05:00 AM</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                    Pending
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
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
  <script src="{{ asset('template-assets/js/my-main.js') }}"></script>
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
  <script>
    // ----- Grafik Rata Rata ------
    var grafikSuhuRataRata = document.getElementById("suhu-chart-line").getContext("2d");
    var grafikCahayaRataRata = document.getElementById("cahaya-chart-line").getContext("2d");
    var grafikKelembabanRataRata = document.getElementById("kelembaban-chart-line").getContext("2d");
    var grafikTanahRataRata = document.getElementById("tanah-chart-line").getContext("2d");

    var suhu = new Chart(grafikSuhuRataRata, {
      type: "line",
      data: {
        labels: [],
        datasets: [{
          label: "Suhu (°C)",
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
          data: [],
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
    var cahaya = new Chart(grafikCahayaRataRata, {
      type: "line",
      data: {
        labels: [],
        datasets: [{
          label: "Lumen (lx)",
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
          data: [],
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
    var kelembaban = new Chart(grafikKelembabanRataRata, {
      type: "line",
      data: {
        labels: [],
        datasets: [{
          label: "Humidity (RH)",
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
          data: [],
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
    var tanah = new Chart(grafikTanahRataRata, {
      type: "line",
      data: {
        labels: [],
        datasets: [{
          label: "Asam (PH)",
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
          data: [],
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

    // ----- Grafik Detail Sensor -----
    // ----- Detail Sensor Kelembaban Tanah -----
    var grafikDetailKelembabanTanah1 = document.getElementById("sensorKelembabanTanah1-chart-line").getContext("2d");
    var grafikDetailKelembabanTanah2 = document.getElementById("sensorKelembabanTanah2-chart-line").getContext("2d");
    var grafikDetailKelembabanTanah3 = document.getElementById("sensorKelembabanTanah3-chart-line").getContext("2d");
    var grafikDetailKelembabanTanah4 = document.getElementById("sensorKelembabanTanah4-chart-line").getContext("2d");
    var grafikDetailKelembabanTanah5 = document.getElementById("sensorKelembabanTanah5-chart-line").getContext("2d");
    var grafikDetailKelembabanTanah6 = document.getElementById("sensorKelembabanTanah6-chart-line").getContext("2d");

    // ----- Detail Sensor Suhu -----
    var grafikDetailSuhu = document.getElementById("sensorSuhu-chart-line").getContext("2d");

    // ----- Detail Sensor Cahaya -----
    var grafikDetailCahaya = document.getElementById("sensorCahaya-chart-line").getContext("2d");

    // ----- Detail Sensor Kelembaban Udara -----
    var grafikDetailKelembabanUdara = document.getElementById("sensorKelembabanUdara-chart-line").getContext("2d");

    var kelembabanTanahDetail1 = new Chart(grafikDetailKelembabanTanah1, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Kilopascal (kPa)",
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
          data: [29, 29, 28, 27, 28],
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
    var kelembabanTanahDetail2 = new Chart(grafikDetailKelembabanTanah2, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Kilopascal (kPa)",
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
          data: [29, 29, 28, 27, 28],
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
    var kelembabanTanahDetail3 = new Chart(grafikDetailKelembabanTanah3, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Kilopascal (kPa)",
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
          data: [29, 29, 28, 27, 28],
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
    var kelembabanTanahDetail4 = new Chart(grafikDetailKelembabanTanah4, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Kilopascal (kPa)",
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
          data: [29, 29, 28, 27, 28],
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
    var kelembabanTanahDetail5 = new Chart(grafikDetailKelembabanTanah5, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Kilopascal (kPa)",
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
          data: [29, 29, 28, 27, 28],
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
    var kelembabanTanahDetail6 = new Chart(grafikDetailKelembabanTanah6, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Kilopascal (kPa)",
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
          data: [29, 29, 28, 27, 28],
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
    var suhuDetail = new Chart(grafikDetailSuhu, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Suhu (°C)",
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
          data: [28, 29, 28, 27, 27],
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
    var cahayaDetail = new Chart(grafikDetailCahaya, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Cahaya (%Lux)",
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
          data: [28, 29, 29, 30, 29],
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
    var kelembabanUdaraDetail = new Chart(grafikDetailKelembabanUdara, {
      type: "line",
      data: {
        labels: ["14.34", "14.35", "14.36", "14.37", "14.38"],
        datasets: [{
          label: "Humidity (%RH)",
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
          data: [28, 29, 28, 27, 27],
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

    function readDataRataRataSuhu() {
      $.get("{{ route('readDataRataRata') }}", function(data) {
        suhu.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
        suhu.data.datasets[0].data.push(data.suhu);
        if(suhu.data.labels.length > 10) {
          suhu.data.labels.shift();
        } else if(suhu.data.labels.length > 10) { 
          suhu.data.datasets.data.shift();
        }

        if(data.suhu != null) {
          document.getElementById("indikatorRataRataSuhu").innerText = data.suhu + "°C";
        } else {
          document.getElementById("indikatorRataRataSuhu").innerText = "0°C";
        }

        let theBgClass = document.getElementById("bgIndexRataRataSuhu");
        theBgClass.classList.remove("bg-gradient-danger");
        if(data.suhu < 20) {
          theBgClass.classList.add("bg-gradient-warning");
        } else if(data.suhu > 25) {
          theBgClass.classList.add("bg-gradient-danger");
        } else {
          theBgClass.classList.add("bg-gradient-success");
        }
        suhu.update();
      });
    }

    function readDataRataRataCahaya() {
      $.get("{{ route('readDataRataRata') }}", function(data) {
        cahaya.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
        cahaya.data.datasets[0].data.push(data.cahaya);
        if(cahaya.data.labels.length > 10) {
          cahaya.data.labels.shift();
        } else if(cahaya.data.labels.length > 10) {
          cahaya.data.datasets.data.shift();
        }

        if(data.cahaya != null) {
          document.getElementById("indikatorRataRataCahaya").innerText = data.cahaya + "%";
        } else {
          document.getElementById("indikatorRataRataCahaya").innerText = "0%";
        }
        
        let theBgClass = document.getElementById("bgIndexRataRataCahaya");
        theBgClass.classList.remove("bg-gradient-danger");
        if(data.cahaya < 20) {
          theBgClass.classList.add("bg-gradient-warning");
        } else if(data.cahaya > 25) {
          theBgClass.classList.add("bg-gradient-danger");
        } else {
          theBgClass.classList.add("bg-gradient-success");
        }
        cahaya.update();
      });
    }

    function readDataRataRataKelembaban() {
      $.get("{{ route('readDataRataRata') }}", function(data) {
        kelembaban.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
        kelembaban.data.datasets[0].data.push(data.kelembaban);
        if(kelembaban.data.labels.length > 10) {
          kelembaban.data.labels.shift();
        } else if(kelembaban.data.labels.length > 10) {
          kelembaban.data.datasets.data.shift();
        }

        if(data.kelembaban != null) {
          document.getElementById("indikatorRataRataKelembaban").innerText = data.kelembaban + "%";
        } else {
          document.getElementById("indikatorRataRataKelembaban").innerText = "0%";
        }
        
        let theBgClass = document.getElementById("bgIndexRataRataKelembaban");
        theBgClass.classList.remove("bg-gradient-danger");
        if(data.kelembaban < 10) {
          theBgClass.classList.add("bg-gradient-warning");
        } else if(data.kelembaban > 25) {
          theBgClass.classList.add("bg-gradient-danger");
        } else {
          theBgClass.classList.add("bg-gradient-success");
        }
        kelembaban.update();
      });
    }

    function readDataRataRataKelembabanTanah() {
      $.get("{{ route('readDataRataRata') }}", function(data) {
        tanah.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
        tanah.data.datasets[0].data.push(data.kelembabanTanah);
        if(tanah.data.labels.length > 10) {
          tanah.data.labels.shift();
        } else if(tanah.data.labels.length > 10) {
          tanah.data.datasets.data.shift();
        }

        if(data.kelembabanTanah != null) {
          document.getElementById("indikatorRataRataPHTanah").innerText = data.kelembabanTanah + "%";
        } else {
          document.getElementById("indikatorRataRataPHTanah").innerText = "0%";
        }
        
        let theBgClass = document.getElementById("bgIndexRataRataPHTanah");
        theBgClass.classList.remove("bg-gradient-danger");
        if(data.kelembabanTanah < 5.5) {
          theBgClass.classList.add("bg-gradient-warning");
        } else if(data.kelembabanTanah > 7) {
          theBgClass.classList.add("bg-gradient-danger");
        } else {
          theBgClass.classList.add("bg-gradient-success");
        }
        tanah.update();
      });
    }

    function checkMode() {
      let airMode = document.getElementById("switch1");
      let pupukMode = document.getElementById("switch2");
      let airText = document.getElementById("switchStatus1");
      let pupukText = document.getElementById("switchStatus2");
      let initText = document.getElementById("theAlert");

      initText.classList.remove("text-success");
      initText.innerText = "Sedang memperbarui data sensor...";
      initText.classList.add("text-warning");

      $.get("{{ route('checkMode') }}", function(data) {
        if(data.modeAir == 0) {
          airMode.classList.add("switchActive");
          airText.innerText = "Mati";
        } else if(data.modeAir == 1) {
          airMode.classList.remove("switchActive");
          airText.innerText = "Hidup";
        }

        if(data.modePupuk == 0) {
          pupukMode.classList.add("switchActive");
          pupukText.innerText = "Mati";
        } else if(data.modePupuk == 1) {
          pupukMode.classList.remove("switchActive");
          pupukText.innerText = "Hidup";
        }
      });
      initText.classList.remove("text-warning");
      initText.innerText = "Pengaturan Siap!";
      initText.classList.add("text-success");
    }

    function setAirModeOn() {
      $.get("{{ route('setModeAirOn') }}").always(function() {
        let initText = document.getElementById("theAlert");
        initText.classList.remove("text-success");
        initText.innerText = "Sedang menghidupkan Sensor...";
        initText.classList.add("text-warning");
      });
    }
    function setAirModeOff() {
      $.get("{{ route('setModeAirOff') }}").always(function() {
        let initText = document.getElementById("theAlert");
        initText.classList.remove("text-success");
        initText.innerText = "Sedang mematikan Sensor...";
        initText.classList.add("text-warning");
      });
    }
    function setPupukModeOn() {
      $.get("{{ route('setModePupukOn') }}").always(function() {
        let initText = document.getElementById("theAlert");
        initText.classList.remove("text-success");
        initText.innerText = "Sedang menghidupkan Sensor...";
        initText.classList.add("text-warning");
      });
    }
    function setPupukModeOff() {
      $.get("{{ route('setModePupukOff') }}").always(function() {
        let initText = document.getElementById("theAlert");
        initText.classList.remove("text-success");
        initText.innerText = "Sedang mematikan Sensor...";
        initText.classList.add("text-warning");
      });
    }

    function setModeEnabled() {
      document.getElementById('switch1').addEventListener('click', function() {
        let airMode = document.getElementById("switch1");
        airMode.classList.toggle('switchActive');
        let text = document.getElementById('switchStatus1');
        if(text.innerText == "Hidup") {
          text.innerText = "Mati";
          setAirModeOff();
        } else {
          text.innerText = "Hidup";
          setAirModeOn();
        }
      });
      document.getElementById('switch2').addEventListener('click', function() {
        let pupukMode = document.getElementById("switch2");
        pupukMode.classList.toggle('switchActive');
        let text = document.getElementById('switchStatus2');
        if(text.innerText == "Hidup") {
          text.innerText = "Mati";
          setPupukModeOff();
        } else {
          text.innerText = "Hidup";
          setPupukModeOn();
        }
      });
    }

    setInterval(checkMode, 5000);
    setTimeout(setModeEnabled, 6000);
    // setInterval(readDataRataRataSuhu, 5000);
    // setInterval(readDataRataRataCahaya, 5000);
    // setInterval(readDataRataRataKelembaban, 5000);
    // setInterval(readDataRataRataKelembabanTanah, 5000);
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

</html>