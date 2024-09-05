@extends('layouts.app')
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
              <h6 class="text-center mb-0">Deskripsi Kebun Blok Satu</h6>
            </div>
            <div class="card-body pt-0 p-3">
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Umur:</span>
                <span class="text-sm" id="umur">&nbsp;2.5 tahun (30 bulan)</span>
              </div>
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Tahun Tanam:</span>
                <span class="text-sm" id="tahunTanam">&nbsp;2020</span>
              </div>
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Status Perlakuan:</span>
                <span class="text-sm" id="masaTanaman">&nbsp;Masa Kritis</span>
              </div>
              <div class="d-flex align-items-center">
                <span class="text-md font-weight-bold text-dark">Status Tanaman:</span>
                <span class="text-sm" id="statusTanaman">&nbsp;Generatif</span>
              </div>
              <hr class="horizontal dark my-3">
              <span class="text-xs mb-0">*Detail dari kebun blok satu</span>
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
                  <div class="col-md-4 bg-light rounded p-4">
                    <h5 class="text-center">Detail Suhu</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataSuhu">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataSuhu">32°C</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kondisi suhu saat ini:</span>
                      <span class="text-sm">&nbsp;Terlalu Panas</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks suhu normal:</span>
                      <span class="text-sm">&nbsp;20°C - 25°C</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks suhu panas:</span>
                      <span class="text-sm">&nbsp;> 28°C</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada 4 menit yang lalu</span>
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
                  <div class="col-md-4 bg-light rounded p-4">
                    <h5 class="text-center">Detail Cahaya</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataCahaya">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataCahaya">45%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kondisi cahaya saat ini:</span>
                      <span class="text-sm">&nbsp;Normal</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks cahaya normal:</span>
                      <span class="text-sm">&nbsp;30% - 50%</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks cahaya diatas normal:</span>
                      <span class="text-sm">&nbsp;> 50% lx</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada 6 menit yang lalu</span>
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
                  <div class="col-md-4 bg-light rounded p-4">
                    <h5 class="text-center">Detail Kelembaban Udara</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataKelembaban">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataKelembaban">10%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kelembaban saat ini:</span>
                      <span class="text-sm">&nbsp;Lumayan Kering</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks normal (kritis):</span>
                      <span class="text-sm">&nbsp;15%-25%</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks (kritis):</span>
                      <span class="text-sm">&nbsp;< 10% | > 30%</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada 2 menit yang lalu</span>
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
                  <div class="col-md-4 bg-light rounded p-4">
                    <h5 class="text-center">Detail Kelembaban Tanah</h5>
                    <div class="d-flex justify-content-center">
                      <div class="custom-box bg-gradient-danger shadow text-center border-radius-lg p-2" id="bgIndexRataRataPHTanah">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <h3 class="text-center font-weight-bold text-white mb-0" id="indikatorRataRataPHTanah">5.7</h3>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                      <span class="text-md font-weight-bold text-dark">Kondisi tanah saat ini:</span>
                      <span class="text-sm">&nbsp;Normal</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks tanah normal:</span>
                      <span class="text-sm">&nbsp;5.5 - 7</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="text-md font-weight-bold text-dark">Indeks tanah tidak normal:</span>
                      <span class="text-sm">&nbsp;> 7.1 | < 5.5</span>
                    </div>
                    <hr class="horizontal dark my-3">
                    <span class="text-xs mb-0">*Terakhir di update pada 5 menit yang lalu</span>
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
                                    <h3 id="indikatorKelembabanTanah1" class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
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
                                    <h3 id="indikatorKelembabanTanah2" class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
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
                                    <h3 id="indikatorKelembabanTanah3" class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
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
                                    <h3 id="indikatorKelembabanTanah4" class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
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
                                    <h3 id="indikatorKelembabanTanah5" class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
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
                                    <h3 id="indikatorKelembabanTanah6" class="text-center font-weight-bold text-white mb-0">0 kPa</h3>
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
    <div class="col-lg-4">
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
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
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
          <ul class="list-group" id="ulRiwayatPupuk">  
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
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
          <ul id="ulRiwayatSensor" class="list-group">
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7 mt-4">
      <div class="card">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Pusat Kontrol</h6>
          <p class="text-warning font-weight-bold mb-0 text-xs" id="theAlert">Inisialisasi... Harap tunggu...</p>
        </div>
        <div class="card-body pt-4 p-3">
          <div class="row">
            <div class="col-md-6">
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
      labels: [],
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
        data: [],
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
      labels: [],
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
        data: [],
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
      labels: [],
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
        data: [],
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
      labels: [],
      datasets: [{
        label: "Asam (PH)",
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
        data: [],
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
      labels: [],
      datasets: [{
        label: "Kilopascal (kPa)",
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
        data: [],
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
      labels: [],
      datasets: [{
        label: "Kilopascal (kPa)",
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
        data: [],
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
      labels: [],
      datasets: [{
        label: "Kilopascal (kPa)",
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
        data: [],
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
      labels: [],
      datasets: [{
        label: "Kilopascal (kPa)",
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
        data: [],
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
      labels: [],
      datasets: [{
        label: "Kilopascal (kPa)",
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
        data: [],
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
      labels: [],
      datasets: [{
        label: "Kilopascal (kPa)",
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
        data: [],
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
      labels: [],
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
        data: [],
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
      labels: [],
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
        data: [],
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
      labels: [],
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
        data: [],
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
    $.get("{{ route('readDataRataRata') }}", function(data) {
      suhu.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
      suhu.data.datasets[0].data.push(data.suhu);
      if(suhu.data.labels.length > 10) {
        suhu.data.labels.shift();
      } else if(suhu.data.labels.length > 10) { 
        suhu.data.datasets.data.shift();
      }

      if(data.suhu != null) {
        document.getElementById("indikatorRataRataSuhu").innerText = data.suhu + "°C";
      } else {
        document.getElementById("indikatorRataRataSuhu").innerText = "0°C";
      }

      var theBgClass = document.getElementById("bgIndexRataRataSuhu");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.suhu < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.suhu > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      cahaya.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
      cahaya.data.datasets[0].data.push(data.cahaya);
      if(cahaya.data.labels.length > 10) {
        cahaya.data.labels.shift();
      } else if(cahaya.data.labels.length > 10) {
        cahaya.data.datasets.data.shift();
      }

      if(data.cahaya != null) {
        document.getElementById("indikatorRataRataCahaya").innerText = data.cahaya + "%";
      } else {
        document.getElementById("indikatorRataRataCahaya").innerText = "0%";
      }
      
      var theBgClass = document.getElementById("bgIndexRataRataCahaya");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.cahaya < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.cahaya > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembaban.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
      kelembaban.data.datasets[0].data.push(data.kelembaban);
      if(kelembaban.data.labels.length > 10) {
        kelembaban.data.labels.shift();
      } else if(kelembaban.data.labels.length > 10) {
        kelembaban.data.datasets.data.shift();
      }

      if(data.kelembaban != null) {
        document.getElementById("indikatorRataRataKelembaban").innerText = data.kelembaban + "%";
      } else {
        document.getElementById("indikatorRataRataKelembaban").innerText = "0%";
      }
      
      var theBgClass = document.getElementById("bgIndexRataRataKelembaban");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelembaban < 10) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelembaban > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      tanah.data.labels.push(data.updated_at.split("T")[1].substr(0, 5));
      tanah.data.datasets[0].data.push(data.kelembabanTanah);
      if(tanah.data.labels.length > 10) {
        tanah.data.labels.shift();
      } else if(tanah.data.labels.length > 10) {
        tanah.data.datasets.data.shift();
      }

      if(data.kelembabanTanah != null) {
        document.getElementById("indikatorRataRataPHTanah").innerText = data.kelembabanTanah + "%";
      } else {
        document.getElementById("indikatorRataRataPHTanah").innerText = "0%";
      }
      
      var theBgClass = document.getElementById("bgIndexRataRataPHTanah");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelembabanTanah < 5.5) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelembabanTanah > 7) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      suhu.update();
      cahaya.update();
      kelembaban.update();
      tanah.update();
    });
  }

  function readDataIndividualSensor() {
    $.get("{{ route('ambilDataDetailSemuaSensor') }}", function(data) {
      kelembabanTanahDetail1.data.labels.push(data.kelTanah1[0].updated_at.split("T")[1].substr(0, 5));
      kelembabanTanahDetail1.data.datasets[0].data.push(data.kelTanah1[0].kelembabantanah);
      if(kelembabanTanahDetail1.data.labels.length > 5) {
        kelembabanTanahDetail1.data.labels.shift();
      } else if(kelembabanTanahDetail1.data.labels.length > 5) { 
        kelembabanTanahDetail1.data.datasets.data.shift();
      }

      if(data.kelTanah1[0].kelembabantanah != null) {
        document.getElementById("indikatorKelembabanTanah1").innerText = data.kelTanah1[0].kelembabantanah + " kPa";
      } else {
        document.getElementById("indikatorKelembabanTanah1").innerText = "0 kPa";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah1");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah1[0].kelembabantanah < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah1[0].kelembabantanah > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail2.data.labels.push(data.kelTanah2[0].updated_at.split("T")[1].substr(0, 5));
      kelembabanTanahDetail2.data.datasets[0].data.push(data.kelTanah2[0].kelembabantanah);
      if(kelembabanTanahDetail2.data.labels.length > 5) {
        kelembabanTanahDetail2.data.labels.shift();
      } else if(kelembabanTanahDetail2.data.labels.length > 5) { 
        kelembabanTanahDetail2.data.datasets.data.shift();
      }

      if(data.kelTanah2[0].kelembabantanah != null) {
        document.getElementById("indikatorKelembabanTanah2").innerText = data.kelTanah2[0].kelembabantanah + " kPa";
      } else {
        document.getElementById("indikatorKelembabanTanah2").innerText = "0 kPa";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah2");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah2[0].kelembabantanah < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah2[0].kelembabantanah > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail3.data.labels.push(data.kelTanah3[0].updated_at.split("T")[1].substr(0, 5));
      kelembabanTanahDetail3.data.datasets[0].data.push(data.kelTanah3[0].kelembabantanah);
      if(kelembabanTanahDetail3.data.labels.length > 5) {
        kelembabanTanahDetail3.data.labels.shift();
      } else if(kelembabanTanahDetail3.data.labels.length > 5) { 
        kelembabanTanahDetail3.data.datasets.data.shift();
      }

      if(data.kelTanah3[0].kelembabantanah != null) {
        document.getElementById("indikatorKelembabanTanah3").innerText = data.kelTanah3[0].kelembabantanah + " kPa";
      } else {
        document.getElementById("indikatorKelembabanTanah3").innerText = "0 kPa";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah3");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah3[0].kelembabantanah < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah3[0].kelembabantanah > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail4.data.labels.push(data.kelTanah4[0].updated_at.split("T")[1].substr(0, 5));
      kelembabanTanahDetail4.data.datasets[0].data.push(data.kelTanah4[0].kelembabantanah);
      if(kelembabanTanahDetail4.data.labels.length > 5) {
        kelembabanTanahDetail4.data.labels.shift();
      } else if(kelembabanTanahDetail4.data.labels.length > 5) { 
        kelembabanTanahDetail4.data.datasets.data.shift();
      }

      if(data.kelTanah4[0].kelembabantanah != null) {
        document.getElementById("indikatorKelembabanTanah4").innerText = data.kelTanah4[0].kelembabantanah + " kPa";
      } else {
        document.getElementById("indikatorKelembabanTanah4").innerText = "0 kPa";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah4");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah4[0].kelembabantanah < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah4[0].kelembabantanah > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail5.data.labels.push(data.kelTanah5[0].updated_at.split("T")[1].substr(0, 5));
      kelembabanTanahDetail5.data.datasets[0].data.push(data.kelTanah5[0].kelembabantanah);
      if(kelembabanTanahDetail5.data.labels.length > 5) {
        kelembabanTanahDetail5.data.labels.shift();
      } else if(kelembabanTanahDetail5.data.labels.length > 5) { 
        kelembabanTanahDetail5.data.datasets.data.shift();
      }

      if(data.kelTanah5[0].kelembabantanah != null) {
        document.getElementById("indikatorKelembabanTanah5").innerText = data.kelTanah5[0].kelembabantanah + " kPa";
      } else {
        document.getElementById("indikatorKelembabanTanah5").innerText = "0 kPa";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah5");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah5[0].kelembabantanah < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah5[0].kelembabantanah > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanTanahDetail6.data.labels.push(data.kelTanah6[0].updated_at.split("T")[1].substr(0, 5));
      kelembabanTanahDetail6.data.datasets[0].data.push(data.kelTanah6[0].kelembabantanah);
      if(kelembabanTanahDetail6.data.labels.length > 5) {
        kelembabanTanahDetail6.data.labels.shift();
      } else if(kelembabanTanahDetail6.data.labels.length > 5) { 
        kelembabanTanahDetail6.data.datasets.data.shift();
      }

      if(data.kelTanah6[0].kelembabantanah != null) {
        document.getElementById("indikatorKelembabanTanah6").innerText = data.kelTanah6[0].kelembabantanah + " kPa";
      } else {
        document.getElementById("indikatorKelembabanTanah6").innerText = "0 kPa";
      }

      var theBgClass = document.getElementById("bgIndexKelembabanTanah6");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.kelTanah6[0].kelembabantanah < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.kelTanah6[0].kelembabantanah > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      suhuDetail.data.labels.push(data.suhu[0].updated_at.split("T")[1].substr(0, 5));
      suhuDetail.data.datasets[0].data.push(data.suhu[0].suhu);
      if(suhuDetail.data.labels.length > 5) {
        suhuDetail.data.labels.shift();
      } else if(suhuDetail.data.labels.length > 5) { 
        suhuDetail.data.datasets.data.shift();
      }

      if(data.suhu[0].suhu != null) {
        document.getElementById("indikatorDetailSuhu").innerText = data.suhu[0].suhu + " °C";
      } else {
        document.getElementById("indikatorDetailSuhu").innerText = "0°C";
      }

      var theBgClass = document.getElementById("bgIndexDetailSuhu");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.suhu[0].suhu < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.suhu[0].suhu > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      cahayaDetail.data.labels.push(data.cahaya[0].updated_at.split("T")[1].substr(0, 5));
      cahayaDetail.data.datasets[0].data.push(data.cahaya[0].cahaya);
      if(cahayaDetail.data.labels.length > 5) {
        cahayaDetail.data.labels.shift();
      } else if(cahayaDetail.data.labels.length > 5) { 
        cahayaDetail.data.datasets.data.shift();
      }

      if(data.cahaya[0].cahaya != null) {
        document.getElementById("indikatorDetailCahaya").innerText = data.cahaya[0].cahaya + "%";
      } else {
        document.getElementById("indikatorDetailCahaya").innerText = "0%";
      }

      var theBgClass = document.getElementById("bgIndexDetailCahaya");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.cahaya[0].cahaya < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.cahaya[0].cahaya > 25) {
        theBgClass.classList.add("bg-gradient-danger");
      } else {
        theBgClass.classList.add("bg-gradient-success");
      }

      kelembabanUdaraDetail.data.labels.push(data.udara[0].updated_at.split("T")[1].substr(0, 5));
      kelembabanUdaraDetail.data.datasets[0].data.push(data.udara[0].kelembaban);
      if(kelembabanUdaraDetail.data.labels.length > 5) {
        kelembabanUdaraDetail.data.labels.shift();
      } else if(kelembabanUdaraDetail.data.labels.length > 5) { 
        kelembabanUdaraDetail.data.datasets.data.shift();
      }

      if(data.udara[0].kelembaban != null) {
        document.getElementById("indikatorDetailUdara").innerText = data.udara[0].kelembaban + " RH";
      } else {
        document.getElementById("indikatorDetailUdara").innerText = "0 RH";
      }

      var theBgClass = document.getElementById("bgIndexDetailUdara");
      theBgClass.classList.remove("bg-gradient-danger");
      if(data.udara[0].kelembaban < 20) {
        theBgClass.classList.add("bg-gradient-warning");
      } else if(data.udara[0].kelembaban > 25) {
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

  function readDataNotifikasiAir() {
    let getList = document.querySelectorAll(".liRiwayatAir");
    for(var i = 0; i < getList.length; i++) {
      getList[i].remove();
    }
    $.get("{{ route('ambilDataNotifikasiAir') }}", function(data) {
      let ulElement = document.getElementById("ulRiwayatAir");
      for(var i = 0; i < data.notifAirMati.length; i++) {
        let liElement = document.createElement("li");
          let divElement1 = document.createElement("div");
            let h6Element1 = document.createElement("h6");
            let spanElement1 = document.createElement("span");
          let divElement2 = document.createElement("div");

        liElement.setAttribute("class", "liRiwayatAir list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg");
        divElement1.setAttribute("class", "d-flex flex-column");
        h6Element1.setAttribute("class", "mb-1 text-dark font-weight-bold text-sm");
        spanElement1.setAttribute("class", "text-xs");
        divElement2.setAttribute("class", "d-flex align-items-center text-sm");

        let bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        h6Element1.appendChild(document.createTextNode(data.notifAirMati[i].waktu.split("-")[2].split(" ")[0] + " " + bulan[parseInt(data.notifAirMati[i].waktu.split("-")[1]) - 1] + ", " + data.notifAirMati[i].waktu.split("-")[0]));
        spanElement1.appendChild(document.createTextNode(data.notifAirHidup[i].waktu.split(" ")[1] + " - " + data.notifAirMati[i].waktu.split(" ")[1]));
        divElement2.appendChild(document.createTextNode("1x"));

        divElement1.appendChild(h6Element1);
        divElement1.appendChild(spanElement1);
        liElement.appendChild(divElement1);
        liElement.appendChild(divElement2);

        ulElement.appendChild(liElement);
      }
    });
  }

  function readDataNotifikasiPupuk() {
    let getList = document.querySelectorAll(".liRiwayatPupuk");
    for(var i = 0; i < getList.length; i++) {
      getList[i].remove();
    }
    $.get("{{ route('ambilDataNotifikasiPupuk') }}", function(data) {
      let ulElement = document.getElementById("ulRiwayatPupuk");
      for(var i = 0; i < data.notifPupukMati.length; i++) {
        let liElement = document.createElement("li");
          let divElement1 = document.createElement("div");
            let h6Element1 = document.createElement("h6");
            let spanElement1 = document.createElement("span");
          let divElement2 = document.createElement("div");

        liElement.setAttribute("class", "liRiwayatPupuk list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg");
        divElement1.setAttribute("class", "d-flex flex-column");
        h6Element1.setAttribute("class", "mb-1 text-dark font-weight-bold text-sm");
        spanElement1.setAttribute("class", "text-xs");
        divElement2.setAttribute("class", "d-flex align-items-center text-sm");

        let bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        h6Element1.appendChild(document.createTextNode(data.notifPupukMati[i].waktu.split("-")[2].split(" ")[0] + " " + bulan[parseInt(data.notifPupukMati[i].waktu.split("-")[1]) - 1] + ", " + data.notifPupukMati[i].waktu.split("-")[0]));
        spanElement1.appendChild(document.createTextNode(data.notifPupukHidup[i].waktu.split(" ")[1] + " - " + data.notifPupukMati[i].waktu.split(" ")[1]));
        divElement2.appendChild(document.createTextNode("1x"));

        divElement1.appendChild(h6Element1);
        divElement1.appendChild(spanElement1);
        liElement.appendChild(divElement1);
        liElement.appendChild(divElement2);

        ulElement.appendChild(liElement);
      }
    });
  }

  function readDataNotifikasiSemuaSensor() {
    let getList = document.querySelectorAll(".liRiwayatSensor");
    for(var i = 0; i < getList.length; i++) {
      getList[i].remove();
    }
    $.get("{{ route('ambilDataNotifikasiSensor') }}", function(data) {
      let ulElement = document.getElementById("ulRiwayatSensor");
      for(var i = 0; i < data.notifSensor.length; i++) {
        let liElement = document.createElement("li");
          let divElement1 = document.createElement("div");
            let h6Element1 = document.createElement("h6");
            let spanElement1 = document.createElement("span");
          let divElement2 = document.createElement("div");

        liElement.setAttribute("class", "liRiwayatSensor list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg");
        divElement1.setAttribute("class", "d-flex flex-column");
        h6Element1.setAttribute("class", "mb-1 text-dark font-weight-bold text-sm");
        spanElement1.setAttribute("class", "text-xs");
        divElement2.setAttribute("class", "d-flex align-items-center text-sm");

        let bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        h6Element1.appendChild(document.createTextNode(data.notifSensor[i].created_at.split("-")[2].split("T")[0] + " " + bulan[parseInt(data.notifSensor[i].created_at.split("-")[1]) - 1] + ", " + data.notifSensor[i].created_at.split("-")[0]));
        spanElement1.appendChild(document.createTextNode(data.notifSensor[i].created_at.split("T")[1].split(".")[0]));
        if(data.notifSensor[i].nama_notifikasi == "Peringatan Suhu") {
          divElement2.appendChild(document.createTextNode("Suhu mencapai: " + data.notifSensor[i].deskripsi.split("diatas")[1].split("!")[0]));
        } else if(data.notifSensor[i].nama_notifikasi == "Peringatan Kelembaban Udara") {
          divElement2.appendChild(document.createTextNode("Udara mencapai: " + data.notifSensor[i].deskripsi.split(":")[1] + "%"));
        } else if(data.notifSensor[i].nama_notifikasi == "Peringatan Intensitas Cahaya") {
          divElement2.appendChild(document.createTextNode("Cahaya mencapai: " + data.notifSensor[i].deskripsi.split(":")[1] + "%"));
        } else if(data.notifSensor[i].nama_notifikasi == "Peringatan Kelembaban Tanah") {
          divElement2.appendChild(document.createTextNode("Tanah mencapai: " + data.notifSensor[i].deskripsi.split(":")[1] + "%"));
        }

        divElement1.appendChild(h6Element1);
        divElement1.appendChild(spanElement1);
        liElement.appendChild(divElement1);
        liElement.appendChild(divElement2);

        ulElement.appendChild(liElement);
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

  function setAirModeOn() {
    $.get("{{ route('setModeAirOn') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang menghidupkan Sensor...";
      initText.classList.add("text-warning");
    });
  }
  function setAirModeOff() {
    $.get("{{ route('setModeAirOff') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang mematikan Sensor...";
      initText.classList.add("text-warning");
    });
  }
  function setPupukModeOn() {
    $.get("{{ route('setModePupukOn') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang menghidupkan Sensor...";
      initText.classList.add("text-warning");
    });
  }
  function setPupukModeOff() {
    $.get("{{ route('setModePupukOff') }}").always(function() {
      let initText = document.getElementById("theAlert");
      initText.classList.remove("text-success");
      initText.innerText = "Sedang mematikan Sensor...";
      initText.classList.add("text-warning");
    });
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

  function setStatusOfKebun() {
    let umurText = document.getElementById("umur");
    let tahunTanamText = document.getElementById("tahunTanam");
    let masaTanamanText = document.getElementById("masaTanaman");
    let statusTanamanText = document.getElementById("statusTanaman");

    let baseUrl = "{{ route('ambilDataStatusKebun', ['id' => '__ID__']) }}";
    let finalUrl = baseUrl.replace("__ID__", {{$id}});
    $.get(finalUrl, function(data) {
      if(data.jenisUmur == "Hari") {
        umurText.innerText = data.umurBlok + " hari yang lalu";
      }
      if(data.jenisUmur == "Bulan") {
        umurText.innerText = data.umurBlok + " bulan yang lalu";
      }
      if(data.jenisUmur == "Tahun") {
        umurText.innerText = data.umurBlok + " tahun yang lalu";
      }

      tahunTanamText.innerText = data.tahunBlok;
      masaTanamanText.innerText = data.statusBlok;
      statusTanamanText.innerText = data.faseBlok;
    });
  }

  setStatusOfKebun();
  readDataNotifikasiAir();
  readDataNotifikasiPupuk();
  readDataNotifikasiSemuaSensor();

  setInterval(checkMode, 5000);
  setTimeout(setModeEnabled, 6000);
  setInterval(readAllDataRataRata, 5000);
  setInterval(readDataIndividualSensor, 5000);
  setInterval(readDataNotifikasiAir, 20000);
  setInterval(readDataNotifikasiPupuk, 20000);
  setInterval(readDataNotifikasiSemuaSensor, 20000);
</script>
@endsection