@extends('layouts.app')

@section('title', 'Pos Indonesia - Pengajuan Pelatihan')
		
@section('content')
	<div class="container submission-form">
		<div class="row">
			<div class="col-md-10">
        
        <h1 class="mt-3">Pengajuan Pelatihan</h1>
        <br>

        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="submission/store" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
						<label for="direktorat" class="col-sm-2 col-form-label">Direktorat</label>
            <div class="col-5">
              <select class="form-control" name="direktorat" id="direktorat">
                
                <option>-- pilih direktorat --</option>
                @foreach ($direktorat as $key => $value)
                  <option value="{{ $key }}">{{ $value }}</option>
                @endforeach

              </select>
            </div>
					</div>
					<div class="form-group row">
						<label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-5">
              <select class="form-control" name="divisi" id="divisi">
                
                <option>-- pilih divisi --</option>

              </select>
            </div>
					</div>
					<div class="form-group row">
						<label for="bagian" class="col-sm-2 col-form-label">Bagian</label>
            <div class="col-5">
              <select class="form-control" name="bagian" id="bagian">
                
                <option>-- pilih bagian --</option>

              </select>
            </div>
          </div>
          <br>

          <h3>Analisis Kebutuhan Pelatihan</h3>
          
          <div class="form-group row">
            <label for="uraianTugas" class="col-sm-2 col-form-label">Uraian Tugas</label>
            <div class="col-9">
              <textarea class="form-control" name="uraianTugas" id="uraianTugas" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="kompetensi" class="col-sm-2 col-form-label">Kompetensi yang dibutuhkan</label>
            <div class="col-9">
              <textarea class="form-control" name="kompetensi" id="kompetensi" rows="3"></textarea>
            </div>
          </div>
          
          <hr><br>
          
          <div class="form-group row">
            <label for="temaPelatihan" class="col-sm-2 col-form-label">Tema Pelatihan yang diusulkan</label>
            <div class="col-9">
              <textarea class="form-control" name="temaPelatihan" id="temaPelatihan" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="sasaran" class="col-sm-2 col-form-label">Sasaran yang ingin dicapai</label>
            <div class="col-9">
              <textarea class="form-control" name="sasaran" id="sasaran" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="targetPeserta" class="col-sm-2 col-form-label">Target Peserta</label>
            <div class="col-9">
              <textarea class="form-control" name="targetPeserta" id="targetPeserta" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="tempatPeyelenggaraan" class="col-sm-2 col-form-label">Tempat Penyelenggaraan</label>
            <div class="col-9">
              <textarea class="form-control" name="tempatPenyelenggaraan" id="tempatPenyelenggaraan" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row date" data-provide="datepicker">
            <label for="tanggalPenyelenggaraan" class="col-sm-2 col-form-label">Tanggal Penyelenggaraan</label>
            <div class="col-5">
              <input type="date" class="form-control" name="tanggalPenyelenggaraan" id="tanggalPenyelenggaraan">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlahPeserta" class="col-sm-2 col-form-label">Jumlah Peserta</label>
            <div class="col-5">
              <input class="form-control" name="jumlahPeserta" id="jumlahPeserta" rows="3" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="durasi" class="col-sm-2 col-form-label">Durasi (Jam)</label>
            <div class="col-5">
              <input class="form-control" id="durasi" rows="3" value="">
            </div>
          </div>
          <hr><br>

          <h3>Estimasi Biaya</h3>
          
          <div class="form-group row">
            <label for="uangSaku" class="col-sm-2 col-form-label">Uang Saku</label>
            <div class="col-4">
              <input type="text" class="form-control" name="uangSaku" id="uangSaku" rows="3" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="uangFasilitator" class="col-sm-2 col-form-label">Uang Fasilitator</label>
            <div class="col-4">
              <input type="text" class="form-control" id="uangFasilitator" rows="3" value="" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="narasumber" class="col-sm-2 col-form-label">Narasumber Eksternal</label>
            <div class="col-4">
              <input class="form-control" name="narasumber" id="narasumber" rows="3" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="konsumsi" class="col-sm-2 col-form-label">Konsumsi</label>
            <div class="col-4">
              <input class="form-control" name="konsumsi" id="konsumsi" rows="3" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="akomodasi" class="col-sm-2 col-form-label">Akomodasi</label>
            <div class="col-4">
              <input class="form-control" name="akomodasi" id="akomodasi" rows="3" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-4">
              <input class="form-control" id="jumlah" rows="3" value="" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="fileProposal" class="col-sm-2 col-form-label">File Proposal</label>
            <div class="col-sm-4">
              <input type="file" class="form-control" name="fileProposal" id="fileProposal">
            </div>
          </div>
          <button type="submit" class="btn btn-success">Kirim</button>
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
            url : '/submission/getdirektorat/' +idDirektorat,
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
            url : '/submission/getdivisi/' +idDivisi,
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
        $('#narasumber').val(convertToRupiah(uang));
      }else {
        $('#narasumber').empty();
      }
    });
    $('#konsumsi').on('change', function() {
      var uang = $(this).val();
      if (uang) {
        console.log(uang);
        $('#konsumsi').val(convertToRupiah(uang));
      }else {
        $('#konsumsi').empty();
      }
    });
    $('#akomodasi').on('change', function() {
      var uang = $(this).val();
      if (uang) {
        console.log(uang);
        $('#akomodasi').val(convertToRupiah(uang));
      }else {
        $('#akomodasi').empty();
      }
    });

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