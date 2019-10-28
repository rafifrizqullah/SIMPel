@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10 mt-5">
			<form>
				<div class="form-group row">
    				<label for="direktorat" class="col-sm-2 col-form-label">Direktorat</label>
    				<div class="col-sm-10">
						<select class="form-control" name="job_title" id="direktorat">
							<option value="karyawan">Karyawan</option>
							<option value="operator">Operator</option>
							<option value="manajer">Manajer</option>
							<option value="svp">SVP</option>
							<option value="vp">VP</option>
							<option value="admin">Admin</option>
						</select>
					</div>
  				</div>
			
	  			<div class="form-group row">
	    			<label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
	    			<div class="col-sm-10">
						<select class="form-control" name="job_title" id="divisi">
							<option value="karyawan">Karyawan</option>
							<option value="operator">Operator</option>
							<option value="manajer">Manajer</option>
							<option value="svp">SVP</option>
							<option value="vp">VP</option>
							<option value="admin">Admin</option>
						</select>
					</div>
	  			</div>
			
				<div class="form-group row">
					<label for="bagian" class="col-sm-2 col-form-label">Bagian</label>
					<div class="col-sm-10">
						<select class="form-control" name="job_title" id="bagian">
							<option value="karyawan">Karyawan</option>
							<option value="operator">Operator</option>
							<option value="manajer">Manajer</option>
							<option value="svp">SVP</option>
							<option value="vp">VP</option>
							<option value="admin">Admin</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="namapelatihan" class="col-sm-2 col-form-label">Nama Pelatihan</label>
					<div class="col-sm-10">
						<input id="namapelatihan" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					</div>
				</div>

				<div class="form-group row">
					<label for="upload" class="col-sm-2 col-form-label">File Laporan</label>
					<div class="col-sm-10">
						<input id="upload" type="file" autofocus>
					</div>
				</div>

				<br>

				<div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
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
