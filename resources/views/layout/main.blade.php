<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://www.posindonesia.co.id/vendor/select2/select2.min.css"> 
    <link rel="stylesheet" href="https://www.posindonesia.co.id/vendor/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>@yield('title')</title>
    <link rel="icon" href="https://www.posindonesia.co.id/./img/favicon.png" />
  </head>
  <body>

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
            <a class="nav-link" href="{{ url('/registrasi') }}">Registrasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/berita') }}">Aktivitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">Tentang Pos</a>
          </li>
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
    
    @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>