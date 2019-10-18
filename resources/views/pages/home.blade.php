@extends('layouts.app')

@section('title', 'SIMPel - Home')

@section('content')
{{-- <div class="container-fluid home"> --}}
  {{-- <div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Dashboard</div>

				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif

					You are logged in!
				</div>
			</div>
		</div>
	</div> --}}

	<div class="row jumbotron jumbotron-fluid bg-jumbotron">
		<div class="overlay"></div>
		<div class="container">
			<div class="text-center">
				<img src="images/title.png"  alt="Responsive image" style="width:450px; height:150px;">
			</div>
			<br>
			<h4 class="display-5">Pelatihan yang akan datang:</h1>
			<div class="row">
				<div class="col-md-12">
					<h5>TBA~</h5>
				</div>
				<div class="col-md-12">
					<h5>TBA</h5>
				</div>
				<div class="col-md-12">
					<h5>TBA</h5>
				</div>
				<div class="col-md-12">
					<h5>TBA</h5>
				</div>
				<div class="col-md-12">
					<h5>TBA</h5>
				</div>
			</div>
			{{-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<hr class="my-4">
			<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
			</p> --}}
		</div>
	</div>

	<div class="container">
		<h3 style="font-weight:bold; color: orange;">Berita Terbaru</h3>
		<div class="row mt-3">
			<div class="col-sm-4">
				<div class="text-center">
					<a href="#">
						<img src="images/Training_beranda.jpg"  alt="" style="max-width:100%; border-radius:8px;  border:3px solid orange;">
					</a>
				</div>
				<div class="mt-3">
					<h6 style="color:orange">10-10-2019 - Bandung</h6>
					<a href="#">
						<p style="color:orange; font-weight:bold; font-size:16px">Pelatihan PT.POS Indonesia</p>
					</a>
					<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum doloribus ullam tempora veritatis laudantium at dolorum nihil labore consequuntur, eligendi esse quidem soluta dolorem maxime iste molestiae ipsum culpa!</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="text-center">
					<a href="#">
						<img src="images/Training_beranda.jpg"  alt="" style="max-width:100%; border-radius:8px;  border:3px solid orange;">
					</a>
				</div>
				<div class="mt-3">
					<h6 style="color:orange">10-10-2019 - Bandung</h6>
					<a href="#">
						<p style="color:orange; font-weight:bold; font-size:16px">Pelatihan PT.POS Indonesia</p>
					</a>
					<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum doloribus ullam tempora veritatis laudantium at dolorum nihil labore consequuntur, eligendi esse quidem soluta dolorem maxime iste molestiae ipsum culpa!</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="text-center">
					<a href="#">
						<img src="images/Training_beranda.jpg"  alt="" style="max-width:100%; border-radius:8px;  border:3px solid orange;">
					</a>
				</div>
				<div class="mt-3">
					<h6 style="color:orange">10-10-2019 - Bandung</h6>
					<a href="#">
						<p style="color:orange; font-weight:bold; font-size:16px">Pelatihan PT.POS Indonesia</p>
					</a>
					<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum doloribus ullam tempora veritatis laudantium at dolorum nihil labore consequuntur, eligendi esse quidem soluta dolorem maxime iste molestiae ipsum culpa!</p>
				</div>
			</div>
		</div>
	</div>
	
{{-- </div> --}}
@endsection
