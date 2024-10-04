@extends('layouts.app', ['breadcrum' => ['Tabel Data'], 'currentBreadcrum' => 'Tabel Blok'])
@section('title', 'Tabel Blok')
@section('content')
<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card my-4">
				<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
					<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
						<h6 class="text-white text-capitalize ps-3">Tabel Kebun</h6>
					</div>
				</div>
				<div class="card-body px-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Indeks Blok</th>
									<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
									<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tindakan</th>
									<th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Aksi</th>
								</tr>
							</thead>
							<tbody id="tbodyBlok">
                @foreach ($dataBlok as $item)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <h6 class="mb-0 text-sm">{{ $item->nama_blok }}</h6>
                      </div>
                    </td>
                    <td class="align-middle text-sm">
                      @if ($item->kondisi_blok == 'Normal')
                        <span class="badge badge-sm bg-gradient-success">{{ $item->kondisi_blok }}</span>
                      @elseif ($item->kondisi_blok == 'Peringatan')
                      <span class="badge badge-sm bg-gradient-warning">{{ $item->kondisi_blok }}</span>
                      @elseif ($item->kondisi_blok == "Bahaya")
                      <span class="badge badge-sm bg-gradient-danger">{{ $item->kondisi_blok }}</span>
                      @endif
                    </td>
                    <td class="align-middle">
                      <span class="text-secondary text-xs font-weight-bold">
                        @if ($item->kondisi_blok == 'Normal')
                          {{ __('Tidak ada') }}
                        @elseif ($item->kondisi_blok == 'Peringatan')
                          {{ __('Terdapat masalah: sebaiknya diperiksa') }}
                        @elseif ($item->kondisi_blok == "Bahaya")
                          {{ __('Perlu tindakan segera') }}
                        @endif
                      </span>
                    </td>
                    <td class="align-middle text-center">
                      <a href="{{ route('show_detail', ['id' => $item->id_detail_blok]) }}" class="text-secondary font-weight-bold text-xs">Periksa</a>
                      <span>|</span>
                      <a href="{{ route('blok.edit', ['blok' => $item->id_detail_blok]) }}" class="text-secondary font-weight-bold text-xs">Edit</a>
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
</div>
@endsection