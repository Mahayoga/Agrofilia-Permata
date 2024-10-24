@extends('layouts.app', ['breadcrum' => ['Tabel Data', 'Tabel Blok'], 'currentBreadcrum' => 'Detail Blok'])
@section('title', 'Detail Blok')
@section('content')
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-xl-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header mx-4 p-3 text-center">
              <h6 class="text-center">Peta Sensor pada Kebun</h6>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430 200" width="100%" height="200">
                <rect width="430" height="200" x="0" y="0" rx="0.75rem" ry="0.75rem" fill="#dbdbdb" />
                <line x1="20" y1="26" x2="410" y2="26" style="stroke:black;stroke-width:2" />
                <line x1="20" y1="62" x2="410" y2="62" style="stroke:black;stroke-width:2" />
                <line x1="20" y1="98" x2="410" y2="98" style="stroke:black;stroke-width:2" />
                <line x1="20" y1="136" x2="410" y2="136" style="stroke:black;stroke-width:2" />
                <line x1="20" y1="172" x2="410" y2="172" style="stroke:black;stroke-width:2" />
              
                <!--  Line 1 -->
                <circle r="4" cx="43.333333333"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="86.666666666"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="129.999999999" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="173.333333332" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="216.666666665" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="259.999999998" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="303.333333331" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="346.666666664" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="389.999999997" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
              
                <!-- Line 2 -->
                <circle r="4" cx="43.333333333"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="86.666666666"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="129.999999999" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="173.333333332" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="216.666666665" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="259.999999998" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="303.333333331" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="346.666666664" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="389.999999997" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
              
                <!-- Line 3 -->
                <circle r="4" cx="43.333333333"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="86.666666666"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="129.999999999" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="173.333333332" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="216.666666665" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="259.999999998" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="303.333333331" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="346.666666664" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="389.999999997" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
              
                <!-- Line 4 -->
                <circle r="4" cx="43.333333333"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="86.666666666"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="129.999999999" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="173.333333332" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="216.666666665" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="259.999999998" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="303.333333331" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="346.666666664" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="389.999999997" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
              
                <!-- Line 5 -->
                <circle r="4" cx="43.333333333"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="86.666666666"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="129.999999999" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="173.333333332" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="216.666666665" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="259.999999998" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="303.333333331" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="346.666666664" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                <circle r="4" cx="389.999999997" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>

                {{-- Text -}}
                {{-- 
                  Formula: 
                  rect: relative
                  rect-2: x= rect-x + 8; y= rect-y + 4
                  text-1: x= rect-x + 24; y= rect-y + 14
                  text-2: x= rect-x + 24; y= rect-y + 27
                --}}
                {{-- Sensor 1 --}}
                <g id="sensorHover1">
                  <circle r="4" cx="43.333333333" cy="80" fill="#e045ff" style="stroke:black;stroke-width:2;"/>
                  <rect class="sensorDisplay1" x="50" y="70" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" fill-opacity="0.8"/>
                  <rect class="sensorDisplay1" x="58" y="74" width="12" height="12" fill="#e045ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                  <text class="sensorDisplay1" x="74" y="84" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                  <text class="sensorDisplay1" x="74" y="97" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                </g>

                {{-- Sensor 2 --}}
                <g id="sensorHover2">
                  <circle r="4" cx="108.325" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                  <rect class="sensorDisplay2" x="120" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                  <rect class="sensorDisplay2" x="128" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                  <text class="sensorDisplay2" x="144" y="67" fill="white" style="font-size: 0.8rem;">Sensor Suhu</text>
                  <text class="sensorDisplay2" x="144" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                </g>

                {{-- Sensor 3 --}}
                <g id="sensorHover3">
                  <circle r="4" cx="151.664" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                  <rect class="sensorDisplay3" x="160" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                  <rect class="sensorDisplay3" x="168" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                  <text class="sensorDisplay3" x="184" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                  <text class="sensorDisplay3" x="184" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                </g>

                {{-- Sensor 4 --}}
                <g id="sensorHover4">
                  <circle r="4" cx="194.998333332" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                  <rect class="sensorDisplay4" x="206" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                  <rect class="sensorDisplay4" x="214" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                  <text class="sensorDisplay4" x="230" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                  <text class="sensorDisplay4" x="230" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                </g>

                {{-- Sensor 5 --}}
                <g id="sensorHover5">
                  <circle r="4" cx="238.331666665" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                  <rect class="sensorDisplay5" x="250" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                  <rect class="sensorDisplay5" x="258" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                  <text class="sensorDisplay5" x="274" y="67" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                  <text class="sensorDisplay5" x="274" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                </g>

                {{-- Sensor 6 --}}
                <g id="sensorHover6">
                  <circle r="4" cx="281.664999998" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                  <rect class="sensorDisplay6" x="294" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                  <rect class="sensorDisplay6" x="302" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                  <text class="sensorDisplay6" x="318" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                  <text class="sensorDisplay6" x="318" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                </g>

                {{-- Sensor 7 --}}
                <g id="sensorHover7">
                  <circle r="4" cx="324.998333331" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                  <rect class="sensorDisplay7" x="194" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                  <rect class="sensorDisplay7" x="202" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                  <text class="sensorDisplay7" x="218" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                  <text class="sensorDisplay7" x="218" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                </g>
              </svg>
            </div>
            <div class="card-body pt-0 p-3">
              <h6 class="mb-0">Deskripsi</h6>
              <div class="d-flex align-items-center">
                <div class="circle purple"></div>
                <span class="text-xs">&nbsp;&nbsp;&nbsp;Sensor Cahaya dan Suhu</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="circle white"></div>
                <span class="text-xs">&nbsp;&nbsp;&nbsp;Tanaman</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="circle blue"></div>
                <span class="text-xs">&nbsp;&nbsp;&nbsp;Sensor Kelembaban</span>
              </div>
              <hr class="horizontal dark my-3">
              <span class="text-xs mb-0">*Sentuh sensor untuk mengetahui status sensor</span>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mb-xl-0">
          <div class="card">
            <div class="card-header mx-4 p-3 text-center">
              <h6 class="text-center mb-0">Deskripsi {{ $dataBlok[0]->nama_blok }} dari {{ $dataBlok[0]->nama_kebun }}</h6>
            </div>
            <div class="card-body pt-0 p-3">
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Umur:</span>
                <span class="text-sm" id="umur">&nbsp;-</span>
              </div>
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Tahun Tanam:</span>
                <span class="text-sm" id="tahunTanam">&nbsp;-</span>
              </div>
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Status Perlakuan:</span>
                <span class="text-sm" id="masaTanaman">&nbsp;-</span>
              </div>
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Status Tanaman:</span>
                <span class="text-sm" id="statusTanaman">&nbsp;-</span>
              </div>
              <hr class="horizontal dark my-3">
              <span class="text-xs mb-0">*Detail dari {{ $dataBlok[0]->nama_blok }} dari {{ $dataBlok[0]->nama_kebun }}</span>
            </div>
          </div>
        </div>
        <div class="col-md-12 my-4">
          <div class="card p-4 mb-4"> {{-- Grafik Suhu --}}
            <div class="card-header">
              <h5 class="mb-0 text-center">Grafik Rata-Rata Suhu (Realtime)</h5>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                    <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                      <div class="chart">
                        <canvas id="suhu-chart-line" class="chart-canvas" height="270"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 bg-light rounded p-4 mt-2">
                    <h5 class="text-center">Detail Suhu</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataSuhu">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataSuhu">{{ $dataReverseSuhu[count($dataReverseSuhu) - 1] }}°C</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kondisi suhu saat ini:</span>
                      <span class="text-sm" id="kondisi_suhu">&nbsp;-</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks suhu normal:</span>
                      <span class="text-sm">&nbsp;15°C - 35°C</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks suhu panas:</span>
                      <span class="text-sm">&nbsp;> 35°C</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada jam <span id="lastUpdateAVGSuhu">-</span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card p-4 mb-4"> {{-- Grafik Cahaya --}}
            <div class="card-header">
              <h5 class="mb-0 text-center">Grafik Rata-Rata Cahaya (Realtime)</h5>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                    <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                      <div class="chart">
                        <canvas id="cahaya-chart-line" class="chart-canvas" height="270"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 bg-light rounded p-4 mt-2">
                    <h5 class="text-center">Detail Cahaya</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataCahaya">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataCahaya">{{ $dataReverseCahaya[count($dataReverseCahaya) - 1] }}lx</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kondisi cahaya saat ini:</span>
                      <span class="text-sm" id="kondisi_cahaya">&nbsp;Normal</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks cahaya normal:</span>
                      <span class="text-sm">&nbsp;15k - 24k</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks cahaya diatas normal:</span>
                      <span class="text-sm">&nbsp;> 24k</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada <span id="lastUpdateAVGCahaya">-</span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card p-4 mb-4"> {{-- Grafik Kelembaban Udara--}}
            <div class="card-header">
              <h5 class="mb-0 text-center">Grafik Rata-Rata Kelembaban Udara (Realtime)</h5>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                    <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                      <div class="chart">
                        <canvas id="kelembaban-chart-line" class="chart-canvas" height="270"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 bg-light rounded p-4 mt-2">
                    <h5 class="text-center">Detail Kelembaban Udara</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataKelembaban">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataKelembaban">{{ $dataReverseUdara[count($dataReverseUdara) - 1] }}%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kelembaban saat ini:</span>
                      <span class="text-sm" id="kondisi_udara">&nbsp;Lumayan Kering</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks normal:</span>
                      <span class="text-sm">&nbsp;15% - 90%</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks:</span>
                      <span class="text-sm">&nbsp;< 15% | > 90%</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada <span id="lastUpdateAVGKelembaban">-</span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card p-4 mb-4"> {{-- Grafik Kelembaban Tanah --}}
            <div class="card-header">
              <h5 class="mb-0 text-center">Grafik Rata-Rata Kelembaban Tanah (Realtime)</h5>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                    <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                      <div class="chart">
                        <canvas id="tanah-chart-line" class="chart-canvas" height="270"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 bg-light rounded p-4 mt-2">
                    <h5 class="text-center">Detail Kelembaban Tanah</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataPHTanah">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataPHTanah">{{ $dataAVGTanah[count($dataAVGTanah) - 1] }}%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kondisi tanah saat ini:</span>
                      <span class="text-sm" id="kondisi_tanah">&nbsp;Normal</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks tanah normal:</span>
                      <span class="text-sm">&nbsp;15% - 80%</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks tanah tidak normal:</span>
                      <span class="text-sm">&nbsp;> 80% | < 15%</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada <span id="lastUpdateAVGTanah">-</span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-header pb-0 p-4">
              <div class="row">
                <div class="d-flex justify-content-center">
                  <h5 class="mb-0">Detail Semua Sensor</h5>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-md-12 mb-md-0 mb-4">
                  <div class="card card-body card-plain border-radius-lg d-flex align-items-center flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430 200" width="100%" height="250">
                      <rect width="430" height="200" x="0" y="0" rx="0.75rem" ry="0.75rem" fill="#dbdbdb" />
                      <line x1="20" y1="26" x2="410" y2="26" style="stroke:black;stroke-width:2" />
                      <line x1="20" y1="62" x2="410" y2="62" style="stroke:black;stroke-width:2" />
                      <line x1="20" y1="98" x2="410" y2="98" style="stroke:black;stroke-width:2" />
                      <line x1="20" y1="136" x2="410" y2="136" style="stroke:black;stroke-width:2" />
                      <line x1="20" y1="172" x2="410" y2="172" style="stroke:black;stroke-width:2" />
                    
                      <!--  Line 1 -->
                      <circle r="4" cx="43.333333333"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="86.666666666"  cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="129.999999999" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="173.333333332" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="216.666666665" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="259.999999998" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="303.333333331" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="346.666666664" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="389.999999997" cy="26" fill="white" style="stroke:black;stroke-width:2;"/>
                    
                      <!-- Line 2 -->
                      <circle r="4" cx="43.333333333"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="86.666666666"  cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="129.999999999" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="173.333333332" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="216.666666665" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="259.999999998" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="303.333333331" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="346.666666664" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="389.999999997" cy="62" fill="white" style="stroke:black;stroke-width:2;"/>
                    
                      <!-- Line 3 -->
                      <circle r="4" cx="43.333333333"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="86.666666666"  cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="129.999999999" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="173.333333332" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="216.666666665" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="259.999999998" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="303.333333331" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="346.666666664" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="389.999999997" cy="98" fill="white" style="stroke:black;stroke-width:2;"/>
                    
                      <!-- Line 4 -->
                      <circle r="4" cx="43.333333333"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="86.666666666"  cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="129.999999999" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="173.333333332" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="216.666666665" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="259.999999998" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="303.333333331" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="346.666666664" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="389.999999997" cy="136" fill="white" style="stroke:black;stroke-width:2;"/>
                    
                      <!-- Line 5 -->
                      <circle r="4" cx="43.333333333"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="86.666666666"  cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="129.999999999" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="173.333333332" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="216.666666665" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="259.999999998" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="303.333333331" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="346.666666664" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
                      <circle r="4" cx="389.999999997" cy="172" fill="white" style="stroke:black;stroke-width:2;"/>
  
                      {{-- Text -}}
                      {{-- 
                        Formula: 
                        rect: relative
                        rect-2: x= rect-x + 8; y= rect-y + 4
                        text-1: x= rect-x + 24; y= rect-y + 14
                        text-2: x= rect-x + 24; y= rect-y + 27
                      --}}
                      {{-- Sensor 1 --}}
                      <g id="sensorHover1">
                        <circle r="4" cx="43.333333333" cy="80" fill="#e045ff" style="stroke:black;stroke-width:2;"/>
                        <rect class="sensorDisplay1" x="50" y="70" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" fill-opacity="0.8"/>
                        <rect class="sensorDisplay1" x="58" y="74" width="12" height="12" fill="#e045ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                        <text class="sensorDisplay1" x="74" y="84" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                        <text class="sensorDisplay1" x="74" y="97" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                      </g>
  
                      {{-- Sensor 2 --}}
                      <g id="sensorHover2">
                        <circle r="4" cx="108.325" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                        <rect class="sensorDisplay2" x="120" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                        <rect class="sensorDisplay2" x="128" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                        <text class="sensorDisplay2" x="144" y="67" fill="white" style="font-size: 0.8rem;">Sensor Suhu</text>
                        <text class="sensorDisplay2" x="144" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                      </g>
  
                      {{-- Sensor 3 --}}
                      <g id="sensorHover3">
                        <circle r="4" cx="151.664" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                        <rect class="sensorDisplay3" x="160" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                        <rect class="sensorDisplay3" x="168" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                        <text class="sensorDisplay3" x="184" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                        <text class="sensorDisplay3" x="184" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                      </g>
  
                      {{-- Sensor 4 --}}
                      <g id="sensorHover4">
                        <circle r="4" cx="194.998333332" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                        <rect class="sensorDisplay4" x="206" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                        <rect class="sensorDisplay4" x="214" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                        <text class="sensorDisplay4" x="230" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                        <text class="sensorDisplay4" x="230" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                      </g>
  
                      {{-- Sensor 5 --}}
                      <g id="sensorHover5">
                        <circle r="4" cx="238.331666665" cy="62" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                        <rect class="sensorDisplay5" x="250" y="53" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                        <rect class="sensorDisplay5" x="258" y="57" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                        <text class="sensorDisplay5" x="274" y="67" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                        <text class="sensorDisplay5" x="274" y="80" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                      </g>
  
                      {{-- Sensor 6 --}}
                      <g id="sensorHover6">
                        <circle r="4" cx="281.664999998" cy="98" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                        <rect class="sensorDisplay6" x="294" y="90" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                        <rect class="sensorDisplay6" x="302" y="94" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                        <text class="sensorDisplay6" x="318" y="104" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                        <text class="sensorDisplay6" x="318" y="117" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                      </g>
  
                      {{-- Sensor 7 --}}
                      <g id="sensorHover7">
                        <circle r="4" cx="324.998333331" cy="136" fill="#45c4ff" style="stroke:black;stroke-width:2;"/>
                        <rect class="sensorDisplay7" x="194" y="127" rx="0.5rem" ry="0.5rem" width="120" height="34" fill="black" style="" fill-opacity="0.8"/>
                        <rect class="sensorDisplay7" x="202" y="131" width="12" height="12" fill="#45c4ff" style="stroke: white;stroke-width: 1;" fill-opacity="0.8"/>
                        <text class="sensorDisplay7" x="218" y="141" fill="white" style="font-size: 0.8rem;">Sensor Cahaya</text>
                        <text class="sensorDisplay7" x="218" y="154" fill="white" style="font-size: 0.7rem;">Status: Normal</text>
                      </g>
                    </svg>
                  </div>
                  <hr class="horizontal dark my-3">
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                      <h5 class="mb-0">Sensor Kelembaban Tanah</h5>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Kelembaban Tanah satu</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorKelembabanTanah1-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexKelembabanTanah1" class="custom-box bg-gradient-danger shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorKelembabanTanah1" class="text-center font-weight-bold text-white mb-0">0 %</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Kelembaban Tanah dua</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorKelembabanTanah2-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexKelembabanTanah2" class="custom-box bg-gradient-warning shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorKelembabanTanah2" class="text-center font-weight-bold text-white mb-0">0 %</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Kelembaban Tanah tiga</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorKelembabanTanah3-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexKelembabanTanah3" class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorKelembabanTanah3" class="text-center font-weight-bold text-white mb-0">0 %</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Kelembaban Tanah empat</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorKelembabanTanah4-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexKelembabanTanah4" class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorKelembabanTanah4" class="text-center font-weight-bold text-white mb-0">0 %</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Kelembaban Tanah lima</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorKelembabanTanah5-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexKelembabanTanah5" class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorKelembabanTanah5" class="text-center font-weight-bold text-white mb-0">0 %</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Kelembaban Tanah enam</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorKelembabanTanah6-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexKelembabanTanah6" class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorKelembabanTanah6" class="text-center font-weight-bold text-white mb-0">0 %</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                      <h5 class="mb-0">Sensor Lainnya</h5>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Suhu</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorSuhu-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexDetailSuhu" class="custom-box bg-gradient-danger shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorDetailSuhu" class="text-center font-weight-bold text-white mb-0">32°C</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Cahaya</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorCahaya-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexDetailCahaya" class="custom-box bg-gradient-warning shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorDetailCahaya" class="text-center font-weight-bold text-white mb-0">29%</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="card">
                        <div class="card-header mx-4 p-3 text-center">
                          <h6 class="text-center mb-0">Sensor Kelembaban Udara</h6>
                        </div>
                        <div class="card-body pt-0 p-3 text-center">
                          <div class="row">
                            <div class="col-md-8">
                              <div class="bg-gradient-info shadow-primary border-radius-lg py-3 pe-1">
                                <div class="chart">
                                  <canvas id="sensorKelembabanUdara-chart-line" class="chart-canvas" height="150"></canvas>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="text-center">
                                  <h6>Indeks:</h6>
                                </div>
                                <div id="bgIndexDetailUdara" class="custom-box bg-gradient-success shadow text-center border-radius-lg">
                                  <div class="d-flex justify-content-center align-items-center h-100">
                                    <h3 id="indikatorDetailUdara" class="text-center font-weight-bold text-white mb-0">32 RH</h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Riwayat Penyiraman Air</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-outline-primary btn-sm mb-0">Lihat Semua</button>
            </div>
          </div>
        </div>
        <div class="card-body p-3 pb-0">
          <ul class="list-group" id="ulRiwayatAir">
            <li class="liRiwayatAir list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuAir1" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuAir1" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatAir1" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatAir list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuAir2" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuAir2" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatAir2" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatAir list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuAir3" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuAir3" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatAir3" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatAir list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuAir4" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuAir4" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatAir4" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatAir list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuAir5" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuAir5" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatAir5" class="d-flex align-items-center text-sm">-</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Riwayat Penyiraman Pupuk</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-outline-primary btn-sm mb-0">Lihat Semua</button>
            </div>
          </div>
        </div>
        <div class="card-body p-3 pb-0">
          <ul class="list-group" id="ulRiwayatAir">
            <li class="liRiwayatPupuk list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuPupuk1" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuPupuk1" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatPupuk1" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatPupuk list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuPupuk2" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuPupuk2" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatPupuk2" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatPupuk list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuPupuk3" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuPupuk3" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatPupuk3" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatPupuk list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuPupuk4" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuPupuk4" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatPupuk4" class="d-flex align-items-center text-sm">-</div>
            </li>
            <li class="liRiwayatPupuk list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 id="dateWaktuPupuk5" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                <span id="jamWaktuPupuk5" class="text-xs">-</span>
              </div>
              <div id="intervalRiwayatPupuk5" class="d-flex align-items-center text-sm">-</div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Riwayat Lainnya</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-outline-primary btn-sm mb-0">Lihat Semua</button>
            </div>
          </div>
        </div>
        <div class="card-body p-3 pb-0">
          <ul class="list-group" id="ulRiwayatSensor">
            <li class="liRiwayatSensor list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="row">
                <div class="col-4 col-md-4">
                  <div class="d-flex flex-column">
                    <h6 id="dateWaktuSensor1" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                    <span id="jamWaktuSensor1" class="text-xs">-</span>
                  </div>
                </div>
                <div class="col-8 col-md-8">
                  <div id="intervalRiwayatSensor1" class="d-flex align-items-center text-sm">-</div>
                </div>
              </div>
            </li>
            <li class="liRiwayatSensor list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="col-4 col-md-4">
                <div class="d-flex flex-column">
                  <h6 id="dateWaktuSensor2" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                  <span id="jamWaktuSensor2" class="text-xs">-</span>
                </div>
              </div>
              <div class="col-8 col-md-8">
                <div id="intervalRiwayatSensor2" class="d-flex align-items-center text-sm">-</div>
              </div>
            </li>
            <li class="liRiwayatSensor list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="col-4 col-md-4">
                <div class="d-flex flex-column">
                  <h6 id="dateWaktuSensor3" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                  <span id="jamWaktuSensor3" class="text-xs">-</span>
                </div>
              </div>
              <div class="col-8 col-md-8">
                <div id="intervalRiwayatSensor3" class="d-flex align-items-center text-sm">-</div>
              </div>
            </li>
            <li class="liRiwayatSensor list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="col-4 col-md-4">
                <div class="d-flex flex-column">
                  <h6 id="dateWaktuSensor4" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                  <span id="jamWaktuSensor4" class="text-xs">-</span>
                </div>
              </div>
              <div class="col-8 col-md-8">
                <div id="intervalRiwayatSensor4" class="d-flex align-items-center text-sm">-</div>
              </div>
            </li>
            <li class="liRiwayatSensor list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="col-4 col-md-4">
                <div class="d-flex flex-column">
                  <h6 id="dateWaktuSensor5" class="mb-1 text-dark font-weight-bold text-sm">-</h6>
                  <span id="jamWaktuSensor5" class="text-xs">-</span>
                </div>
              </div>
              <div class="col-8 col-md-8">
                <div id="intervalRiwayatSensor5" class="d-flex align-items-center text-sm">-</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-7 mb-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Pusat Kontrol</h6>
          <p class="text-warning font-weight-bold mb-0 text-xs" id="theAlert">Inisialisasi... Harap tunggu...</p>
        </div>
        <div class="card-body pt-4 p-3">
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card">
                <div class="card-header">
                  <h6 class="mb-0 text-center">Kontrol Penyiraman Air</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-center mb-4">
                    <div class="rounded-pill switch-container p-2 d-flex justify-content-end" id="switch1">
                      <div class="rounded-circle bg-light switch-inner"></div>
                    </div>
                  </div>
                  <div class="mb-0 font-weight-bold">Status: <span class="font-weight-light" id="switchStatus1">Hidup</span></div>
                  <div class="mb-0 font-weight-bold">Jarak Interval: <span class="font-weight-light">5 Menit</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h6 class="mb-0 text-center">Kontrol Penyiraman Pupuk</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-center mb-4">
                    <div class="rounded-pill switch-container p-2 d-flex justify-content-end" id="switch2">
                      <div class="rounded-circle bg-light switch-inner"></div>
                    </div>
                  </div>
                  <div class="mb-0 font-weight-bold">Status: <span class="font-weight-light" id="switchStatus2">Hidup</span></div>
                  <div class="mb-0 font-weight-bold">Jarak Interval: <span class="font-weight-light">5 Menit</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Status Ketersediaan Air</h6>
          <p class="text-xs mb-0">*Menunjukkan status apakah air terisi pada header/tandon</p>
        </div>
        <div class="card-body d-flex align-items-center justify-content-center pt-4 p-3">
          <div class="d-flex">
            {{-- {{ $dataWaterFloat[0]->water }} --}}
            @if($dataWaterFloat[0]->water == 1)
              <div class="bg-gradient-success shadow text-center border-radius-lg p-2" id="bgIndexKetersediaanAir">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <h3 class="text-center font-weight-bold text-white mb-0" id="indexKetersediaanAir">Terisi</h3>
                </div>
              </div>
            @elseif($dataWaterFloat[0]->water == 0)
              <div class="bg-gradient-success shadow text-center border-radius-lg p-2" id="bgIndexKetersediaanAir">
                <div class="d-flex justify-content-center align-items-center h-100">
                  <h3 class="text-center font-weight-bold text-white mb-0" id="indexKetersediaanAir">Tidak Terisi</h3>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  // ----- Grafik Rata Rata ------
  var grafikSuhuRataRata = document.getElementById("suhu-chart-line").getContext("2d");
  var grafikCahayaRataRata = document.getElementById("cahaya-chart-line").getContext("2d");
  var grafikKelembabanRataRata = document.getElementById("kelembaban-chart-line").getContext("2d");
  var grafikTanahRataRata = document.getElementById("tanah-chart-line").getContext("2d");

  var suhu = new Chart(grafikSuhuRataRata, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSuhu as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Suhu (°C)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSuhu as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var cahaya = new Chart(grafikCahayaRataRata, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsCahaya as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Lumen (lx)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseCahaya as $item)
          '{{ $item }}',
        @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var kelembaban = new Chart(grafikKelembabanRataRata, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsUdara as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Humidity (RH)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseUdara as $item)
          '{{ $item }}',
        @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var tanah = new Chart(grafikTanahRataRata, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsTanah as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Kelembaban (%)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataAVGTanah as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });

  // ----- Grafik Detail Sensor -----
  // ----- Detail Sensor Kelembaban Tanah -----
  var grafikDetailKelembabanTanah1 = document.getElementById("sensorKelembabanTanah1-chart-line").getContext("2d");
  var grafikDetailKelembabanTanah2 = document.getElementById("sensorKelembabanTanah2-chart-line").getContext("2d");
  var grafikDetailKelembabanTanah3 = document.getElementById("sensorKelembabanTanah3-chart-line").getContext("2d");
  var grafikDetailKelembabanTanah4 = document.getElementById("sensorKelembabanTanah4-chart-line").getContext("2d");
  var grafikDetailKelembabanTanah5 = document.getElementById("sensorKelembabanTanah5-chart-line").getContext("2d");
  var grafikDetailKelembabanTanah6 = document.getElementById("sensorKelembabanTanah6-chart-line").getContext("2d");

  // ----- Detail Sensor Suhu -----
  var grafikDetailSuhu = document.getElementById("sensorSuhu-chart-line").getContext("2d");

  // ----- Detail Sensor Cahaya -----
  var grafikDetailCahaya = document.getElementById("sensorCahaya-chart-line").getContext("2d");

  // ----- Detail Sensor Kelembaban Udara -----
  var grafikDetailKelembabanUdara = document.getElementById("sensorKelembabanUdara-chart-line").getContext("2d");

  var kelembabanTanahDetail1 = new Chart(grafikDetailKelembabanTanah1, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil1 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Kelembaban (%)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSoil1 as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var kelembabanTanahDetail2 = new Chart(grafikDetailKelembabanTanah2, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil2 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Kelembaban (%)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSoil2 as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var kelembabanTanahDetail3 = new Chart(grafikDetailKelembabanTanah3, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil3 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Kelembaban (%)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSoil3 as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var kelembabanTanahDetail4 = new Chart(grafikDetailKelembabanTanah4, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil4 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Kelembaban (%)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSoil4 as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var kelembabanTanahDetail5 = new Chart(grafikDetailKelembabanTanah5, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil5 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Kelembaban (%)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSoil5 as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var kelembabanTanahDetail6 = new Chart(grafikDetailKelembabanTanah6, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil6 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Kelembaban (%)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSoil6 as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var suhuDetail = new Chart(grafikDetailSuhu, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil1 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Suhu (°C)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseSuhu as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var cahayaDetail = new Chart(grafikDetailCahaya, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil2 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Cahaya (%Lux)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseCahaya as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  var kelembabanUdaraDetail = new Chart(grafikDetailKelembabanUdara, {
    type: "line",
    data: {
      labels: [
        @foreach ($dataLabelsSoil1 as $item)
          '{{ $item }}',
        @endforeach
      ],
      datasets: [{
        label: "Humidity (%RH)",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [
          @foreach ($dataReverseUdara as $item)
            '{{ $item }}',
          @endforeach
        ],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });

  function readAllDataRataRata() {
    var timeNow = new Date(Date.now()).toString().substr(16, 5);
    $.get("{{ route('readDataRataRata', ['id' => $id]) }}", function(data) {
      suhu.data.labels.push(data.suhu_updated);
      suhu.data.datasets[0].data.push(data.suhu);
      
      if(suhu.data.labels.length >= 10) {
        suhu.data.labels.shift();
      } 
      if(suhu.data.datasets[0].data.length >= 10) { 
        suhu.data.datasets[0].data.shift();
      }

      if(data.suhu != null) {
        document.getElementById("indikatorRataRataSuhu").innerText = data.suhu + "°C";
      } else {
        document.getElementById("indikatorRataRataSuhu").innerText = "0°C";
      }

      var theBgClass = document.getElementById("bgIndexRataRataSuhu");
      var theKondisi = document.getElementById("kondisi_suhu");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.suhu < 15) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Dingin";
      } else if(data.suhu > 35) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu Panas";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }

      var lastUpdateAVGSuhu = document.getElementById("lastUpdateAVGSuhu");
      lastUpdateAVGSuhu.innerText = timeNow;

      cahaya.data.labels.push(data.cahaya_updated);
      cahaya.data.datasets[0].data.push(data.cahaya);
      if(cahaya.data.labels.length >= 10) {
        cahaya.data.labels.shift();
      } 
      if(cahaya.data.datasets[0].data.length >= 10) { 
        cahaya.data.datasets[0].data.shift();
      }

      if(data.cahaya != null) {
        document.getElementById("indikatorRataRataCahaya").innerText = data.cahaya + "%";
      } else {
        document.getElementById("indikatorRataRataCahaya").innerText = "0%";
      }
      
      var theBgClass = document.getElementById("bgIndexRataRataCahaya");
      var theKondisi = document.getElementById("kondisi_cahaya");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.cahaya < 15000) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Gelap";
      } else if(data.cahaya > 24000) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu Terang";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }

      var lastUpdateAVGCahaya = document.getElementById("lastUpdateAVGCahaya");
      lastUpdateAVGCahaya.innerText = timeNow;

      kelembaban.data.labels.push(data.kelembaban_updated);
      kelembaban.data.datasets[0].data.push(data.kelembaban);
      if(kelembaban.data.labels.length >= 10) {
        kelembaban.data.labels.shift();
      } 
      if(kelembaban.data.datasets[0].data.length >= 10) { 
        kelembaban.data.datasets[0].data.shift();
      }

      if(data.kelembaban != null) {
        document.getElementById("indikatorRataRataKelembaban").innerText = data.kelembaban + "%";
      } else {
        document.getElementById("indikatorRataRataKelembaban").innerText = "0%";
      }
      
      var theBgClass = document.getElementById("bgIndexRataRataKelembaban");
      var theKondisi = document.getElementById("kondisi_udara");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelembaban < 15) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Terlalu Kering";
      } else if(data.kelembaban > 90) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu lembab";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }

      var lastUpdateAVGKelembaban = document.getElementById("lastUpdateAVGKelembaban");
      lastUpdateAVGKelembaban.innerText = timeNow;

      tanah.data.labels.push(data.tanah_updated);
      tanah.data.datasets[0].data.push(data.kelembabanTanah);
      if(tanah.data.labels.length >= 10) {
        tanah.data.labels.shift();
      } 
      if(tanah.data.datasets[0].data.length >= 10) { 
        tanah.data.datasets[0].data.shift();
      }

      if(data.kelembabanTanah != null) {
        document.getElementById("indikatorRataRataPHTanah").innerText = data.kelembabanTanah + "%";
      } else {
        document.getElementById("indikatorRataRataPHTanah").innerText = "0%";
      }
      
      var theBgClass = document.getElementById("bgIndexRataRataPHTanah");
      var theKondisi = document.getElementById("kondisi_tanah");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelembabanTanah < 15) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Terlalu Kering";
      } else if(data.kelembabanTanah > 80) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu basah";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }

      var lastUpdateAVGTanah = document.getElementById("lastUpdateAVGTanah");
      lastUpdateAVGTanah.innerText = timeNow;

      suhu.update();
      cahaya.update();
      kelembaban.update();
      tanah.update();
    });
  }

  function readIndexAllDataRataRata() {
    var timeNow = new Date(Date.now()).toString().substr(16, 5);
    $.get("{{ route('readDataRataRata', ['id' => $id]) }}", function(data) {
      var theBgClass = document.getElementById("bgIndexRataRataSuhu");
      var theKondisi = document.getElementById("kondisi_suhu");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.suhu < 15) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Dingin";
      } else if(data.suhu > 35) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu Panas";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }

      var theBgClass = document.getElementById("bgIndexRataRataCahaya");
      var theKondisi = document.getElementById("kondisi_cahaya");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.cahaya < 15000) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Gelap";
      } else if(data.cahaya > 24000) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu Terang";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }

      var theBgClass = document.getElementById("bgIndexRataRataKelembaban");
      var theKondisi = document.getElementById("kondisi_udara");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelembaban < 15) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Terlalu Kering";
      } else if(data.kelembaban > 90) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu lembab";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }

      var theBgClass = document.getElementById("bgIndexRataRataPHTanah");
      var theKondisi = document.getElementById("kondisi_tanah");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelembabanTanah < 15) {
        theBgClass.classList.add("bg-gradient-warning");
        theKondisi.innerHTML = "&nbsp;Terlalu Kering";
      } else if(data.kelembabanTanah > 80) {
        theBgClass.classList.add("bg-gradient-danger");
        theKondisi.innerHTML = "&nbsp;Terlalu basah";
      } else {
        theBgClass.classList.add("bg-gradient-success");
        theKondisi.innerHTML = "&nbsp;Normal";
      }
    });
  }

  function readDataIndividualSensor() {
    $.get("{{ route('ambilDataDetailSemuaSensor', ['id' => $id]) }}", function(data) {
      kelembabanTanahDetail1.data.labels.push(data.kelTanah1[0].updated_at.split(" ")[1].substr(0, 5));
      kelembabanTanahDetail1.data.datasets[0].data.push(data.kelTanah1[0].nilai_sensor);
      if(kelembabanTanahDetail1.data.labels.length >= 5) {
        kelembabanTanahDetail1.data.labels.shift();
      } 
      if(kelembabanTanahDetail1.data.datasets[0].data.length >= 5) { 
        kelembabanTanahDetail1.data.datasets[0].data.shift();
      }

      if(data.kelTanah1[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah1").innerText = data.kelTanah1[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah1").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah1");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah1[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah1[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail2.data.labels.push(data.kelTanah2[0].updated_at.split(" ")[1].substr(0, 5));
      kelembabanTanahDetail2.data.datasets[0].data.push(data.kelTanah2[0].nilai_sensor);
      if(kelembabanTanahDetail2.data.labels.length >= 5) {
        kelembabanTanahDetail2.data.labels.shift();
      } 
      if(kelembabanTanahDetail2.data.datasets[0].data.length >= 5) { 
        kelembabanTanahDetail2.data.datasets[0].data.shift();
      }

      if(data.kelTanah2[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah2").innerText = data.kelTanah2[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah2").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah2");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah2[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah2[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail3.data.labels.push(data.kelTanah3[0].updated_at.split(" ")[1].substr(0, 5));
      kelembabanTanahDetail3.data.datasets[0].data.push(data.kelTanah3[0].nilai_sensor);
      if(kelembabanTanahDetail3.data.labels.length >= 5) {
        kelembabanTanahDetail3.data.labels.shift();
      } 
      if(kelembabanTanahDetail3.data.datasets[0].data.length >= 5) { 
        kelembabanTanahDetail3.data.datasets[0].data.shift();
      }

      if(data.kelTanah3[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah3").innerText = data.kelTanah3[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah3").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah3");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah3[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah3[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail4.data.labels.push(data.kelTanah4[0].updated_at.split(" ")[1].substr(0, 5));
      kelembabanTanahDetail4.data.datasets[0].data.push(data.kelTanah4[0].nilai_sensor);
      if(kelembabanTanahDetail4.data.labels.length >= 5) {
        kelembabanTanahDetail4.data.labels.shift();
      } 
      if(kelembabanTanahDetail4.data.datasets[0].data.length >= 5) { 
        kelembabanTanahDetail4.data.datasets[0].data.shift();
      }

      if(data.kelTanah4[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah4").innerText = data.kelTanah4[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah4").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah4");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah4[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah4[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail5.data.labels.push(data.kelTanah5[0].updated_at.split(" ")[1].substr(0, 5));
      kelembabanTanahDetail5.data.datasets[0].data.push(data.kelTanah5[0].nilai_sensor);
      if(kelembabanTanahDetail5.data.labels.length >= 5) {
        kelembabanTanahDetail5.data.labels.shift();
      } 
      if(kelembabanTanahDetail5.data.datasets[0].data.length >= 5) { 
        kelembabanTanahDetail5.data.datasets[0].data.shift();
      }

      if(data.kelTanah5[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah5").innerText = data.kelTanah5[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah5").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah5");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah5[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah5[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail6.data.labels.push(data.kelTanah6[0].updated_at.split(" ")[1].substr(0, 5));
      kelembabanTanahDetail6.data.datasets[0].data.push(data.kelTanah6[0].nilai_sensor);
      if(kelembabanTanahDetail6.data.labels.length >= 5) {
        kelembabanTanahDetail6.data.labels.shift();
      } 
      if(kelembabanTanahDetail6.data.datasets[0].data.length >= 5) { 
        kelembabanTanahDetail6.data.datasets[0].data.shift();
      }

      if(data.kelTanah6[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah6").innerText = data.kelTanah6[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah6").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah6");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah6[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah6[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      suhuDetail.data.labels.push(data.suhu[0].updated_at.split(" ")[1].substr(0, 5));
      suhuDetail.data.datasets[0].data.push(data.suhu[0].nilai_sensor);
      if(suhuDetail.data.labels.length >= 5) {
        suhuDetail.data.labels.shift();
      } 
      if(suhuDetail.data.datasets[0].data.length >= 5) { 
        suhuDetail.data.datasets[0].data.shift();
      }

      if(data.suhu[0].nilai_sensor != null) {
        document.getElementById("indikatorDetailSuhu").innerText = data.suhu[0].nilai_sensor + " °C";
      } else {
        document.getElementById("indikatorDetailSuhu").innerText = "0°C";
      }

      var theBgClass = document.getElementById("bgIndexDetailSuhu");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.suhu[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.suhu[0].nilai_sensor > 35) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      cahayaDetail.data.labels.push(data.cahaya[0].updated_at.split(" ")[1].substr(0, 5));
      cahayaDetail.data.datasets[0].data.push(data.cahaya[0].nilai_sensor);
      if(cahayaDetail.data.labels.length >= 5) {
        cahayaDetail.data.labels.shift();
      } 
      if(cahayaDetail.data.datasets[0].data.length >= 5) { 
        cahayaDetail.data.datasets[0].data.shift();
      }

      if(data.cahaya[0].nilai_sensor != null) {
        document.getElementById("indikatorDetailCahaya").innerText = data.cahaya[0].nilai_sensor + "%";
      } else {
        document.getElementById("indikatorDetailCahaya").innerText = "0%";
      }

      var theBgClass = document.getElementById("bgIndexDetailCahaya");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.cahaya[0].nilai_sensor < 15000) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.cahaya[0].nilai_sensor > 24000) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanUdaraDetail.data.labels.push(data.udara[0].updated_at.split(" ")[1].substr(0, 5));
      kelembabanUdaraDetail.data.datasets[0].data.push(data.udara[0].nilai_sensor);
      if(kelembabanUdaraDetail.data.labels.length >= 5) {
        kelembabanUdaraDetail.data.labels.shift();
      } 
      if(kelembabanUdaraDetail.data.datasets[0].data.length >= 5) { 
        kelembabanUdaraDetail.data.datasets[0].data.shift();
      }

      if(data.udara[0].nilai_sensor != null) {
        document.getElementById("indikatorDetailUdara").innerText = data.udara[0].nilai_sensor + " RH";
      } else {
        document.getElementById("indikatorDetailUdara").innerText = "0 RH";
      }

      var theBgClass = document.getElementById("bgIndexDetailUdara");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.udara[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.udara[0].nilai_sensor > 90) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail1.update();
      kelembabanTanahDetail2.update();
      kelembabanTanahDetail3.update();
      kelembabanTanahDetail4.update();
      kelembabanTanahDetail5.update();
      kelembabanTanahDetail6.update();
      suhuDetail.update();
      cahayaDetail.update();
      kelembabanUdaraDetail.update();
    });
  }

  function readIndexDataIndividualSensor() {
    $.get("{{ route('ambilDataDetailSemuaSensor', ['id' => $id]) }}", function(data) {
      if(data.kelTanah1[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah1").innerText = data.kelTanah1[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah1").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah1");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah1[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah1[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.kelTanah2[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah2").innerText = data.kelTanah2[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah2").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah2");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah2[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah2[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.kelTanah3[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah3").innerText = data.kelTanah3[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah3").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah3");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah3[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah3[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.kelTanah4[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah4").innerText = data.kelTanah4[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah4").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah4");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah4[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah4[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.kelTanah5[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah5").innerText = data.kelTanah5[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah5").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah5");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah5[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah5[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.kelTanah6[0].nilai_sensor != null) {
        document.getElementById("indikatorKelembabanTanah6").innerText = data.kelTanah6[0].nilai_sensor + " %";
      } else {
        document.getElementById("indikatorKelembabanTanah6").innerText = "0 %";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah6");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah6[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah6[0].nilai_sensor > 80) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.suhu[0].nilai_sensor != null) {
        document.getElementById("indikatorDetailSuhu").innerText = data.suhu[0].nilai_sensor + " °C";
      } else {
        document.getElementById("indikatorDetailSuhu").innerText = "0°C";
      }

      var theBgClass = document.getElementById("bgIndexDetailSuhu");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.suhu[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.suhu[0].nilai_sensor > 35) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.cahaya[0].nilai_sensor != null) {
        document.getElementById("indikatorDetailCahaya").innerText = data.cahaya[0].nilai_sensor + "%";
      } else {
        document.getElementById("indikatorDetailCahaya").innerText = "0%";
      }

      var theBgClass = document.getElementById("bgIndexDetailCahaya");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.cahaya[0].nilai_sensor < 15000) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.cahaya[0].nilai_sensor > 24000) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      if(data.udara[0].nilai_sensor != null) {
        document.getElementById("indikatorDetailUdara").innerText = data.udara[0].nilai_sensor + " RH";
      } else {
        document.getElementById("indikatorDetailUdara").innerText = "0 RH";
      }

      var theBgClass = document.getElementById("bgIndexDetailUdara");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.udara[0].nilai_sensor < 15) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.udara[0].nilai_sensor > 90) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }
    });
  }

  function readDataNotifikasiAir() {
    $.get("{{ route('ambilDataNotifikasiAir') }}", function(data) {
      let idDateRiwayatAir = [
        document.getElementById("dateWaktuAir1"),
        document.getElementById("dateWaktuAir2"),
        document.getElementById("dateWaktuAir3"),
        document.getElementById("dateWaktuAir4"),
        document.getElementById("dateWaktuAir5"),
      ];
      let idJamRiwayatAir = [
        document.getElementById("jamWaktuAir1"),
        document.getElementById("jamWaktuAir2"),
        document.getElementById("jamWaktuAir3"),
        document.getElementById("jamWaktuAir4"),
        document.getElementById("jamWaktuAir5"),
      ];
      let idIntervalRiwayatAir = [
        document.getElementById("intervalRiwayatAir1"),
        document.getElementById("intervalRiwayatAir2"),
        document.getElementById("intervalRiwayatAir3"),
        document.getElementById("intervalRiwayatAir4"),
        document.getElementById("intervalRiwayatAir5"),
      ];
      for(var i = 0; i < data.notifAirMati.length; i++) {
        let dateWaktuAir1 = idDateRiwayatAir[i];
        let jamWaktuAir1 = idJamRiwayatAir[i];
        let intervalRiwayatAir1 = idIntervalRiwayatAir[i];
        
        let bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        dateWaktuAir1.innerText = data.notifAirMati[i].waktu.split("-")[2].split(" ")[0] + " " + bulan[parseInt(data.notifAirMati[i].waktu.split("-")[1]) - 1] + ", " + data.notifAirMati[i].waktu.split("-")[0];
        jamWaktuAir1.innerText = data.notifAirHidup[i].waktu.split(" ")[1] + " - " + data.notifAirMati[i].waktu.split(" ")[1];
        intervalRiwayatAir1.innerText = "1x";
      }
    });
  }

  function readDataNotifikasiPupuk() {
    $.get("{{ route('ambilDataNotifikasiPupuk') }}", function(data) {
      let idDateRiwayatPupuk = [
        document.getElementById("dateWaktuPupuk1"),
        document.getElementById("dateWaktuPupuk2"),
        document.getElementById("dateWaktuPupuk3"),
        document.getElementById("dateWaktuPupuk4"),
        document.getElementById("dateWaktuPupuk5"),
      ];
      let idJamRiwayatPupuk = [
        document.getElementById("jamWaktuPupuk1"),
        document.getElementById("jamWaktuPupuk2"),
        document.getElementById("jamWaktuPupuk3"),
        document.getElementById("jamWaktuPupuk4"),
        document.getElementById("jamWaktuPupuk5"),
      ];
      let idIntervalRiwayatPupuk = [
        document.getElementById("intervalRiwayatPupuk1"),
        document.getElementById("intervalRiwayatPupuk2"),
        document.getElementById("intervalRiwayatPupuk3"),
        document.getElementById("intervalRiwayatPupuk4"),
        document.getElementById("intervalRiwayatPupuk5"),
      ];
      for(var i = 0; i < data.notifPupukMati.length; i++) {
        let dateWaktuPupuk1 = idDateRiwayatPupuk[i];
        let jamWaktuPupuk1 = idJamRiwayatPupuk[i];
        let intervalRiwayatPupuk1 = idIntervalRiwayatPupuk[i];
        
        let bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        dateWaktuPupuk1.innerText = data.notifPupukMati[i].waktu.split("-")[2].split(" ")[0] + " " + bulan[parseInt(data.notifPupukMati[i].waktu.split("-")[1]) - 1] + ", " + data.notifPupukMati[i].waktu.split("-")[0];
        jamWaktuPupuk1.innerText = data.notifPupukHidup[i].waktu.split(" ")[1] + " - " + data.notifPupukMati[i].waktu.split(" ")[1];
        intervalRiwayatPupuk1.innerText = "1x";
      }
    });
  }

  function readDataNotifikasiSemuaSensor() {
    $.get("{{ route('ambilDataNotifikasiSensor') }}", function(data) {
      let idDateRiwayatSensor = [
        document.getElementById("dateWaktuSensor1"),
        document.getElementById("dateWaktuSensor2"),
        document.getElementById("dateWaktuSensor3"),
        document.getElementById("dateWaktuSensor4"),
        document.getElementById("dateWaktuSensor5"),
      ];
      let idJamRiwayatSensor = [
        document.getElementById("jamWaktuSensor1"),
        document.getElementById("jamWaktuSensor2"),
        document.getElementById("jamWaktuSensor3"),
        document.getElementById("jamWaktuSensor4"),
        document.getElementById("jamWaktuSensor5"),
      ];
      let idIntervalRiwayatSensor = [
        document.getElementById("intervalRiwayatSensor1"),
        document.getElementById("intervalRiwayatSensor2"),
        document.getElementById("intervalRiwayatSensor3"),
        document.getElementById("intervalRiwayatSensor4"),
        document.getElementById("intervalRiwayatSensor5"),
      ];
      for(var i = 0; i < data.notifSensor.length; i++) {
        let dateWaktuSensor1 = idDateRiwayatSensor[i];
        let jamWaktuSensor1 = idJamRiwayatSensor[i];
        let intervalRiwayatSensor1 = idIntervalRiwayatSensor[i];
        
        let bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        dateWaktuSensor1.innerText = data.notifSensor[i].created_at.split("-")[2].split("T")[0] + " " + bulan[parseInt(data.notifSensor[i].created_at.split("-")[1]) - 1] + ", " + data.notifSensor[i].created_at.split("-")[0];
        jamWaktuSensor1.innerText = data.notifSensor[i].created_at.split("T")[1].split(".")[0];
        if(data.notifSensor[i].nama_notifikasi == "Peringatan Suhu") {
          intervalRiwayatSensor1.innerText = data.notifSensor[i].deskripsi.split("pada")[0];
        } else if(data.notifSensor[i].nama_notifikasi == "Peringatan Kelembaban Udara") {
          intervalRiwayatSensor1.innerText = data.notifSensor[i].deskripsi.split("pada")[0];
        } else if(data.notifSensor[i].nama_notifikasi == "Peringatan Intensitas Cahaya") {
          intervalRiwayatSensor1.innerText = data.notifSensor[i].deskripsi.split("pada")[0];
        } else if(data.notifSensor[i].nama_notifikasi == "Peringatan Kelembaban Tanah") {
          intervalRiwayatSensor1.innerText = data.notifSensor[i].deskripsi.split("pada")[0];
        }
      }
    });
  }

  function checkMode() {
    let airMode = document.getElementById("switch1");
    let pupukMode = document.getElementById("switch2");
    let airText = document.getElementById("switchStatus1");
    let pupukText = document.getElementById("switchStatus2");
    let initText = document.getElementById("theAlert");

    initText.classList.remove("text-success");
    initText.innerText = "Sedang memperbarui data sensor...";
    initText.classList.add("text-warning");

    $.get("{{ route('checkMode') }}", function(data) {
      if(data.modeAir == 0) {
        airMode.classList.add("switchActive");
        airText.innerText = "Mati";
      } else if(data.modeAir == 1) {
        airMode.classList.remove("switchActive");
        airText.innerText = "Hidup";
      }

      if(data.modePupuk == 0) {
        pupukMode.classList.add("switchActive");
        pupukText.innerText = "Mati";
      } else if(data.modePupuk == 1) {
        pupukMode.classList.remove("switchActive");
        pupukText.innerText = "Hidup";
      }
    });
    initText.classList.remove("text-warning");
    initText.innerText = "Pengaturan Siap!";
    initText.classList.add("text-success");
  }

  function checkWaterFloat() {
    let bgIndexAir = document.getElementById('bgIndexKetersediaanAir');
    let indexAir = document.getElementById('indexKetersediaanAir');

    $.get('{{ route("checkWater") }}', function(data) {
      bgIndexAir.classList.remove('bg-gradient-success');
      bgIndexAir.classList.remove('bg-gradient-danger');
      if(data.dataWaterFloat[0].mode == 1) {
        bgIndexAir.classList.add('bg-gradient-success');
        indexAir.innerText = 'Terisi';
      } else if(data.dataWaterFloat[0].mode == 0) {
        bgIndexAir.classList.add('bg-gradient-danger');
        indexAir.innerText = 'Tidak Terisi';
      }
    });
  }

  function setAirModeOn() {
    $.get("{{ route('setModeAirOn') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang menghidupkan Sensor...";
      initText.classList.add("text-warning");
    });
    checkWaterFloat();
  }
  function setAirModeOff() {
    $.get("{{ route('setModeAirOff') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang mematikan Sensor...";
      initText.classList.add("text-warning");
    });
    checkWaterFloat();
  }
  function setPupukModeOn() {
    $.get("{{ route('setModePupukOn') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang menghidupkan Sensor...";
      initText.classList.add("text-warning");
    });
    checkWaterFloat();
  }
  function setPupukModeOff() {
    $.get("{{ route('setModePupukOff') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang mematikan Sensor...";
      initText.classList.add("text-warning");
    });
    checkWaterFloat();
  }

  function setModeEnabled() {
    document.getElementById('switch1').addEventListener('click', function() {
      let airMode = document.getElementById("switch1");
      airMode.classList.toggle('switchActive');
      let text = document.getElementById('switchStatus1');
      if(text.innerText == "Hidup") {
        text.innerText = "Mati";
        setAirModeOff();
      } else {
        text.innerText = "Hidup";
        setAirModeOn();
      }
    });
    document.getElementById('switch2').addEventListener('click', function() {
      let pupukMode = document.getElementById("switch2");
      pupukMode.classList.toggle('switchActive');
      let text = document.getElementById('switchStatus2');
      if(text.innerText == "Hidup") {
        text.innerText = "Mati";
        setPupukModeOff();
      } else {
        text.innerText = "Hidup";
        setPupukModeOn();
      }
    });
  }

  function setStatusOfKebun(id) {
    let umurText = document.getElementById("umur");
    let tahunTanamText = document.getElementById("tahunTanam");
    let masaTanamanText = document.getElementById("masaTanaman");
    let statusTanamanText = document.getElementById("statusTanaman");

    let baseUrl = "{{ route('ambilDataStatusKebun', ['id' => '__ID__']) }}";
    let finalUrl = baseUrl.replace("__ID__", id);
    $.get(finalUrl, function(data) {
      if (data.jenisUmur == "Hari") {
        umurText.innerText = data.umurBlok + " hari yang lalu";
      }
      if (data.jenisUmur == "Bulan") {
        umurText.innerText = data.umurBlok + " bulan yang lalu";
      }
      if (data.jenisUmur == "Tahun") {
        umurText.innerText = data.umurBlok + " tahun yang lalu";
      }

      tahunTanamText.innerText = data.tahunBlok;
      masaTanamanText.innerText = data.statusBlok;
      statusTanamanText.innerText = data.faseBlok;
    });
  }

  setStatusOfKebun(@php echo $dataBlok[0]->id_detail_blok @endphp);
  readDataNotifikasiAir();
  readDataNotifikasiPupuk();
  readDataNotifikasiSemuaSensor();
  checkWaterFloat();
  readIndexAllDataRataRata();
  readIndexDataIndividualSensor();

  setInterval(checkMode, 2000);
  setTimeout(setModeEnabled, 6000);
  setInterval(readAllDataRataRata, 1200000);
  setInterval(readDataIndividualSensor, 1200000);
  setInterval(readDataNotifikasiAir, 10000);
  setInterval(readDataNotifikasiPupuk, 10000);
  setInterval(readDataNotifikasiSemuaSensor, 10000);
  setInterval(checkWaterFloat, 10000);
</script>
@endsection