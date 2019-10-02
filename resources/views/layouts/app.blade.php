<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" href="{{ asset('/images/favicon.png') }}" />

	{{-- <title>{{ config('app.name', 'Pos Indonesia') }}</title> --}}
	<title>@yield('title')</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container-fluid" id="app">
		{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
						{{ config('app.name', 'Pos Indonesia') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
						<span class="navbar-toggler-icon"></span>
				</button>
		
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">
		
					</ul>
		
					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
		
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>
		
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav> --}}

		<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('/images/logo-pos.svg') }}" alt="Logo Pos Indonesia">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item" id="beranda">
						<a class="nav-link" href="{{ url('/') }}">Beranda</a>
					</li>
					<li class="nav-item" id="lokasi-pelatihan">
						<a class="nav-link" href="javascript:void(0)">Lokasi Pelatihan</a>
					</li>
					<li class="nav-item" id="informasi-pelatihan">
						<a class="nav-link" href="javascript:void(0)">Informasi Pelatihan</a>
					</li>
					<li class="nav-item" id="aktivitas">
						<a class="nav-link" href="javascript:void(0)">Aktivitas</a>
					</li>
					<li class="nav-item" id="pengajuan-pelatihan">
						<a class="nav-link" href="{{ url('/submission') }}">Pengajuan Pelatihan</a>
					</li>
					{{-- <li class="nav-item" id="tentang-pos">
						<a class="nav-link" href="{{ url('/about') }}">Tentang Pos</a>
					</li> --}}
				</ul>
				<a class="btn" id="btn-masuk" href="#">Masuk</a>
				<form class="form-inline my-2 my-lg-0 search-form" method="GET" action="#">
					<div class="inner-addon left-addon">
							<i class="fa fa-search"></i>
							<input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari" aria-label="Search">
					</div>            
				</form>
				<ul class="navbar-nav flag">
					<li class="nav-item">
						<a class="nav-link" href="https://www.posindonesia.co.id/id">    
							<img class="flag " src="https://www.posindonesia.co.id/img/id_flag.jpg" alt="ID Lang">
						</a>
					</li>
					<li class="nav-item" >
						<a class="nav-link" href="https://www.posindonesia.co.id/en">   
							<img class="flag  flag-disabled " src="https://www.posindonesia.co.id/img/en_flag.jpg" alt="EN Lang">
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="row dropdown-menu-big" id="lokasi-pelatihan-content" style="display:none;">
			<div class="col-md-12">
				<a href="{{ url('/regional') }}">
					<h5>Regional</h5>
				</a>
			</div>
			<div class="col-md-12">
				<a href="">
					<h5>Unit Pelaksana Teknis</h5>
				</a>
			</div>
		</div>
		<div class="row dropdown-menu-big" id="informasi-pelatihan-content" style="display:none;">
			<div class="col-md-12">
				<a href="">
					<h5>Jenis Pelatihan</h5>
				</a>
			</div>
			<div class="col-md-12">
				<a href="">
					<h5>Jadwal Pelatihan</h5>
				</a>
			</div>
			<div class="col-md-12">
				<a href="">
					<h5>Biaya Pelatihan</h5>
				</a>
			</div>
			<div class="col-md-12">
				<a href="">
					<h5>Peserta</h5>
				</a>
			</div>
			<div class="col-md-12">
				<a href="">
					<h5>Pelaporan</h5>
				</a>
			</div>
		</div>
		<div class="row dropdown-menu-big" id="aktivitas-content" style="display:none;">
			<div class="col-md-12">
				<a href="">
					<h5>Berita</h5>
				</a>
			</div>
			<div class="col-md-12">
				<a href="">
					<h5>Galery</h5>
				</a>
			</div>
		</div>

		<main class="content">
			@yield('content')
		</main>

		<div class="row footer">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3">
						<h5>Tentang Pos</h5>
						<p>
							<a href="/id/about-us">Tentang Kami</a>    
						</p>
						<br>
						<h5>
							<a href="/id/complaint">Kontak Pos</a>
						</h5>
						<p>
							<a href="/id/complaint">Permintaan Informasi</a>   
						</p>
						{{-- <p>
							<a href="/id/complaint">Keluhan Pengiriman Pos</a>
						</p> --}}
					</div>
					{{-- <div class="col-md-3">
						<h5>Produk Pos</h5>
						<p>
							<a href="https://www.posindonesia.co.id/id/content/38">Pengiriman</a>
						</p>
						<p>
							<a href="https://www.posindonesia.co.id/id/content/39">Jasa Keuangan</a>
						</p>
						<p>
							<a href="https://www.posindonesia.co.id/id/content/40">Solusi Bisnis</a>
						</p>										
					</div> --}}
					<div class="col-md-3">
					<h5>Berita</h5>
						<p>
							<a href="/id/news">Kumpulan Berita</a>
						</p>
						<p>
							<a href="https://www.posindonesia.co.id/id/content/41">Unduh</a>
						</p>
					</div>
					{{-- <div class="col-md-3">
						<h5>Tracking</h5>
						<p>
								<a href="/id/tracking">Tracking</a>
						</p>
						<p>
								<a href="/id/direction">Cari Kantor Pos Terdekat</a>
						</p>
						<p>
								<a href="/id/check-tarif">Hitung Ongkos Kirim</a>
						</p>
					</div> --}}
				</div>
			</div>
			<div class="col-md-2">
					<h5>Follow Us</h5>
					<p>
							<a href="https://www.facebook.com/posindonesia" target="_blank" rel="nofollow">Facebook</a>
					</p>
					<p>
							<a href="https://twitter.com/@PosIndonesia" target="_blank" rel="nofollow">Twitter</a>
					</p>
					<p>
							<a href="https://www.instagram.com/posindonesia.ig/" target="_blank" rel="nofollow">Instagram</a>
					</p>
					<p>
							<a href="https://www.youtube.com/channel/UCjE1Io1gYXgGCepaXL9k57w" target="_blank" rel="nofollow">Youtube</a>
					</p>
					<p>
							<i class="fa fa-phone"></i>&nbsp; Halo Pos 161
					</p>
			</div>    
		</div>
	</div>
</body>
</html>
