@extends('layouts.app', ['breadcrum' => ['Data Blok'], 'currentBreadcrum' => 'Tambah Data Blok'])
@section('title', 'Tambah Data Blok')
@section('content')
<div class="container-fluid">
  <div class="card">
    <form action="{{ route('blok.store') }}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Blok
                @if ($errors->has('nama'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('nama') }}" placeholder="Masukkan nama blok Anda" type="text" name="nama" id="" class="form-control p-2 border @error('nama') is-invalid @enderror">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="kebun_asal">Asal Kebun
                @if ($errors->has('kebun_asal'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <select name="kebun_asal" id="" class="form-control p-2 border @error('kebun_asal') is-invalid @enderror">
                <option {{ old('kebun_asal') == '' ? 'selected':'' }}  value="">Pilih</option>
                @foreach ($dataKebun as $item)
                  <option {{ old('kebun_asal') == $item->nama_kebun ? 'selected':'' }}  value="{{ $item->id_kebun }}">{{ $item->nama_kebun }}</option>
                @endforeach
              </select>
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