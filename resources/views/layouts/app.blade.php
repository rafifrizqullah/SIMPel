<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="icon" href="{{ asset('/images/favicon.png') }}" />

	<title>@yield('title', 'SIMPel')</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('/images/logo-pos.png') }}" alt="Logo Pos Indonesia">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item" id="beranda">
						<a class="nav-link" href="{{ url('/') }}">Beranda</a>
					</li>
					<li class="nav-item dropdown" id="lokasi-pelatihan">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lokasi Pelatihan
						{{-- <i class="fa fa-angle-down"></i> --}}
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ url('/regional') }}">Regional</a>
							<a class="dropdown-item" href="{{ url('/upt') }}">Unit Pelaksana Teknis</a>
							<a class="dropdown-item" href="{{ url('/pusat') }}">Pusat</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="informasi-pelatihan">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi Pelatihan
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ url('/jenispelatihan') }}">Jenis Pelatihan</a>
							<a class="dropdown-item" href="{{ url('/jadwal') }}">Jadwal Pelatihan</a>
							<a class="dropdown-item" href="{{ url('/pelaporan') }}">Pelaporan</a>
							<a class="dropdown-item" href="{{ url('/materi') }}">Materi</a>
						</div>
					</li>
					<li class="nav-item dropdown" id="lokasi-pelatihan">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aktivitas
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ url('/news') }}">Berita</a>
							<a class="dropdown-item" href="{{ url('/galeri') }}">Galeri</a>
						</div>
					</li>
					<li class="nav-item" id="tentang-kami">
						<a class="nav-link" href="/about">Tentang Kami</a>
					</li>
					@can('propose training')
						<li class="nav-item" id="pengajuan-pelatihan">
							<a class="nav-link" href="{{ url('/submission') }}">Pengajuan Pelatihan</a>
						</li>
					@endcan
				</ul>
				
				<!-- Right Side Of Navbar -->
				<ul class="navbar-nav ml-auto mr-4">
					<form class="form-inline my-2 my-lg-0 search-form" method="GET" action="#">
						<div class="inner-addon left-addon">
								<i class="fa fa-search"></i>
								<input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari" aria-label="Search">
						</div>            
					</form>
					<!-- Authentication Links -->
					@guest
					<li class="nav-item" id="masuk">
						<a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
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
								<a class="dropdown-item" href="{{ url('/profile') }}">{{ __('Profil') }}</a>
								@can('verify proposal')
									<a class="dropdown-item" id="verify-pelatihan" href="{{ url('/submission') }}">Pelatihan Masuk</a>
								@endcan
								@can('submit proposal')
									<a class="dropdown-item" id="pengajuan-pelatihan" href="{{ url('/submission') }}">Pengajuan Pelatihan</a>
								@endcan
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
		</nav>
		
		<main class="content">
			@yield('content')
		</main>

		<div class="footer">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
						<h5><a href="/#">Kontak Pos</a></h5>
						<p>
							<a href="/#">Permintaan Informasi</a>   
						</p>
						<br>
						<h5>Lokasi Kantor</h5>
						<p>
							<a href="/#">Regional</a>    
						</p>
						<p>
							<a href="/#">UPT</a>
						</p>
						<p>
							<a href="/#">Pusat</a>
						</p>
					</div>
					<div class="col-md-2">
						<h5>Informasi Pelatihan</h5>
						<p>
							<a href="/#">Jenis Pelatihan</a>    
						</p>
						<p>
							<a href="/#">Jadwal Pelatihan</a>    
						</p>
						<p>
							<a href="/#">Pelaporan</a>
						</p>
						<p>
							<a href="/#">Materi Pelatihan</a>
						</p>
					</div>
					<div class="col-md-2">
						<h5>Tentang Kami</h5>
							<p>
								<a href="/#">Tentang Pos</a>    
							</p>
							<br>
						<h5>Aktivitas</h5>
							<p>
								<a href="/news">Berita</a>
							</p>
							<p>
								<a href="/news">Galeri</a>
							</p>
					</div>
					<div class="col-md-3">
						<h5>Alamat Kami</h5>
						<p>
							Jl. Supratman No.88, Cihaur Geulis, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40122    
						</p>
						<br>
						<h5>Jam Operasional</h5>
						<p>
							Senin-Jumat 08.00-17.00 WIB
						</p>
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
		</div>
	</div>
	
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	{{-- <script src="{{ asset('js/custom.js') }}"></script> --}}

	@yield('scripts')

</body>
</html>
