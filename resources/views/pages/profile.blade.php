@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 class="mt-5">Halo, {{ Auth::user()->name }}!</h1>
		</div>
		<div class="mt-3 col-md-12">
			<p>
				Selamat datang di halaman dashboard anda. Pada halaman ini Anda dapat melihat seluruh informasi data diri dan statistik pelatihan Anda.
			</p>
    </div>
    <div class="col-md-12">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Data diri</h3>
          </div>
          <div class="col-md-4">
            <img class="" src="{{ asset('/images/naruto.jfif') }}" alt="">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <h3>Statistik</h3>
          </div>
          <div class="col-md-3">
            <div class="card mt-3">
              <div class="card-body text-center">
                <span class="dashboard-statistik-count">6</span>
                <span>Permohonan pelatihan</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mt-3">
              <div class="card-body text-center">
                <span class="dashboard-statistik-count">11</span>
                <span>Pelatihan yang telah diikuti</span>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mt-3">
              <div class="card-body text-center">
                <span class="dashboard-statistik-count">6</span>
                <span>Pelatihan yan gakan diikuti</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>
@endsection
