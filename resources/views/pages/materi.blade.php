@extends('layouts.app')

@section('title', 'SIMPel - Jadwal Pelatihan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center container mt-5">
            <h1>Kumpulan Materi</h1>
        </div>
        <div class="input-group mt-5">
            <div class="input-group-btn search-panel">
                <a class="btn btn-default ">
                    <span id="search_concept"></span> <span class="caret"></span>
                </a>
          </div>
          <input type="hidden" name="search_param" value="all" id="search_param" >         
          <input type="text" class="form-control mr-2" name="x" placeholder="Pencarian">
          <span class="input-group-btn">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </span>

    
    <div class="container mt-5">
        <table class="table table-bordered">
          <thead>
            <tr class="text-center">
              <th scope="col" >Pelatihan</th>
              <th scope="col">Unduh Materi</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">Pelatihan 1</td >
          <td class="text-center"> <a href="">Download</a></td>
          
          
      </tr>
      <tr>
          <td scope="row">Pelatihan 2</td>
          <td class="text-center"><a href="">Download</a></td>
          
          
      </tr>
  </tbody>
</table>
</div>
    </div>
</div>
@endsection
