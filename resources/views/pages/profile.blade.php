@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Halo, {{ Auth::user()->name }}!</h1>
    <p>
      Selamat datang di halaman dashboard anda. Pada halaman ini Anda dapat melihat seluruh informasi data diri dan statistik pelatihan Anda.
    </p>
  </div>
</div>
@endsection
