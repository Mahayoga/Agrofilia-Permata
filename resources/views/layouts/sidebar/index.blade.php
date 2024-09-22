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
        <a class="{{ Request::is('dashboard') ? 'active bg-gradient-primary' : '' }} nav-link text-white" href="{{ route('dashboard') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="{{ Request::is('dashboard/tabel-data*') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('tableView') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="{{ Request::is('riwayatdata*') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('riwayatdata.index') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">table_view</i>
          </div>
          <span class="nav-link-text ms-1">Riwayat Data</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="{{ Request::is('dashboard/notifikasi') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('notificationView') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">notifications</i>
          </div>
          <span class="nav-link-text ms-1">Notifications</span>
        </a>
      </li>
      @if (Auth::user()->role != "Pengurus Kebun")
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Halaman Tambah Data</h6>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is('kebun*') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('kebun.create') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">folder</i>
            </div>
            <span class="nav-link-text ms-1">Data Kebun</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is('blok*') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('blok.create') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">folder</i>
            </div>
            <span class="nav-link-text ms-1">Data Blok</span>
          </a>
        </li>
        @if (Auth::user()->role == "Super Admin" || Auth::user()->role == "Admin")
          <li class="nav-item">
            <a class="{{ Request::is('pengguna*') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('pengguna.index') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">folder</i>
              </div>
              <span class="nav-link-text ms-1">Data Pengguna</span>
            </a>
          </li>
        @endif
        @if (Auth::user()->role == "Super Admin" || Auth::user()->role == "Manager" || Auth::user()->role == "Admin")
          <li class="nav-item">
            <a class="{{ Request::is('galeri*') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('galeri.index') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">folder</i>
              </div>
              <span class="nav-link-text ms-1">Data Galeri</span>
            </a>
          </li>
        @endif
      @endif
      {{-- <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Halaman Pengguna</h6>
      </li>
      <li class="nav-item">
        <a class="{{ Request::is('pengguna/show') ? 'active bg-gradient-primary' : '' }} nav-link text-white " href="{{ route('pengguna.show', ['pengguna' => 'show']) }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li> --}}
    </ul>
  </div>
  <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
      <a class="btn bg-gradient-primary w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </div> -->
</aside>