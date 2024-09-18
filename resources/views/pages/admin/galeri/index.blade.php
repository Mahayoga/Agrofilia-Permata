@extends('layouts.app', ['breadcrum' => ['Data Galeri'], 'currentBreadcrum' => 'Data Galeri'])
@section('title', 'Data Galeri')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-6 d-flex align-items-center">
              <h6 class="text-white text-capitalize ps-3 m-0">Tabel Galeri</h6>
            </div>
            <div class="col-md-6 col-sm-6 col-6 d-flex justify-content-end px-4">
              <a href="{{ route('galeri.create') }}" class="btn btn-light m-0">Tambah Data</a>
            </div>
          </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Galeri</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi Kebun</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Preview</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Dibuat</th>
                <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Aksi</th>
              </tr>
            </thead>
            <tbody id="tbodyKebun">
              @php
                $i = 0;
              @endphp
              @foreach ($dataGaleri as $item)
                @php
                  $i++;
                @endphp
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <span class="text-secondary text-xs font-weight-bold">{{ $i }}</span>
                    </div>
                  </td>
                  <td class="align-middle text-sm">
                    <span class="text-secondary text-xs font-weight-bold">{{ $item->judul_galeri }}</span>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Blok 1</p>
                    <p class="text-xs text-secondary mb-0">Kebun Vanili Rembangan</p>
                  </td>
                  <td class="align-middle">
                    <div class="row">
                      <div class="col-md-12 d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $item->dokumentasi_kegiatan) }}" alt="{{ $item->judul_galeri }}" srcset="" width="40%">
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{ route('galeri.show', ['galeri' => $item->id]) }}" class="text-xs font-weight-bold text-uppercase">Periksa</a>
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