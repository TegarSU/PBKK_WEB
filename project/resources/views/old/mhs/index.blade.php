@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Tabel Mahasiswa</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
						{{ Session::get('alert-success') }}
						</div>
					@endif
					<a href="{{route('mahasiswa.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
						<tr>
							<th class="text-center align-middle" style="width: 10">NO</th>
							{{-- <th>NRP</th> --}}
							<th class="text-center align-middle" style="width: 80">Nama</th>
							{{-- <th>Alamat</th> --}}
							<th class="text-right align-middle" style="width: 10">Action</th>
						</tr>
						<td class="text-center align-middle" style="width: 10"><?php $no=1; ?></td>
						
						@foreach($data as $m)
						<tr>
							<td class="text-center align-middle" style="width: 10">{{$no++}}</td>
							{{-- <td>{{$m->nrp}}</td> --}}
							<td class="text-center align-middle" style="width: 80">{{$m->nama}}</td>
							{{-- <td>{{$m->alamat}}</td> --}}
							<td class="text-right align-middle" style="width: 10">
								<div>
									<button type="button" class="btn btn-primary" data-toggle="tooltip" title="Edit" onclick="window.location.href='{{ route('mahasiswa.edit',$m->id) }}'">Edit
			                            
			                        </button>
			                        <button class="btn btn-success"  onclick="window.location.href='{{ route('mahasiswa.show',$m->id) }}'">Detail
								   	
		                            </button>
			                        <button type="button" class="btn btn-danger" data-toggle="tooltip" title="Hapus" onclick="window.location.href='{{ route('mahasiswa.destroy',$m->id) }}'">Hapus
			                            
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
