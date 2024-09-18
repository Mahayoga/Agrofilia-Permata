@extends('layouts.app', ['breadcrum' => ['Data Notifikasi'], 'currentBreadcrum' => 'Data Notifikasi'])
@section('title', 'Data Notifikasi')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Tabel Notifikasi Sensor</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 w-100 d-block overflow-auto" style="max-height: 400px">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">NO</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">Indeks Notifikasi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0 w-100 ps-2">Deskripsi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">Waktu</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">Lokasi</th>
                </tr>
              </thead>
              <tbody id="tbodyBlok">
                @php
                  $i = 0;
                @endphp
                @foreach ($hasilSensor as $item)
                  <tr>
                    @php
                      $i++;
                    @endphp
                    <td class="text-center align-middle">
                      <span class="text-secondary text-xs font-weight-bold">{{ $i }}</span>
                    </td>
                    <td>
                      @if($item->level_notifikasi == "Bahaya")
                      <div class="d-flex px-2 py-1">
                        <h6 class="mb-0 badge badge-sm bg-gradient-danger">{{ $item->level_notifikasi }}</h6>
                      </div>
                      @elseif($item->level_notifikasi == "Peringatan")
                      <div class="d-flex px-2 py-1">
                        <h6 class="mb-0 badge badge-sm bg-gradient-warning">{{ $item->level_notifikasi }}</h6>
                      </div>
                      @endif
                    </td>
                    <td class="text-sm">
                      <span class="text-secondary text-xxs">{{ $item->deskripsi }}</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-secondary text-xxs">{{ $item->created_at }}</span>
                    </td>
                    <td class="text-sm">
                      <span class="text-secondary text-xxs">Kebun Vanili Rembangan - Blok 1</span>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Tabel Notifikasi Mode</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 w-100 d-block overflow-auto" style="max-height: 400px">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">NO</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">Indeks Notifikasi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0 w-100 ps-2">Deskripsi</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">Waktu</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder bg-white position-sticky top-0">Lokasi</th>
                </tr>
              </thead>
              <tbody id="tbodyBlok">
                @php
                  $i = 0;
                @endphp
                @foreach ($hasilMode as $item)
                  <tr>
                    @php
                      $i++;
                    @endphp
                    <td class="text-center align-middle">
                      <span class="text-secondary text-xs font-weight-bold">{{ $i }}</span>
                    </td>
                    <td>
                      @if($item->level_notifikasi == "Bahaya")
                      <div class="d-flex px-2 py-1">
                        <h6 class="mb-0 badge badge-sm bg-gradient-danger">{{ $item->level_notifikasi }}</h6>
                      </div>
                      @elseif($item->level_notifikasi == "Peringatan")
                      <div class="d-flex px-2 py-1">
                        <h6 class="mb-0 badge badge-sm bg-gradient-warning">{{ $item->level_notifikasi }}</h6>
                      </div>
                      @endif
                    </td>
                    <td class="text-sm">
                      <span class="text-secondary text-xxs">{{ $item->deskripsi }}</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-secondary text-xxs">{{ $item->waktu }}</span>
                    </td>
                    <td class="text-sm">
                      <span class="text-secondary text-xxs">Kebun Vanili Rembangan - Blok 1</span>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid py-4">
  <div class="position-fixed bottom-1 end-1 z-index-2">
    <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
      <div class="toast-header border-0">
        <i class="material-icons text-success me-2">check</i>
        <span class="me-auto font-weight-bold">Material Dashboard </span>
        <small class="text-body">11 mins ago</small>
        <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
      </div>
      <hr class="horizontal dark m-0">
      <div class="toast-body">
        Hello, world! This is a notification message.
      </div>
    </div>
    <div class="toast fade hide p-2 mt-2 bg-gradient-info" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
      <div class="toast-header bg-transparent border-0">
        <i class="material-icons text-white me-2">notifications</i>
        <span class="me-auto text-white font-weight-bold">Material Dashboard </span>
        <small class="text-white">11 mins ago</small>
        <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
      </div>
      <hr class="horizontal light m-0">
      <div class="toast-body text-white">
        Hello, world! This is a notification message.
      </div>
    </div>
    <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="warningToast" aria-atomic="true">
      <div class="toast-header border-0">
        <i class="material-icons text-warning me-2">travel_explore</i>
        <span class="me-auto font-weight-bold">Material Dashboard </span>
        <small class="text-body">11 mins ago</small>
        <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
      </div>
      <hr class="horizontal dark m-0">
      <div class="toast-body">
        Hello, world! This is a notification message.
      </div>
    </div>
    <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="dangerToast" aria-atomic="true">
      <div class="toast-header border-0">
        <i class="material-icons text-danger me-2">campaign</i>
        <span class="me-auto text-gradient text-danger font-weight-bold">Material Dashboard </span>
        <small class="text-body">11 mins ago</small>
        <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
      </div>
      <hr class="horizontal dark m-0">
      <div class="toast-body">
        Hello, world! This is a notification message.
      </div>
    </div>
  </div>
</div>
@endsection