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
    Kebun Vanili - Tabel Data | Agrofilia Permata
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
  <!-- JQuery -->
  <script src="{{ asset('jquery/jquery.min.js') }}"></script>
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
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
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
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabel Kebun</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kebun</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi Kebun</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tindakan</th>
                      <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Aksi</th>
                    </tr>
                  </thead>
                  <tbody id="tbodyKebun">
                    <script>
                      $.get("{{ route('listKebun') }}", function(data) {
                        let tbodyKebun = document.getElementById("tbodyKebun");
                        for(var i = 0; i < data.daftar_kebun.length; i++) {
                          let tableRow = document.createElement("tr");
                            let tableData1 = document.createElement("td");
                              let divElement1 = document.createElement("div");
                                let headingSix1 = document.createElement("h6");

                            let tableData2 = document.createElement("td");
                              let paragraphElement1 = document.createElement("p");
                              let paragraphElement2 = document.createElement("p");

                            let tableData3 = document.createElement("td");
                              let spanElement1 = document.createElement("span");

                            let tableData4 = document.createElement("td");
                              let spanElement2 = document.createElement("span");

                            let tableData5 = document.createElement("td");
                              let anchorElement1 = document.createElement("a");
                              let spanElement3 = document.createElement("span");
                              let anchorElement2 = document.createElement("a");

                            divElement1.setAttribute("class", "d-flex px-2 py-1");
                              headingSix1.setAttribute("class", "mb-0 text-sm");

                            paragraphElement1.setAttribute("class", "text-xs font-weight-bold mb-0")
                            paragraphElement2.setAttribute("class", "text-xs text-secondary mb-0")

                            tableData3.setAttribute("class", "align-middle text-sm");
                              if(data.daftar_kebun[i].status_kebun == "Normal") {
                                spanElement1.setAttribute("class", "badge badge-sm bg-gradient-success");
                                spanElement2.appendChild(document.createTextNode("Tidak ada"));
                              } else if(data.daftar_kebun[i].status_kebun == "Peringatan") {
                                spanElement1.setAttribute("class", "badge badge-sm bg-gradient-warning");
                                spanElement2.appendChild(document.createTextNode("Terdapat masalah: sebaiknya diperiksa"));
                              } else if(data.daftar_kebun[i].status_kebun == "Bahaya") { 
                                spanElement1.setAttribute("class", "badge badge-sm bg-gradient-danger");
                                spanElement2.appendChild(document.createTextNode("Perlu tindakan segera"));
                              }

                            tableData4.setAttribute("class", "align-middle");
                              spanElement2.setAttribute("class", "text-secondary text-xs font-weight-bold");

                            tableData5.setAttribute("class", "align-middle text-center");
                              anchorElement1.setAttribute("class", "text-secondary font-weight-bold text-xs");
                              anchorElement2.setAttribute("class", "text-secondary font-weight-bold text-xs");

                            headingSix1.appendChild(document.createTextNode(data.daftar_kebun[i].nama_kebun));
                            paragraphElement1.appendChild(document.createTextNode(data.daftar_kebun[i].nama_daerah))
                            paragraphElement2.appendChild(document.createTextNode(data.daftar_kebun[i].lokasi_kebun))
                            spanElement1.appendChild(document.createTextNode(data.daftar_kebun[i].status_kebun));
                            anchorElement1.appendChild(document.createTextNode("Periksa"));
                            spanElement3.appendChild(document.createTextNode(" | "));
                            anchorElement2.appendChild(document.createTextNode("Edit"));

                            let baseUrl = "{{ route('blocksTableView', ['id' => '__ID__']) }}";
                            let finalUrl = baseUrl.replace("__ID__", data.daftar_kebun[i].id_kebun);
                            anchorElement1.setAttribute("href", finalUrl);
                            anchorElement2.setAttribute("href", "belum_ada");

                              divElement1.appendChild(headingSix1);
                            tableData1.appendChild(divElement1);
                            tableData2.appendChild(paragraphElement1);
                            tableData2.appendChild(paragraphElement2);
                            tableData3.appendChild(spanElement1);
                            tableData4.appendChild(spanElement2);
                            tableData5.appendChild(anchorElement1);
                            tableData5.appendChild(spanElement3);
                            tableData5.appendChild(anchorElement2);

                            tableRow.appendChild(tableData1);
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);

                            tbodyKebun.appendChild(tableRow);
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
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabel Pengguna</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pengguna</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Tlp</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Pengguna Satu</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-light mb-0">Super Admin</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">+62 82000</span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">Jl. Baratan</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                        <span class="">|</span>
                        <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Pengguna Dua</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-light mb-0">Manager</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">+62 82000</span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">Jl. Baratan</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                        <span class="">|</span>
                        <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Pengguna Tiga</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-light mb-0">Owner</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">+62 82000</span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">Jl. Baratan</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                        <span class="">|</span>
                        <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">Pengguna Empat</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-light mb-0">Pengelola Lahan</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">+62 82000</span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">Jl. Baratan</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                        <span class="">|</span>
                        <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
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