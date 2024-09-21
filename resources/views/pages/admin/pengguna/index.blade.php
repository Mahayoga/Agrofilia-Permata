@extends('layouts.app', ['breadcrum' => ['Data Pengguna'], 'currentBreadcrum' => 'Data Pengguna'])
@section('title', 'Data Pengguna')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-6 d-flex align-items-center">
              <h6 class="text-white text-capitalize ps-3 m-0">Tabel Pengguna</h6>
            </div>
            <div class="col-md-6 col-sm-6 col-6 d-flex justify-content-end px-4">
              <a href="{{ route('pengguna.create') }}" class="btn btn-light m-0">Tambah Data</a>
            </div>
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
                    <a href="{{ route('pengguna.show', ['pengguna' => $item->id]) }}" class="text-xs font-weight-bold text-uppercase">INFO</a>
                    <span class="">|</span>
                    <a href="{{ route('pengguna.edit', ['pengguna' => $item->id]) }}" class="text-xs font-weight-bold text-uppercase">EDIT</a>
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
@endsection