@extends('layouts.app', ['breadcrum' => ['Data Kebun'], 'currentBreadcrum' => 'Tambah Data Kebun'])
@section('title', 'Tambah Data Kebun')
@section('content')
<div class="container-fluid">
  <div class="card">
    <form action="{{ route('kebun.store') }}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Kebun
                @if ($errors->has('nama'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('nama') }}" placeholder="Masukkan nama kebun Anda" type="text" name="nama" id="" class="form-control p-2 border @error('nama') is-invalid @enderror">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="daerah">Nama Daerah
                @if ($errors->has('daerah'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('daerah') }}" placeholder="Masukkan daerah/desa Anda" type="text" name="daerah" id="" class="form-control p-2 border @error('daerah') is-invalid @enderror">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="kecamatan">Kecamatan
                @if ($errors->has('kecamatan'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('kecamatan') }}" placeholder="Masukkan kecamatan Anda" type="text" name="kecamatan" id="" class="form-control p-2 border @error('kecamatan') is-invalid @enderror">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="provinsi">Provinsi
                @if ($errors->has('provinsi'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('provinsi') }}" placeholder="Masukkan provinsi Anda" type="text" name="provinsi" id="" class="form-control p-2 border @error('provinsi') is-invalid @enderror">
            </div>
          </div>
        </div>
        <div class="col-md-12 px-5 d-flex justify-content-end">
          <a href="{{ route('tableView') }}" class="btn btn-danger mx-2">Batal</a>
          <input type="submit" value="Kirim!" class="btn btn-info mx-2">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection