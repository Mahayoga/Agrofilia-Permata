@extends('layouts.app', ['breadcrum' => ['Data Pengguna'], 'currentBreadcrum' => 'Edit Data Pengguna'])
@section('title', 'Edit Data Pengguna')
@section('content')
<div class="container-fluid">
  <div class="card">
    <form action="{{ route('pengguna.update', ['pengguna' => $dataUser[0]->id]) }}" method="post">
      @csrf
      @method('put')
      <div class="row">
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Lengkap
                @if ($errors->has('nama'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('nama') ? old('nama') : $dataUser[0]->name }}" placeholder="Masukkan Nama Lengkap Anda" type="text" name="nama" id="" class="form-control p-2 border @error('nama') is-invalid @enderror">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="role">Role
                @if ($errors->has('role'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <select name="role" id="" class="form-control p-2 border @error('role') is-invalid @enderror">
                {{--  --}}
                @if(!isset($dataUser[0]->role) && !(old('role')))
                  <option selected value="">Pilih</option>
                @endif

                @if($dataUser[0]->role == 'Admin' && !(old('role')))
                  <option selected value="Admin">Admin</option>
                @elseif(old('role') == 'Admin')
                  <option selected value="Admin">Admin</option>
                @else
                  <option value="Admin">Admin</option>
                @endif

                @if($dataUser[0]->role == 'Manager' && !(old('role')))
                  <option selected value="Manager">Manager</option>
                @elseif(old('role') == 'Manager')
                  <option selected value="Manager">Manager</option>
                @else
                  <option value="Manager">Manager</option>
                @endif

                @if($dataUser[0]->role == 'Pengurus Kebun' && !(old('role')))
                  <option selected value="Pengurus Kebun">Pengurus Kebun</option>
                @elseif(old('role') == 'Pengurus Kebun')
                  <option selected value="Pengurus Kebun">Pengurus Kebun</option>
                @else
                  <option value="Pengurus Kebun">Pengurus Kebun</option>
                @endif
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="form-group">
              <label for="no_tlp">Nomor Telepon
                @if ($errors->has('no_tlp'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('no_tlp') ? old('no_tlp') : $dataUser[0]->nomor_telepon }}" placeholder="Contoh: 082-337-341-446" type="tel" name="no_tlp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" id="no_telp" class="form-control p-2 border @error('no_tlp') is-invalid @enderror">
              <small id="no_tlp" class="form-text text-xs text-muted">Format: 082-123-456-789</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body pt-0">
            <div class="form-group">
              <label for="alamat">Alamat
                @if ($errors->has('alamat'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('alamat') ? old('alamat') : $dataUser[0]->alamat }}" placeholder="Masukkan Alamat" type="text" name="alamat" id="alamat" class="form-control p-2 border @error('alamat') is-invalid @enderror">
              <small id="alamat" class="form-text text-xs text-muted">Isikan alamat lengkap</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body pt-0">
            <div class="form-group">
              <label for="deskripsi">Deskripsi
                @if ($errors->has('deskripsi'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <textarea placeholder="Masukkan deskripsi" type="textarea" name="deskripsi" id="deskripsi" class="form-control p-2 border @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') ? old('deskripsi') : $dataUser[0]->deskripsi }}</textarea>
              <small id="deskripsi" class="form-text text-xs text-muted">Isikan deskripsi anda</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body pt-0">
            <div class="form-group">
              <label for="email">Email
                @if ($errors->has('email'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <input value="{{ old('email') ? old('email') : $dataUser[0]->email }}" placeholder="Masukkan Email" type="email" name="email" id="email" class="form-control p-2 border @error('email') is-invalid @enderror">
              <small id="email" class="form-text text-xs text-muted">Pastikan email anda aktif!</small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-body pt-0">
            <div class="form-group">
              <label for="password">Password
                @if ($errors->has('password'))
                  <span class="text-danger">*</span>
                @endif
              </label>
              <br>
              <small id="password" class="form-text text-xs text-warning">Jika anda ingin mengubah password anda, maka silahkan logout lalu login kembali, dan klik lupa password</small>
            </div>
          </div>
        </div>
        <div class="col-md-12 px-5 d-flex justify-content-end">
          <a href="{{ route('pengguna.index') }}" class="btn btn-danger mx-2">Batal</a>
          <input type="submit" value="Kirim!" class="btn btn-info mx-2">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection