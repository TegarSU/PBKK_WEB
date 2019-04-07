@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Tabel Mata Kuliah</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
						{{ Session::get('alert-success') }}
						</div>
					@endif
					<a href="{{route('mata_kuliah.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th>NO</th>
							<th>KODE</th>
							<th>Nama</th>
							{{-- <th>Alamat</th> --}}
							<th>Action</th>
						</tr>
						<?php $no=1; ?>
						@foreach($data as $m)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$m->kode}}</td>
							<td>{{$m->nama}}</td>
							{{-- <td>{{$m->alamat}}</td> --}}
							<td>
								<div>
									<button type="button" class="btn btn-primary" data-toggle="tooltip" title="Detail" onclick="window.location.href='{{ route('mata_kuliah.edit',$m->id) }}'">Edit
			                            
			                        </button>
			                        <button type="button" class="btn btn-danger" data-toggle="tooltip" title="Detail" onclick="window.location.href='{{ route('mata_kuliah.destroy',$m->id) }}'">Hapus
			                            
			                        </button>
			                        <button class="btn btn-success"  onclick="window.location.href='{{ route('mata_kuliah.show',$m->id) }}'">Detail
								   	
		                            </button>

								</div>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
