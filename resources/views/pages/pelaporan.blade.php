@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 mt-5">
				<form>
 <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Direktorat</label>
    <div class="col-sm-10">
      <input type="input" class="form-control" id="inputPassword" placeholder="">
    </div>
  </div>
</form>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Divisi</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="">
    </div>
  </div>
</form>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Direktorat</label>
						<div class="col-sm-10">
							<select class="form-control" name="job_title" id="job_title">
								<option value="karyawan">Karyawan</option>
								<option value="operator">Operator</option>
								<option value="manajer">Manajer</option>
								<option value="svp">SVP</option>
								<option value="vp">VP</option>
								<option value="admin">Admin</option>
							</select>
						</div>
				</div>
			</div>
		</div>
	</div>
@endsection
