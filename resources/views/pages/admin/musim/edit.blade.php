@extends('layouts.app', ['breadcrum' => ['Dashboard'], 'currentBreadcrum' => 'Dashboard'])
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
  <div class="card">
    <form action="{{ route('musim.update', ['musim' => $dataMusim->id]) }}" method="post">
      @csrf
      @method('put')
      <div class="row">
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="musim">Musim
                @if ($errors->has('musim'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <select name="musim" id="" class="form-control p-2 border @error('musim') is-invalid @enderror">
                @if(!isset($dataMusim->kondisi_musim) && !(old('musim')))
                  <option selected value="">Pilih</option>
                @endif

                @if($dataMusim->kondisi_musim == 'Kemarau' && !(old('musim')))
                  <option selected value="Kemarau">Kemarau</option>
                @elseif(old('musim') == 'Kemarau')
                  <option selected value="Kemarau">Kemarau</option>
                @else
                  <option value="Kemarau">Kemarau</option>
                @endif

                @if($dataMusim->kondisi_musim == 'Hujan' && !(old('musim')))
                  <option selected value="Hujan">Hujan</option>
                @elseif(old('musim') == 'Hujan')
                  <option selected value="Hujan">Hujan</option>
                @else
                  <option value="Hujan">Hujan</option>
                @endif
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-12 px-5 d-flex justify-content-end">
          <a href="{{ route('dashboard') }}" class="btn btn-danger mx-2">Batal</a>
          <input type="submit" value="Edit!" class="btn btn-info mx-2">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection