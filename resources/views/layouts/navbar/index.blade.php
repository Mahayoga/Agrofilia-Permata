<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        @foreach ($breadcrum as $item)
          <li class="breadcrumb-item text-sm">{{ $item }}</li>
        @endforeach
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $currentBreadcrum }}</li>
      </ol>
      <h6 class="font-weight-bolder mb-0">{{ $currentBreadcrum }}</h6>
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
              <a class="dropdown-item border-radius-md" href="{{ route('pengguna.show', ['pengguna' => 'show']) }}">
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