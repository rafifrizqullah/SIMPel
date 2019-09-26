@extends('layout/main')

@section('title', 'Pos Indonesia - Pengajuan Pelatihan')
		
@section('container')
	<div class="container">
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

        <form action="registrasi/store" method="POST">
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
              <textarea class="form-control" id="sasaran" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="targetPeserta" class="col-sm-2 col-form-label">Target Peserta</label>
            <div class="col-9">
              <textarea class="form-control" id="targetPeserta" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="tempatPeyelenggaraan" class="col-sm-2 col-form-label">Tempat Penyelenggaraan</label>
            <div class="col-9">
              <textarea class="form-control" id="tempatPenyelenggaraan" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row date" data-provide="datepicker">
            <label for="tanggalPenyelenggaraan" class="col-sm-2 col-form-label">Tanggal Penyelenggaraan</label>
            <div class="col-5">
              <input type="date" class="form-control" id="tanggalPenyelenggaraan">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlahPeserta" class="col-sm-2 col-form-label">Jumlah Peserta</label>
            <div class="col-5">
              <input class="form-control" id="jumlahPeserta" rows="3" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="durasi" class="col-sm-2 col-form-label">Durasi (Jam)</label>
            <div class="col-5">
              <input class="form-control" id="durasi" rows="3" value="">
            </div>
          </div>
          <br>

          <h3>Estimasi Biaya</h3>
          
          <div class="form-group row">
            <label for="uangSaku" class="col-sm-2 col-form-label">Uang Saku</label>
            <div class="col-4">
              <input class="form-control" id="uangSaku" rows="3" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="uangFasilitator" class="col-sm-2 col-form-label">Uang Fasilitator</label>
            <div class="col-4">
              <input class="form-control" id="uangFasilitator" rows="3" value="" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="narasumber" class="col-sm-2 col-form-label">Narasumber Eksternal</label>
            <div class="col-4">
              <input class="form-control" id="narasumber" rows="3" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="akomodasi" class="col-sm-2 col-form-label">Akomodasi</label>
            <div class="col-4">
              <input class="form-control" id="akomodasi" rows="3" value="">
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
              <input type="file" class="form-control" id="fileProposal">
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
            url : '/registrasi/getdirektorat/' +idDirektorat,
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
            url : '/registrasi/getdivisi/' +idDivisi,
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
  </script>
@endsection