@extends('layouts.app')

@section('title', 'SIMPel - Jadwal Pelatihan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center container mt-5">
            <h1>Jadwal Pelatihan</h1>
        </div>
        <div class="input-group mt-5">
            <div class="input-group-btn search-panel">
                <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span id="search_concept">Filter by</span> <span class="caret"></span>
                </button> -->
                <!-- <ul class="dropdown-menu" role="menu">
                  <li><a href="#contains">Contains</a></li>
                  <li><a href="#its_equal">It's equal</a></li>
                  <li><a href="#greather_than">Greather than ></a></li>
                  <li><a href="#less_than">Less than < </a></li>
                  <li class="divider"></li>
                  <li><a href="#all">Anything</a></li>
              </ul> -->
          </div>
          <input type="hidden" name="search_param" value="all" id="search_param">         
          <input type="text" class="form-control" name="x" placeholder="Search term...">
          <span class="input-group-btn">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </span>

    </div>
    <div class="container mt-5">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Pelatihan</th>
              <th scope="col">Waktu</th>
              <th scope="col">Tempat</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Pengenalan</td>
          <td>08.40 - 10.20</td>
          <td>C201</td>
      </tr>
      <tr>
          <th scope="row">2</th>
          <td>Sistem Informasi</td>
          <td>09.40 - 11.40</td>
          <td>B201</td>
      </tr>
  </tbody>
</table>
</div>
    </div>
</div>
@endsection
