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
      <div class="hh">
        <h1 class="display-1" style="margin-bottom: 0px;">SIMPel</h1>
        <p>(Sistem Informasi Pelatihan)</p>
      </div>
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
    <p style="font-weight:bold; color: orange;">Berita Terbaru</p>
    <div class="row">
      <div class="col-sm-4">
        <a href="#">
          <img src="images/Training_beranda.jpg" alt="" style="width:230px; border-radius:8px; height:160px; border:5px solid orange;">
        </a>
        <h6 style="color:orange">10-10-2019</h6>
        <p style="color:orange;font-weight:bold;">Pelatihan PT.POS Indonesia</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum doloribus ullam tempora veritatis laudantium at dolorum nihil labore consequuntur, eligendi esse quidem soluta dolorem maxime iste molestiae ipsum culpa!</p>
      </div>
      <div class="col-sm-4">
        <a href="#">
          <img src="images/Training_beranda.jpg" alt="" style="width:230px; border-radius:8px; height:160px; border:5px solid orange;">
        </a>
        <h6 style="color:orange">10-10-2019</h6>
        <p style="color:orange;font-weight:bold;">Pelatihan PT.POS Indonesia</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae natus nobis recusandae? Delectus, earum culpa, laudantium placeat repellendus vitae animi cupiditate facilis nam voluptatem temporibus fugiat deserunt doloribus dolorum incidunt?</p>
      </div>
      <div class="col-sm-4">
        <a href="#">
          <img src="images/Training_beranda.jpg" alt="" style="width:230px; border-radius:8px; height:160px; border:5px solid orange;">
        </a>
        <h6 style="color:orange">10-10-2019</h6>
        <p style="color:orange;font-weight:bold;">Pelatihan PT.POS Indonesia</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolorum perspiciatis eos animi adipisci atque dolor, ratione fuga quae debitis omnis in assumenda placeat consequuntur, exercitationem id labore? Doloremque, deserunt.</p>
      </div>
    </div>
  </div>
{{-- </div> --}}
@endsection
