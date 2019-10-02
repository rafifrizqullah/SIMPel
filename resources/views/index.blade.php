@extends('layouts/app')

@section('title', 'Pos Indonesia - Home')

@section('content')
<div class="row jumbotron">
  <div class="container">
    <h1 class="display-5">Pelatihan PT. Pos Indonesia</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
</div>
{{-- <div class="jumbotron" alt="Pelatihan PT. Pos Indonesia" style="opacity: 0.4;
  filter: alpha(opacity=20); width:100%; rgb(0, 0, 0); background-image: url('img/Training_beranda.jpg');">
  <div class="row justify-content-md-center">
    <div class="mbr-white col-md-8">
      <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Pos Indonesia</h1>
      <p style="color:red; font-weight:bold;">Pelatihan yang akan datang</p>
        <a class="nav-link" href="#"style="color:white;font-weight:bold;">28 September 2019 - Pelatihan</a>
        <a class="nav-link" href="#"style="color:white;font-weight:bold;">29 September 2019 - Pelatihan</a>
        <a class="nav-link" href="#"style="color:white;font-weight:bold;">02 Oktober 2019 - Pelatihan</a>
        <a class="nav-link" href="#"style="color:white;font-weight:bold;">05 Oktober 2019 - Pelatihan</a>
        <a class="nav-link" href="#"style="color:white;font-weight:bold;">06 Oktober 2019 - Pelatihan</a>
        <a class="nav-link" href="#"style="color:white;font-weight:bold;">10 Oktober 2019 - Pelatihan</a>
        <br><br>
    </div>
  </div>
</div> --}}

<div class="container">
  <p style="font-weight:bold; color: orange;">Berita Terbaru</p>
  <div class="row">
    <div class="col 9">
      <a href="#">
        <img src="img/Training_beranda.jpg" alt="" style="width:230px; border-radius:8px; height:160px; border:5px solid orange;">
      </a>
      <h6 style="color:orange">10-10-2019</h6>
      <p style="color:orange;font-weight:bold;">Pelatihan PT.POS Indonesia</p>
      <p>blalaala lalalalala lalalalalalala lalalalala lalal alalalalal alalalal alalalalalal allala alalal alalala</p>
    </div>
    <div class="col 9">
      <a href="#">
        <img src="img/Training_beranda.jpg" alt="" style="width:230px; border-radius:8px; height:160px; border:5px solid orange;">
      </a>
      <h6 style="color:orange">10-10-2019</h6>
      <p style="color:orange;font-weight:bold;">Pelatihan PT.POS Indonesia</p>
      <p>blalaalal alalalal alalalalalalalala lalalalalalal alalalalal alalalal alalalalalal allala alalal alalala</p>
    </div>
    <div class="col 9">
      <a href="#">
        <img src="img/Training_beranda.jpg" alt="" style="width:230px; border-radius:8px; height:160px; border:5px solid orange;">
      </a>
      <h6 style="color:orange">10-10-2019</h6>
      <p style="color:orange;font-weight:bold;">Pelatihan PT.POS Indonesia</p>
      <p>blalaalala lalalalalala lalalalalal alalalalalalal alalalalal alalalal alalalalalal allala alalal alalala</p>
    </div>
  </div>
</div>
@endsection