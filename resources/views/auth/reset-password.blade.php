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
    Kebun Vanili - Reset Password | Agrofilia Permata
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
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('{{ asset('img/Background Login.png') }}');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mb-0">Lupa Password</h4>
                </div>
              </div>
              <div class="card-body">
                <form action="{{ route('password.store') }}" method="POST" class="text-start">
                  <input type="hidden" name="token" value="{{ $request->route('token') }}">
                  @csrf
                  <div class="form-group input-group-outline my-3">
                    <label for="email">Email</label>
                    <input value="{{ old('email', $request->email) }}" placeholder="Masukkan email anda" type="email" id="email" name="email" class="form-control p-2 border @error('email') is-invalid @enderror">
                    <small id="email" class="form-text text-xs text-muted">Masukkan email yang akan anda lakukan reset password, pastikan email sudah benar dan aktif untuk melakukan verifikasi.</small>
                  </div>
                  <div class="form-group input-group-outline mb-3">
                    <label for="password">Konfirmasi Password</label>
                    <input value="{{ old('password') }}" placeholder="Masukkan kata sandi" type="password" id="password" name="password" class="form-control p-2 border @error('password') is-invalid @enderror">
                    @if($errors->has('password') || $errors->has('password'))
                      <small id="password" class="form-text text-xs text-danger">Kata sandi tidak sama</small>
                    @endif
                  </div> 
                  <div class="form-group input-group-outline mb-3">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input value="{{ old('password_confirmation') }}" placeholder="Masukkan kata sandi" type="password" id="password_confirmation" name="password_confirmation" class="form-control p-2 border @error('password_confirmation') is-invalid @enderror">
                    @if($errors->has('password_confirmation') || $errors->has('password_confirmation'))
                      <small id="password_confirmation" class="form-text text-xs text-danger">Kata sandi tidak sama</small>
                    @endif
                  </div> 
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Reset Password</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Vanili Dev</a>
                for a better web.
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
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
