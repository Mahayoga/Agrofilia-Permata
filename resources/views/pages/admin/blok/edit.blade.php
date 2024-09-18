@extends('layouts.app', ['breadcrum' => ['Data Blok'], 'currentBreadcrum' => 'Edit Data Blok'])
@section('title', 'Edit Data Blok')
@section('content')
<div class="container-fluid">
  <div class="card">
    <form action="{{ route('blok.update', ['blok' => $dataBlok[0]->id_detail_blok]) }}" method="post">
      @csrf
      @method('put')
      <div class="row">
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Blok
                @if ($errors->has('nama'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('nama') ? old('nama') : $dataBlok[0]->nama_blok }}" placeholder="Masukkan nama blok Anda" type="text" name="nama" id="" class="form-control p-2 border @error('nama') is-invalid @enderror">
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
                  <option {{ (old('kebun_asal') == $item->nama_kebun) ? 'selected' : (($dataBlok[0]->id_kebun == $item->id_kebun) ? 'selected' : '') }} value="{{ $item->id_kebun }}">{{ $item->nama_kebun }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="status_blok">Status Blok
                @if ($errors->has('status_blok'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <select name="status_blok" id="" class="form-control p-2 border @error('status_blok') is-invalid @enderror">                
                <option {{ old('status_blok') == '' ? 'selected':'' }}  value="">Pilih</option>
                <option {{ (old('status_blok') == 'Normal') ? 'selected' : (($dataBlok[0]->status_blok == 'Normal') ? 'selected' : '') }} value="Normal">Normal</option>
                <option {{ (old('status_blok') == 'Masa Kritis') ? 'selected' : (($dataBlok[0]->status_blok == 'Masa Kritis') ? 'selected' : '') }} value="Masa Kritis">Masa Kritis</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="fase_tanaman">Fase Tanaman
                @if ($errors->has('fase_tanaman'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <select name="fase_tanaman" id="" class="form-control p-2 border @error('fase_tanaman') is-invalid @enderror">
                <option {{ old('fase_tanaman') == '' ? 'selected':'' }}  value="">Pilih</option>
                <option {{ (old('fase_tanaman') == 'Generatif') ? 'selected' : (($dataBlok[0]->fase_tanaman == 'Generatif') ? 'selected' : '') }} value="Generatif">Generatif</option>
                <option {{ (old('fase_tanaman') == 'Vegetatif') ? 'selected' : (($dataBlok[0]->fase_tanaman == 'Vegetatif') ? 'selected' : '') }} value="Vegetatif">Vegetatif</option>
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