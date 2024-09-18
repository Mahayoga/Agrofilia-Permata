@extends('layouts.app', ['breadcrum' => ['Data Galeri'], 'currentBreadcrum' => 'Edit Data Galeri'])
@section('title', 'Edit Data Galeri')
@section('content')
<div class="container-fluid">
  <div class="card">
    <form action="{{ route('galeri.update', ['galeri' => $dataGaleri[0]->id]) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="row">
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="judul">Judul Galeri
                @if ($errors->has('judul'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('judul') ? old('judul') : $dataGaleri[0]->judul_galeri }}" placeholder="Masukkan judul galeri" type="text" name="judul" id="" class="form-control p-2 border @error('judul') is-invalid @enderror">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="deskripsi">Deskripsi Galeri
                @if ($errors->has('deskripsi'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <textarea placeholder="Masukkan deskripsi" type="textarea" name="deskripsi" id="deskripsi" class="form-control p-2 border @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') ? old('deskripsi') : $dataGaleri[0]->deskripsi_galeri }}</textarea>
              <small id="deskripsi" class="form-text text-xs text-muted">Isikan deksripsi dari isi dokumentasi</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="file">File Dokumentasi
                @if ($errors->has('file'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('file') }}" placeholder="Masukkan file dokumentasi" type="file" name="file" id="file" class="form-control p-2 border @error('file') is-invalid @enderror">
              <small id="file" class="form-text text-xs text-muted">Pastikan file anda tidak melebihi ukuran 240MB!</small>
              <small id="file" class="form-text text-xs text-danger">Jika anda tidak ingin mengedit file ini, maka biarkan kosong!</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <img  width="100%" src="{{ asset('storage/' . $dataGaleri[0]->dokumentasi_kegiatan) }}" alt="">
          </div>
        </div>
        <div class="col-md-12 px-5 d-flex justify-content-end">
          <a href="{{ route('galeri.index') }}" class="btn btn-danger mx-2">Batal</a>
          <input type="submit" value="Kirim!" class="btn btn-info mx-2">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection