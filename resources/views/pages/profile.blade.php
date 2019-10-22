@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-10">
			<h1 class="mt-5">Halo, User!</h1>
		</div>
		<div class="mt-3 col-sm-10">
			<p>
				Selamat datang di halaman dashboard anda. Pada halaman ini Anda dapat melihat seluruh informasi data diri dan statistik pelatihan Anda.
			</p>
    </div>
    <div class="col-sm-10">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Data diri</h3>
          </div>
          <div class="col-md-3">
            <img class="" src="{{ asset('/images/naruto.jfif') }}" alt="">
          </div>
          <div class="col-md-2 ml-4">
            <ul class="list-unstyled">
              <li>NIPPOS</li>
              <li>Nama pengguna</li>
              <li>Nama lengkap</li>
              <li>TTL</li>
              <li>Alamat tinggal</li>
              <li>Kantor</li>
              <li>Posisi</li>
            </ul>
          </div>
          <div class="col-md-5">
            <ul class="list-unstyled">
                <li>: 666999</li>
                <li>: Naruto</li>
                <li>: Uzumaki Naruto<li>
                <li>: Desa Konoha, 10 Oktober</li>
                <li>: Desa Konoha<li>
                <li>: Desa Konoha</li>
                <li>: Hokage</li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <h3>Statistik</h3>
          </div>
        </div>
      </div>
    </div>
	</div>
</div>
@endsection
