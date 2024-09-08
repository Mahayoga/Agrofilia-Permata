@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="card">
      <form action="{{ route('pengguna.store') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-4">
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Lengkap
                  @if ($errors->has('nama'))
                    <span class="text-danger">*</span>
                  @endif
                </label>
                <input value="{{ old('nama') }}" placeholder="Masukkan Nama Lengkap Anda" type="text" name="nama" id="" class="form-control p-2 border @error('nama') is-invalid @enderror">
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
                  <option {{ old('role') == '' ? 'selected':''; }}  value="">Pilih</option>
                  <option {{ old('role') == 'Admin' ? 'selected':''; }}  value="Admin">Admin</option>
                  <option {{ old('role') == 'Manager' ? 'selected':''; }}  value="Manager">Manager</option>
                  <option {{ old('role') == 'Pengurus Kebun' ? 'selected':''; }}  value="Pengurus Kebun">Pengurus Kebun</option>
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
                <input value="{{ old('no_tlp') }}" placeholder="Contoh: 082-337-341-446" type="tel" name="no_tlp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}" id="no_telp" class="form-control p-2 border @error('no_tlp') is-invalid @enderror">
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
                <input value="{{ old('alamat') }}" placeholder="Masukkan Alamat" type="text" name="alamat" id="alamat" class="form-control p-2 border @error('alamat') is-invalid @enderror">
                <small id="alamat" class="form-text text-xs text-muted">Isikan alamat lengkap</small>
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
                <input value="{{ old('email') }}" placeholder="Masukkan Email" type="email" name="email" id="email" class="form-control p-2 border @error('email') is-invalid @enderror">
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
                <input value="{{ old('password') }}" placeholder="Masukkan Password" type="password" name="password" id="password" class="form-control p-2 border @error('password') is-invalid @enderror">
                <small id="password" class="form-text text-xs text-muted">Masukkan password minimal 8 karakter</small>
              </div>
            </div>
          </div>
          <div class="col-md-12 px-5 d-flex justify-content-end">
            <a href="{{ route('dashboard') }}" class="btn btn-danger mx-2">Batal</a>
            <input type="submit" value="Kirim!" class="btn btn-info mx-2">
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection