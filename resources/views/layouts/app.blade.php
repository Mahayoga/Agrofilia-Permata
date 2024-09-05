<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template-assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('template-assets/img/favicon.png') }}">
	<title>
		Kebun Vanili - Dashboard | Agrofilia Permata
	</title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
	<!-- Nucleo Icons -->
	<link href="{{ asset('template-assets/css/nucleo-icons.css') }}" rel="stylesheet" />
	<link href="{{ asset('template-assets/css/nucleo-svg.css') }}" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	<!-- CSS Files -->
	<link id="pagestyle" href="{{ asset('template-assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />
	<link href="{{ asset('template-assets/css/my-style.css') }}" rel="stylesheet" />
	<!-- JQuery -->
	<script src="{{ asset('jquery/jquery.min.js') }}"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
	@include('layouts/navbar/index')
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
		<!-- Navbar -->
		@include('layouts/sidebar/index')
		<!-- End Navbar -->
		<div class="container-fluid py-4">
			@yield('content')
			@include('layouts.footer.index')
		</div>
	</main>
	<div class="fixed-plugin">
		<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
			<i class="material-icons py-2">settings</i>
		</a>
		<div class="card shadow-lg">
			<div class="card-header pb-0 pt-3">
				<div class="float-start">
					<h5 class="mt-3 mb-0">Material UI Configurator</h5>
					<p>See our dashboard options.</p>
				</div>
				<div class="float-end mt-4">
					<button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
						<i class="material-icons">clear</i>
					</button>
				</div>
				<!-- End Toggle Button -->
			</div>
			<hr class="horizontal dark my-1">
			<div class="card-body pt-sm-3 pt-0">
				<!-- Sidebar Backgrounds -->
				<div>
					<h6 class="mb-0">Sidebar Colors</h6>
				</div>
				<a href="javascript:void(0)" class="switch-trigger background-color">
					<div class="badge-colors my-2 text-start">
						<span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
						<span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
						<span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
						<span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
						<span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
						<span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
					</div>
				</a>
				<!-- Sidenav Type -->
				<div class="mt-3">
					<h6 class="mb-0">Sidenav Type</h6>
					<p class="text-sm">Choose between 2 different sidenav types.</p>
				</div>
				<div class="d-flex">
					<button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
					<button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
					<button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
				</div>
				<p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
				<!-- Navbar Fixed -->
				<div class="mt-3 d-flex">
					<h6 class="mb-0">Navbar Fixed</h6>
					<div class="form-check form-switch ps-0 ms-auto my-auto">
						<input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
					</div>
				</div>
				<hr class="horizontal dark my-3">
				<div class="mt-2 d-flex">
					<h6 class="mb-0">Light / Dark</h6>
					<div class="form-check form-switch ps-0 ms-auto my-auto">
						<input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
					</div>
				</div>
				<hr class="horizontal dark my-sm-4">
				<a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
				<a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
				<div class="w-100 text-center">
					<a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
					<h6 class="mt-3">Thank you for sharing!</h6>
					<a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
						<i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
					</a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
						<i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
					</a>
				</div>
			</div>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{ asset('template-assets/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('template-assets/js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('template-assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('template-assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
	<script src="{{ asset('template-assets/js/plugins/chartjs.min.js') }}"></script>
	<script>
		var chartPupuk = document.getElementById("chart-pupuk").getContext("2d");
		var chartAir = document.getElementById("chart-air").getContext("2d");
		var chartSuhu = document.getElementById("chart-suhu").getContext("2d");
		var chartCahaya = document.getElementById("chart-cahaya").getContext("2d");
		var chartUdara = document.getElementById("chart-udara").getContext("2d");
		var chartTanah = document.getElementById("chart-tanah").getContext("2d");

		var pupukChart = new Chart(chartPupuk, {
			type: "bar",
			data: {
				labels: [],
				datasets: [{
					label: "",
					tension: 0.4,
					borderWidth: 0,
					borderRadius: 4,
					borderSkipped: false,
					backgroundColor: "rgba(255, 255, 255, .8)",
					data: [],
					maxBarThickness: 6
				}, ],
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
							suggestedMin: 0,
							suggestedMax: 500,
							beginAtZero: true,
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
							color: "#fff"
						},
					},
					x: {
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
				},
			},
		});
		var airChart = new Chart(chartAir, {
			type: "bar",
			data: {
				labels: [],
				datasets: [{
					label: "",
					tension: 0.4,
					borderWidth: 0,
					borderRadius: 4,
					borderSkipped: false,
					backgroundColor: "rgba(255, 255, 255, .8)",
					data: [],
					maxBarThickness: 6
				}, ],
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
							suggestedMin: 0,
							suggestedMax: 500,
							beginAtZero: true,
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
							color: "#fff"
						},
					},
					x: {
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
				},
			},
		});
		var suhuChart = new Chart(chartSuhu, {
			type: "bar",
			data: {
				labels: [],
				datasets: [{
					label: "",
					tension: 0.4,
					borderWidth: 0,
					borderRadius: 4,
					borderSkipped: false,
					backgroundColor: "rgba(255, 255, 255, .8)",
					data: [],
					maxBarThickness: 6
				}, ],
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
							suggestedMin: 0,
							suggestedMax: 500,
							beginAtZero: true,
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
							color: "#fff"
						},
					},
					x: {
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
				},
			},
		});
		var cahayaChart = new Chart(chartCahaya, {
			type: "bar",
			data: {
				labels: [],
				datasets: [{
					label: "",
					tension: 0.4,
					borderWidth: 0,
					borderRadius: 4,
					borderSkipped: false,
					backgroundColor: "rgba(255, 255, 255, .8)",
					data: [],
					maxBarThickness: 6
				}, ],
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
							suggestedMin: 0,
							suggestedMax: 500,
							beginAtZero: true,
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
							color: "#fff"
						},
					},
					x: {
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
				},
			},
		});
		var udaraChart = new Chart(chartUdara, {
			type: "bar",
			data: {
				labels: [],
				datasets: [{
					label: "",
					tension: 0.4,
					borderWidth: 0,
					borderRadius: 4,
					borderSkipped: false,
					backgroundColor: "rgba(255, 255, 255, .8)",
					data: [],
					maxBarThickness: 6
				}, ],
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
							suggestedMin: 0,
							suggestedMax: 500,
							beginAtZero: true,
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
							color: "#fff"
						},
					},
					x: {
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
				},
			},
		});
		var tanahChart = new Chart(chartTanah, {
			type: "bar",
			data: {
				labels: [],
				datasets: [{
					label: "",
					tension: 0.4,
					borderWidth: 0,
					borderRadius: 4,
					borderSkipped: false,
					backgroundColor: "rgba(255, 255, 255, .8)",
					data: [],
					maxBarThickness: 6
				}, ],
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
							suggestedMin: 0,
							suggestedMax: 500,
							beginAtZero: true,
							padding: 10,
							font: {
								size: 14,
								weight: 300,
								family: "Roboto",
								style: 'normal',
								lineHeight: 2
							},
							color: "#fff"
						},
					},
					x: {
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
				},
			},
		});

		function suhuPerHari() {
			$.get("{{ route('dataSensorAirPerHari') }}", function(data) {
				if (data.countID7 != 0) {
					airChart.data.datasets[0].data.unshift(data.countID7);
					airChart.data.labels.unshift(data.hariID7);
				}
				if (data.countID6 != 0) {
					airChart.data.datasets[0].data.unshift(data.countID6);
					airChart.data.labels.unshift(data.hariID6);
				}
				if (data.countID5 != 0) {
					airChart.data.datasets[0].data.unshift(data.countID5);
					airChart.data.labels.unshift(data.hariID5);
				}
				if (data.countID4 != 0) {
					airChart.data.datasets[0].data.unshift(data.countID4);
					airChart.data.labels.unshift(data.hariID4);
				}
				if (data.countID3 != 0) {
					airChart.data.datasets[0].data.unshift(data.countID3);
					airChart.data.labels.unshift(data.hariID3);
				}
				if (data.countID2 != 0) {
					airChart.data.datasets[0].data.unshift(data.countID2);
					airChart.data.labels.unshift(data.hariID2);
				}
				if (data.countID1 != 0) {
					airChart.data.datasets[0].data.unshift(data.countID1);
					airChart.data.labels.unshift(data.hariID1);
				}

				for (var i = 0; airChart.data.datasets[0].data.length != 7; i++) {
					airChart.data.datasets[0].data.unshift(0);
					airChart.data.labels.unshift("---");
				}
				airChart.update();
			});
			$.get("{{ route('dataSensorPupukPerHari') }}", function(data) {
				if (data.countID7 != 0) {
					pupukChart.data.datasets[0].data.unshift(data.countID7);
					pupukChart.data.labels.unshift(data.hariID7);
				}
				if (data.countID6 != 0) {
					pupukChart.data.datasets[0].data.unshift(data.countID6);
					pupukChart.data.labels.unshift(data.hariID6);
				}
				if (data.countID5 != 0) {
					pupukChart.data.datasets[0].data.unshift(data.countID5);
					pupukChart.data.labels.unshift(data.hariID5);
				}
				if (data.countID4 != 0) {
					pupukChart.data.datasets[0].data.unshift(data.countID4);
					pupukChart.data.labels.unshift(data.hariID4);
				}
				if (data.countID3 != 0) {
					pupukChart.data.datasets[0].data.unshift(data.countID3);
					pupukChart.data.labels.unshift(data.hariID3);
				}
				if (data.countID2 != 0) {
					pupukChart.data.datasets[0].data.unshift(data.countID2);
					pupukChart.data.labels.unshift(data.hariID2);
				}
				if (data.countID1 != 0) {
					pupukChart.data.datasets[0].data.unshift(data.countID1);
					pupukChart.data.labels.unshift(data.hariID1);
				}

				for (var i = 0; pupukChart.data.datasets[0].data.length != 7; i++) {
					pupukChart.data.datasets[0].data.unshift(0);
					pupukChart.data.labels.unshift("---");
				}
				pupukChart.update();
			});
			$.get("{{ route('dataSensorSuhuPerHari') }}", function(data) {
				if (data.countID7 != 0) {
					suhuChart.data.datasets[0].data.unshift(data.countID7);
					suhuChart.data.labels.unshift(data.hariID7);
				}
				if (data.countID6 != 0) {
					suhuChart.data.datasets[0].data.unshift(data.countID6);
					suhuChart.data.labels.unshift(data.hariID6);
				}
				if (data.countID5 != 0) {
					suhuChart.data.datasets[0].data.unshift(data.countID5);
					suhuChart.data.labels.unshift(data.hariID5);
				}
				if (data.countID4 != 0) {
					suhuChart.data.datasets[0].data.unshift(data.countID4);
					suhuChart.data.labels.unshift(data.hariID4);
				}
				if (data.countID3 != 0) {
					suhuChart.data.datasets[0].data.unshift(data.countID3);
					suhuChart.data.labels.unshift(data.hariID3);
				}
				if (data.countID2 != 0) {
					suhuChart.data.datasets[0].data.unshift(data.countID2);
					suhuChart.data.labels.unshift(data.hariID2);
				}
				if (data.countID1 != 0) {
					suhuChart.data.datasets[0].data.unshift(data.countID1);
					suhuChart.data.labels.unshift(data.hariID1);
				}

				for (var i = 0; suhuChart.data.datasets[0].data.length != 7; i++) {
					suhuChart.data.datasets[0].data.unshift(0);
					suhuChart.data.labels.unshift("---");
				}
				suhuChart.update();
			});
			$.get("{{ route('dataSensorCahayaPerHari') }}", function(data) {
				if (data.countID7 != 0) {
					cahayaChart.data.datasets[0].data.unshift(data.countID7);
					cahayaChart.data.labels.unshift(data.hariID7);
				}
				if (data.countID6 != 0) {
					cahayaChart.data.datasets[0].data.unshift(data.countID6);
					cahayaChart.data.labels.unshift(data.hariID6);
				}
				if (data.countID5 != 0) {
					cahayaChart.data.datasets[0].data.unshift(data.countID5);
					cahayaChart.data.labels.unshift(data.hariID5);
				}
				if (data.countID4 != 0) {
					cahayaChart.data.datasets[0].data.unshift(data.countID4);
					cahayaChart.data.labels.unshift(data.hariID4);
				}
				if (data.countID3 != 0) {
					cahayaChart.data.datasets[0].data.unshift(data.countID3);
					cahayaChart.data.labels.unshift(data.hariID3);
				}
				if (data.countID2 != 0) {
					cahayaChart.data.datasets[0].data.unshift(data.countID2);
					cahayaChart.data.labels.unshift(data.hariID2);
				}
				if (data.countID1 != 0) {
					cahayaChart.data.datasets[0].data.unshift(data.countID1);
					cahayaChart.data.labels.unshift(data.hariID1);
				}

				for (var i = 0; cahayaChart.data.datasets[0].data.length != 7; i++) {
					cahayaChart.data.datasets[0].data.unshift(0);
					cahayaChart.data.labels.unshift("---");
				}
				cahayaChart.update();
			});
			$.get("{{ route('dataSensorUdaraPerHari') }}", function(data) {
				if (data.countID7 != 0) {
					udaraChart.data.datasets[0].data.unshift(data.countID7);
					udaraChart.data.labels.unshift(data.hariID7);
				}
				if (data.countID6 != 0) {
					udaraChart.data.datasets[0].data.unshift(data.countID6);
					udaraChart.data.labels.unshift(data.hariID6);
				}
				if (data.countID5 != 0) {
					udaraChart.data.datasets[0].data.unshift(data.countID5);
					udaraChart.data.labels.unshift(data.hariID5);
				}
				if (data.countID4 != 0) {
					udaraChart.data.datasets[0].data.unshift(data.countID4);
					udaraChart.data.labels.unshift(data.hariID4);
				}
				if (data.countID3 != 0) {
					udaraChart.data.datasets[0].data.unshift(data.countID3);
					udaraChart.data.labels.unshift(data.hariID3);
				}
				if (data.countID2 != 0) {
					udaraChart.data.datasets[0].data.unshift(data.countID2);
					udaraChart.data.labels.unshift(data.hariID2);
				}
				if (data.countID1 != 0) {
					udaraChart.data.datasets[0].data.unshift(data.countID1);
					udaraChart.data.labels.unshift(data.hariID1);
				}

				for (var i = 0; udaraChart.data.datasets[0].data.length != 7; i++) {
					udaraChart.data.datasets[0].data.unshift(0);
					udaraChart.data.labels.unshift("---");
				}
				udaraChart.update();
			});
			$.get("{{ route('dataSensorTanahPerHari') }}", function(data) {
				if (data.countID7 != 0) {
					tanahChart.data.datasets[0].data.unshift(data.countID7);
					tanahChart.data.labels.unshift(data.hariID7);
				}
				if (data.countID6 != 0) {
					tanahChart.data.datasets[0].data.unshift(data.countID6);
					tanahChart.data.labels.unshift(data.hariID6);
				}
				if (data.countID5 != 0) {
					tanahChart.data.datasets[0].data.unshift(data.countID5);
					tanahChart.data.labels.unshift(data.hariID5);
				}
				if (data.countID4 != 0) {
					tanahChart.data.datasets[0].data.unshift(data.countID4);
					tanahChart.data.labels.unshift(data.hariID4);
				}
				if (data.countID3 != 0) {
					tanahChart.data.datasets[0].data.unshift(data.countID3);
					tanahChart.data.labels.unshift(data.hariID3);
				}
				if (data.countID2 != 0) {
					tanahChart.data.datasets[0].data.unshift(data.countID2);
					tanahChart.data.labels.unshift(data.hariID2);
				}
				if (data.countID1 != 0) {
					tanahChart.data.datasets[0].data.unshift(data.countID1);
					tanahChart.data.labels.unshift(data.hariID1);
				}

				for (var i = 0; tanahChart.data.datasets[0].data.length != 7; i++) {
					tanahChart.data.datasets[0].data.unshift(0);
					tanahChart.data.labels.unshift("---");
				}
				tanahChart.update();
			});
		}
		suhuPerHari();

		function setStatusOfKebun() {
			let selectOption = document.getElementById("kebun-blok");
			let umurText = document.getElementById("umur");
			let tahunTanamText = document.getElementById("tahunTanam");
			let masaTanamanText = document.getElementById("masaTanaman");
			let statusTanamanText = document.getElementById("statusTanaman");

			if (selectOption.value != "notSelected") {
				let baseUrl = "{{ route('ambilDataStatusKebun', ['id' => '__ID__']) }}";
				let finalUrl = baseUrl.replace("__ID__", selectOption.value);
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
		}
	</script>
	<script>
		var win = navigator.platform.indexOf('Win') > -1;
		if (win && document.querySelector('#sidenav-scrollbar')) {
			var options = {
				damping: '0.5'
			}
			Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
		}
	</script>
	<!-- Github buttons -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="{{ asset('template-assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>
</body>
<!-- Script for Update Chart -->
<script>

</script>

</html>