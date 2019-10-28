@extends('layouts.app')

@section('title', 'Pos Indonesia - Lokasi Kantor Regional')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="mt-5">Lokasi Kantor Regional</h1>
				<div style="width: 1100px; height: 400px;">
					{!! Mapper::render() !!}
				</div>
			</div>
		</div>
	</div>
@endsection