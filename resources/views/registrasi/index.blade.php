@extends('layout/main')

@section('title', 'Pos Indonesia - Registrasi')
		
@section('container')
	<div class="container">
		<div class="row">
			<div class="col-12">
        
        <h1 class="mt-3">Registrasi Pelatihan</h1>
        
        <form>
					<div class="form-group row">
						<label for="FormControlSelectDirektorat" class="col-sm-2 col-form-label">Direktorat</label>
            <div class="col-5">
              <select class="form-control" id="FormControlSelectDirektorat">
                <option>-- pilih direktorat --</option>
                <option>Kurir dan Logistik</option>
                <option>Jaringan dan Keuangan</option>
                <option>Komersial</option>
                <option>Hubungan Strategis dan Kelembagaan</option>
                <option>Keuangan dan Umum</option>
                <option>Sumber Daya Manusia</option>
              </select>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlSelectDivisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-5">
              <select class="form-control" id="FormControlSelectDivisi">
                <option>-- pilih divisi --</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlSelectBagian" class="col-sm-2 col-form-label">Bagian</label>
            <div class="col-5">
              <select class="form-control" id="FormControlSelectBagian">
                <option>-- pilih bagian --</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>

          <h3>Analisis Kebutuhan Pelatihan</h3>
          
          <div class="form-group row">
            <label for="FormControlUraian" class="col-sm-2 col-form-label">Uraian Tugas</label>
            <div class="col-10">
              <textarea class="form-control" id="FormControlUraian" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlKompetensi" class="col-sm-2 col-form-label">Kompetensi yang dibutuhkan</label>
            <div class="col-10">
              <textarea class="form-control" id="FormControlKompetensi" rows="3"></textarea>
            </div>
          </div>
          
          <hr>
          
          <div class="form-group row">
            <label for="FormControlTema" class="col-sm-2 col-form-label">Tema Pelatihan yang diusulkan</label>
            <div class="col-10">
              <textarea class="form-control" id="FormControlTema" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlSasaran" class="col-sm-2 col-form-label">Sasaran yang ingin dicapai</label>
            <div class="col-10">
              <textarea class="form-control" id="FormControlSasaran" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlTarget" class="col-sm-2 col-form-label">Target Peserta</label>
            <div class="col-10">
              <textarea class="form-control" id="exampleFormControlTarget" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="FormControlTempat" class="col-sm-2 col-form-label">Tempat Penyelenggaraan</label>
            <div class="col-10">
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
            <div class="col-5">
              <input class="form-control" id="FormControlUangSaku" rows="3" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlUangFasilitator" class="col-sm-2 col-form-label">Uang Fasilitator</label>
            <div class="col-5">
              <input class="form-control" id="FormControlUangFasilitator" rows="3" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlNarasumber" class="col-sm-2 col-form-label">Narasumber Eksternal</label>
            <div class="col-5">
              <input class="form-control" id="FormControlNarasumber" rows="3">
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlAkomodasi" class="col-sm-2 col-form-label">Akomodasi</label>
            <div class="col-5">
              <input class="form-control" id="FormControlAkomodasi" rows="3">
            </div>
          </div>
          <div class="form-group row">
            <label for="FormControlJumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-5">
              <input class="form-control" id="FormControlJumlah" rows="3" readonly>
            </div>
          </div>
				</form>
			</div>
		</div>
	</div>
@endsection