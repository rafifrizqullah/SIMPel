@extends('layouts.app')

@section('title', 'Pos Indonesia - Home')

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
      <h1 class="display-5">Pelatihan yang akan datang:</h1>
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
{{-- </div> --}}
@endsection