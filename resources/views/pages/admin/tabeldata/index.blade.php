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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kebun</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lokasi Kebun</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tindakan</th>
                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody id="tbodyKebun">
                <script>
                  $.get("{{ route('listKebun') }}", function(data) {
                    let tbodyKebun = document.getElementById("tbodyKebun");
                    for(var i = 0; i < data.daftar_kebun.length; i++) {
                      let tableRow = document.createElement("tr");
                        let tableData1 = document.createElement("td");
                          let divElement1 = document.createElement("div");
                            let headingSix1 = document.createElement("h6");

                        let tableData2 = document.createElement("td");
                          let paragraphElement1 = document.createElement("p");
                          let paragraphElement2 = document.createElement("p");

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

                        paragraphElement1.setAttribute("class", "text-xs font-weight-bold mb-0")
                        paragraphElement2.setAttribute("class", "text-xs text-secondary mb-0")

                        tableData3.setAttribute("class", "align-middle text-sm");
                          if(data.daftar_kebun[i].status_kebun == "Normal") {
                            spanElement1.setAttribute("class", "badge badge-sm bg-gradient-success");
                            spanElement2.appendChild(document.createTextNode("Tidak ada"));
                          } else if(data.daftar_kebun[i].status_kebun == "Peringatan") {
                            spanElement1.setAttribute("class", "badge badge-sm bg-gradient-warning");
                            spanElement2.appendChild(document.createTextNode("Terdapat masalah: sebaiknya diperiksa"));
                          } else if(data.daftar_kebun[i].status_kebun == "Bahaya") { 
                            spanElement1.setAttribute("class", "badge badge-sm bg-gradient-danger");
                            spanElement2.appendChild(document.createTextNode("Perlu tindakan segera"));
                          }

                        tableData4.setAttribute("class", "align-middle");
                          spanElement2.setAttribute("class", "text-secondary text-xs font-weight-bold");

                        tableData5.setAttribute("class", "align-middle text-center");
                          anchorElement1.setAttribute("class", "text-secondary font-weight-bold text-xs");
                          anchorElement2.setAttribute("class", "text-secondary font-weight-bold text-xs");

                        headingSix1.appendChild(document.createTextNode(data.daftar_kebun[i].nama_kebun));
                        paragraphElement1.appendChild(document.createTextNode(data.daftar_kebun[i].nama_daerah))
                        paragraphElement2.appendChild(document.createTextNode(data.daftar_kebun[i].lokasi_kebun))
                        spanElement1.appendChild(document.createTextNode(data.daftar_kebun[i].status_kebun));
                        anchorElement1.appendChild(document.createTextNode("Periksa"));
                        spanElement3.appendChild(document.createTextNode(" | "));
                        anchorElement2.appendChild(document.createTextNode("Edit"));

                        let baseUrl = "{{ route('blocksTableView', ['id' => '__ID__']) }}";
                        let finalUrl = baseUrl.replace("__ID__", data.daftar_kebun[i].id_kebun);
                        anchorElement1.setAttribute("href", finalUrl);
                        anchorElement2.setAttribute("href", "belum_ada");

                          divElement1.appendChild(headingSix1);
                        tableData1.appendChild(divElement1);
                        tableData2.appendChild(paragraphElement1);
                        tableData2.appendChild(paragraphElement2);
                        tableData3.appendChild(spanElement1);
                        tableData4.appendChild(spanElement2);
                        tableData5.appendChild(anchorElement1);
                        tableData5.appendChild(spanElement3);
                        tableData5.appendChild(anchorElement2);

                        tableRow.appendChild(tableData1);
                        tableRow.appendChild(tableData2);
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
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Tabel Pengguna</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pengguna</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Tlp</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Pengguna Satu</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-light mb-0">Super Admin</p>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">+62 82000</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">Jl. Baratan</span>
                  </td>
                  <td class="align-middle text-center">
                    <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                    <span class="">|</span>
                    <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Pengguna Dua</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-light mb-0">Manager</p>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">+62 82000</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">Jl. Baratan</span>
                  </td>
                  <td class="align-middle text-center">
                    <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                    <span class="">|</span>
                    <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Pengguna Tiga</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-light mb-0">Owner</p>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">+62 82000</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">Jl. Baratan</span>
                  </td>
                  <td class="align-middle text-center">
                    <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                    <span class="">|</span>
                    <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">Pengguna Empat</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-light mb-0">Pengelola Lahan</p>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">+62 82000</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-light">Jl. Baratan</span>
                  </td>
                  <td class="align-middle text-center">
                    <a href="" class="text-xs font-weight-bold text-uppercase">INFO</a>
                    <span class="">|</span>
                    <a href="" class="text-xs font-weight-bold text-uppercase">EDIT</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection