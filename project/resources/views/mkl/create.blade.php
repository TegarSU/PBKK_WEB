@extends('layouts.app')
@section('content')
@include('layouts.navbar')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Akademik:Tabel Mata Kuliah</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('mata_kuliah.store')}}" method="post">
 						{{csrf_field()}}
 						<div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
 							<input type="text" name="kode" class="form-control" placeholder="Kode">
 								{!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
 						</div>
 						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
 							<input type="text" name="nama" class="form-control" placeholder="Nama">
 							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
 						</div>
 						{{-- <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
 							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
 							{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
 						</div> --}}
 						<div class="form-group"> 
 							<input type="submit" class="btn btn-primary" value="Simpan"></div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
@endsection
