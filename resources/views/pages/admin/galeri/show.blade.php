@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="container">
    <div class="card p-4">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-md-4">
            <h6>Aksi</h6>
          </div>
          <div class="col-md-8 d-flex">
            <a href="{{ route('galeri.edit', ['galeri' => $dataGaleri[0]->id]) }}" class="btn btn-warning mx-2">Edit</a>
            <form action="{{ route('galeri.destroy', ['galeri' => $dataGaleri[0]->id]) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" onclick="return confirm('Apakah anda akan menghapus data ini? (aksi tidak dapat dikembalikan!)')" class="btn btn-danger mx-2">Hapus</button>
            </form>
            <a href="{{ route('galeri.index') }}" class="btn btn-info mx-2">Kembali</a>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="row">
          <div class="col-md-4">
            <h6>Judul galeri</h6>
          </div>
          <div class="col-md-8">
            <h6>{{ $dataGaleri[0]->judul_galeri }}</h6>
          </div>
          <div class="col-md-4">
            <h6>Deskripsi galeri</h6>
          </div>
          <div class="col-md-8">
            <span>{{ $dataGaleri[0]->deskripsi_galeri }}</span>
          </div>
          <div class="col-md-4">
            <h6>Tanggal dibuat</h6>
          </div>
          <div class="col-md-8">
            <span>{{ $dataGaleri[0]->created_at }}</span>
          </div>
          <div class="col-md-4">
            <h6>Preview media</h6>
          </div>
          <div class="col-md-12">
            <img width="100%" src="{{ asset('storage/' . $dataGaleri[0]->dokumentasi_kegiatan) }}">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection