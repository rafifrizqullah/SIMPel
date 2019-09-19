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
              <select class="form-control" id="FormControlSelectDivisi">
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
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Uraian Tugas</label>
            <div class="col-10">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Kompetensi yang dibutuhkan</label>
            <div class="col-10">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Tema Pelatihan yang diusulkan</label>
            <div class="col-10">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Sasaran yang ingin dicapai</label>
            <div class="col-10">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Target Peserta</label>
            <div class="col-10">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
					</div>
					<div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Tema Penyelenggaraan</label>
            <div class="col-10">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group row date" data-provide="datepicker">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Tanggal Penyelenggaraan</label>
            <div class="col-5">
              <input type="date" class="form-control" id="data-date">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Jumlah Peserta</label>
            <div class="col-5">
              <input class="form-control" id="exampleFormControlTextarea1" rows="3">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Durasi (Jam)</label>
            <div class="col-5">
              <input class="form-control" id="exampleFormControlTextarea1" rows="3">
            </div>
          </div>
          <h3>Estimasi Biaya</h3>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Uang Saku</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Uang Fasilitator</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Narasumber Eksternal</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Akomodasi</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Jumlah</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>
          </div>
				</form>
			</div>
		</div>
	</div>
@endsection