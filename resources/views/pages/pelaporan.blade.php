@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 mt-5 justify-content-center text">
			<form action="/pelaporan" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row justify-content-center">
			<label for="direktorat" class="col-sm-2 col-form-label">Direktorat</label>
            <div class="col-sm-5">
              <select class="form-control" name="direktorat" id="direktorat">
                
                <option>-- pilih direktorat --</option>
                @foreach ($direktorat as $key => $value)
                  <option value="{{ $key }}">{{ $value }}</option>
                @endforeach

              </select>
            </div>
					</div>
					<div class="form-group row justify-content-center">
						<label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-5">
              <select class="form-control" name="divisi" id="divisi">
                
                <option>-- pilih divisi --</option>

              </select>
            </div>
					</div>
					<div class="form-group row justify-content-center">
						<label for="bagian" class="col-sm-2 col-form-label">Bagian</label>
            <div class="col-sm-5">
              <select class="form-control" name="bagian" id="bagian">
                
                <option>-- pilih bagian --</option>

              </select>
            </div>
          </div>

				<div class="form-group row justify-content-center">
					<label for="namapelatihan" class="col-sm-2 col-form-label">Nama Pelatihan</label>
					<div class="col-sm-5">
						<input id="namapelatihan" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<label for="upload" class="col-sm-2 col-form-label ">File Laporan</label>
					<div class="col-sm-5">
						<input id="upload" type="file" autofocus>
					</div>
				</div>


				<br>

				<div class="form-group row mb-0 justify-content-center">
                    <div class="col-md-6 offset-md-4 ">
                    	<a href="terkirim.blade.php">
                        	<button type="submit" class="btn btn-primary">Submit</button>
                        </a>
                    </div>
                </div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">

    $(document).ready(function()
    {
      $('select[name="direktorat"]').on('change', function(){
        var idDirektorat = $(this).val();
        if (idDirektorat) {
          $.ajax({
            url : '/pelaporan/getdirektorat/' +idDirektorat,
            type : "GET",
            dataType : "json",
            success:function(data)
            {
              console.log(data);
              if (data) {
                $('#divisi').empty();
                $('#divisi').focus;
                $('#divisi').append('<option value="">-- pilih divisi --</option>');
                $.each(data, function(key, value) {
                  $('select[name="divisi"]').append('<option value="'+ key +'">' + value + '</option>'); 
                });
              } else {
                $('#divisi').empty();
              }
            }
          });
        }
        else
        {
          $('#divisi').empty();
        }
      });
      $('select[name="divisi"]').on('change', function(){
        var idDivisi = $(this).val();
        if (idDivisi) {
          $.ajax({
            url : '/pelaporan/getdivisi/' +idDivisi,
            type : "GET",
            dataType : "json",
            success:function(data)
            {
              console.log(data);
              if (data) {
                $('#bagian').empty();
                $('#bagian').focus;
                $('#bagian').append('<option value="">-- pilih bagian --</option>');
                $.each(data, function(key, value) {
                  $('select[name="bagian"]').append('<option value="'+ key +'">' + value + '</option>');
                });
              } else {
                $('#bagian').empty();
              }
            }
          });
        }
        else
        {
          $('#bagian').empty();
        }
      });
    });

    $('#jumlahPeserta').on('change', function() {
      var uang = $(this).val() * 100000;
      if (uang) {
        console.log(uang);
        $('#uangSaku').val(convertToRupiah(uang));
      }else {
        $('#uangSaku').empty();
      }
    });
    
    $('#durasi').on('change', function() {
      var uang = $(this).val() * 75000;
      if (uang) {
        console.log(uang);
        $('#uangFasilitator').val(convertToRupiah(uang));
      }else {
        $('#uangFasilitator').empty();
      }
    });

    $('#narasumber').on('change', function() {
      var uang = $(this).val();
      if (uang) {
        console.log(uang);
        $('#jumlah').val(total(uang));
        $('#narasumber').val(convertToRupiah(uang));
      }else {
        $('#narasumber').empty();
      }
    });
    $('#konsumsi').on('change', function() {
      var uang = $(this).val();
      if (uang) {
        console.log(uang);
        $('#jumlah').val(total(uang));
        $('#konsumsi').val(convertToRupiah(uang));
      }else {
        $('#konsumsi').empty();
      }
    });
    $('#akomodasi').on('change', function() {
      var uang = $(this).val();
      if (uang) {
        console.log(uang);
        $('#jumlah').val(total(uang));
        $('#akomodasi').val(convertToRupiah(uang));
      }else {
        $('#akomodasi').empty();
      }
    });

    function total(uang){
      var jumlah = $('#jumlah').val();
      if (jumlah) {
        var jumlah = convertToAngka(jumlah);
      }
      var total = +uang + +jumlah;
      var total = convertToRupiah(total);
      return total;
    }

    /**
    * JavaScript Code Snippet
    * Convert Number to Rupiah & vice versa
    * https://gist.github.com/845309
    *
    * Copyright 2011-2012, Faisalman
    * Licensed under The MIT License
    * http://www.opensource.org/licenses/mit-license  
    *
    */
    function convertToRupiah(angka)
    {
      var rupiah = '';		
      var angkarev = angka.toString().split('').reverse().join('');
      for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
      return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('')+',-';
    }

    function convertToAngka(rupiah)
    {
      return parseInt(rupiah.replace(/,.*|[^0-9]/g, ''), 10);
    }

  </script>
@endsection
