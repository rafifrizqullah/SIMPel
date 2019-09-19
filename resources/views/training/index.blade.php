@extends('layout/main')

@section('title', 'Pos Indonesia - Informasi Pelatihan')
		
@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                <h1 class="mt-3">Daftar Training</h1>
                
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Training</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($training as $training)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{  $training -> nama }}</td>
                            <td>{{  $training -> nip }}</td>
                            <td>{{  $training -> email }}</td>
                            <td>{{  $training -> training }}</td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>
	</div>
@endsection