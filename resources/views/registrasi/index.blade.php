@extends('layout/main')

@section('title', 'Pos Indonesia - Pengajuan Pelatihan')
		
@section('container')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
        
        <h1 class="mt-3">Pengajuan Pelatihan</h1>
        
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

          <h3>Analisis Kebutuhan Pelatihan</h3>
          
          <div class="form-group row">
            <label for="uraian" class="col-sm-2 col-form-label">Uraian Tugas</label>
            <div class="col-9">
              <textarea class="form-control" name="uraian" id="uraian" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="kompetensi" class="col-sm-2 col-form-label">Kompetensi yang dibutuhkan</label>
            <div class="col-9">
              <textarea class="form-control" name="kompetensi" id="kompetensi" rows="3"></textarea>
            </div>
          </div>
          
          <hr>
          
          <div class="form-group row">
            <label for="FormControlTema" class="col-sm-2 col-form-label">Tema Pelatihan yang diusulkan</label>
            <div class="col-9">
              <textarea class="form-control" id="FormControlTema" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlSasaran" class="col-sm-2 col-form-label">Sasaran yang ingin dicapai</label>
            <div class="col-9">
              <textarea class="form-control" id="FormControlSasaran" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlTarget" class="col-sm-2 col-form-label">Target Peserta</label>
            <div class="col-9">
              <textarea class="form-control" id="exampleFormControlTarget" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlTempat" class="col-sm-2 col-form-label">Tempat Penyelenggaraan</label>
            <div class="col-9">
              <textarea class="form-control" id="FormControlTempat" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row date" data-provide="datepicker">
            <label for="FormControlTanggal" class="col-sm-2 col-form-label">Tanggal Penyelenggaraan</label>
            <div class="col-5">
              <input type="date" class="form-control" id="data-date">
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlJumlahPeserta" class="col-sm-2 col-form-label">Jumlah Peserta</label>
            <div class="col-5">
              <input class="form-control" id="FormControlJumlahPeserta" rows="3">
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlDurasi" class="col-sm-2 col-form-label">Durasi (Jam)</label>
            <div class="col-5">
              <input class="form-control" id="FormControlDurasi" rows="3">
            </div>
          </div>
          <h3>Estimasi Biaya</h3>
          <div class="form-group row">
            <label for="FormControlUangSaku" class="col-sm-2 col-form-label">Uang Saku</label>
            <div class="col-4">
              <input class="form-control" id="FormControlUangSaku" rows="3" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlUangFasilitator" class="col-sm-2 col-form-label">Uang Fasilitator</label>
            <div class="col-4">
              <input class="form-control" id="FormControlUangFasilitator" rows="3" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlNarasumber" class="col-sm-2 col-form-label">Narasumber Eksternal</label>
            <div class="col-4">
              <input class="form-control" id="FormControlNarasumber" rows="3">
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlAkomodasi" class="col-sm-2 col-form-label">Akomodasi</label>
            <div class="col-4">
              <input class="form-control" id="FormControlAkomodasi" rows="3">
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlJumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-4">
              <input class="form-control" id="FormControlJumlah" rows="3" readonly>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
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
              $('select[name="divisi"]').html('<option value="">-- pilih divisi --</option>');
              $('select[name="bagian"]').html('<option value="">-- pilih bagian --</option>');
              $.each(data, function(key, value){
                $('select[name="divisi"]').append('<option value="'+ key +'">' + value + '</option>');
              });
            }
          });
        }
        else
        {
          $('select[name="divisi"]').html('<option value="">-- pilih divisi --</option>');
          $('select[name="bagian"]').html('<option value="">-- pilih bagian --</option>');
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
              $('select[name="bagian"]').html('<option value="">-- pilih bagian --</option>');
              $.each(data, function(key, value){
                $('select[name="bagian"]').append('<option value="'+ key +'">' + value + '</option>');
              });
            }
          });
        }
        else
        {
          $('select[name="bagian"]').html('<option value="">-- pilih bagian --</option>');
        }
      });
    });
  </script>
@endsection