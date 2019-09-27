<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://www.posindonesia.co.id/./img/favicon.png" />
    
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <a class="navbar-brand" href="/">
          <img src="https://www.posindonesia.co.id/img/logo-pos.svg" alt="Logo Pos Indonesia">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/info-pelatihan') }}">Informasi Pelatihan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/submission') }}">Pengajuan Pelatihan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('#') }}">Aktivitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">Tentang Pos</a>
            </li>
          </ul>
          <a class="btn" id="btn-masuk" href="#">Masuk</a>
          <form class="form-inline my-2 my-lg-0 search-form" method="GET" action="#">
            <div class="inner-addon left-addon">
                {{-- <i class="fa fa-search"></i> --}}
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Cari" aria-label="Search">
            </div>            
          </form>
          {{-- <ul class="navbar-nav flag">
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
          </ul> --}}
        </div>
      </nav>
      
      @yield('container')
  
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
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwsObmp3nGQpl5ASYrUzeIWheWa0mKQKI&callback=initMap"></script>

    @yield('scripts')

  </body>
</html>