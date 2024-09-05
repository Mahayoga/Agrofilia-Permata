@extends('layouts.app')
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
								<script>
									$.get("{{ route('listBlok', ['id_kebun' => $id]) }}", function(data) {
										let tbodyKebun = document.getElementById("tbodyBlok");
										for(var i = 0; i < data.daftar_blok.length; i++) {
											let tableRow = document.createElement("tr");
												let tableData1 = document.createElement("td");
													let divElement1 = document.createElement("div");
														let headingSix1 = document.createElement("h6");

												let tableData3 = document.createElement("td");
													let spanElement1 = document.createElement("span");

												let tableData4 = document.createElement("td");
													let spanElement2 = document.createElement("span");

												let tableData5 = document.createElement("td");
													let anchorElement1 = document.createElement("a");
													let spanElement3 = document.createElement("span");
													let anchorElement2 = document.createElement("a");

												divElement1.setAttribute("class", "d-flex px-2 py-1");
													headingSix1.setAttribute("class", "mb-0 text-sm");

												tableData3.setAttribute("class", "align-middle text-sm");
													if(data.daftar_blok[i].kondisi_blok == "Normal") {
														spanElement1.setAttribute("class", "badge badge-sm bg-gradient-success");
														spanElement2.appendChild(document.createTextNode("Tidak ada"));
													} else if(data.daftar_blok[i].kondisi_blok == "Peringatan") {
														spanElement1.setAttribute("class", "badge badge-sm bg-gradient-warning");
														spanElement2.appendChild(document.createTextNode("Terdapat masalah: sebaiknya diperiksa"));
													} else if(data.daftar_blok[i].kondisi_blok == "Bahaya") { 
														spanElement1.setAttribute("class", "badge badge-sm bg-gradient-danger");
														spanElement2.appendChild(document.createTextNode("Perlu tindakan segera"));
													}

												tableData4.setAttribute("class", "align-middle");
													spanElement2.setAttribute("class", "text-secondary text-xs font-weight-bold");

												tableData5.setAttribute("class", "align-middle text-center");
													anchorElement1.setAttribute("class", "text-secondary font-weight-bold text-xs");
													anchorElement2.setAttribute("class", "text-secondary font-weight-bold text-xs");

												headingSix1.appendChild(document.createTextNode(data.daftar_blok[i].nama_blok));
												spanElement1.appendChild(document.createTextNode(data.daftar_blok[i].kondisi_blok));
												anchorElement1.appendChild(document.createTextNode("Periksa"));
												spanElement3.appendChild(document.createTextNode(" | "));
												anchorElement2.appendChild(document.createTextNode("Edit"));

												let baseUrl = "{{ route('specificBlockView', ['id_blok' => '__ID__']) }}";
												let finalUrl = baseUrl.replace("__ID__", data.daftar_blok[i].id_detail_blok);
												anchorElement1.setAttribute("href", finalUrl);
												anchorElement2.setAttribute("href", "belum_ada");

													divElement1.appendChild(headingSix1);
												tableData1.appendChild(divElement1);
												tableData3.appendChild(spanElement1);
												tableData4.appendChild(spanElement2);
												tableData5.appendChild(anchorElement1);
												tableData5.appendChild(spanElement3);
												tableData5.appendChild(anchorElement2);

												tableRow.appendChild(tableData1);
												tableRow.appendChild(tableData3);
												tableRow.appendChild(tableData4);
												tableRow.appendChild(tableData5);

												tbodyKebun.appendChild(tableRow);
										}
									});
								</script>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection