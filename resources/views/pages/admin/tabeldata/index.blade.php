@extends('layouts.app')
@section('content')
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
                @foreach ($dataKebun as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <h6 class="mb-0 text-sm">{{ $item->nama_kebun }}</h6>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $item->nama_daerah }}</p>
                        <p class="text-xs text-secondary mb-0">{{ $item->lokasi_kebun }}</p>
                      </td>
                      @php
                        $statusText = "Tidak Ada";
                        $classSpan1 = "";
                      @endphp
                      <td class="align-middle text-sm">
                        @if($item->status_kebun == "Normal")
                          @php
                            $classSpan1 = "badge badge-sm bg-gradient-success";
                          @endphp
                        @elseif($item->status_kebun == "Peringatan")
                          @php
                            $classSpan1 = "badge badge-sm bg-gradient-warning";
                            $statusText = "Terdapat masalah: sebaiknya diperiksa";
                          @endphp
                        @elseif($item->status_kebun == "Bahaya")
                          @php
                            $classSpan1 = "badge badge-sm bg-gradient-danger";
                            $statusText = "Perlu tindakan segera";
                          @endphp
                        @endif
                        <span class="{{ $classSpan1 }}">{{ $item->status_kebun }}</span>
                      </td>
                      <td class="align-middle">
                        <span class="text-secondary text-xs font-weight-bold">{{ $statusText }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="{{ route('blocksTableView', ['id' => $item->id_kebun]) }}" class="text-xs font-weight-bold text-uppercase">Periksa</a>
                        <span>|</span>
                        <a href="" class="text-xs font-weight-bold text-uppercase">Edit</a>
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
  @if (Auth::user()->role == "Super Admin")
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Tlp</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dataUser as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-light mb-0">{{ $item->role }}</p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">{{ $item->nomor_telepon }}</span>
                      </td>
                      <td>
                        <span class="text-xs font-weight-light">{{ $item->alamat }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                        <span class="">|</span>
                        <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
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
  @endif
</div>
@endsection