@extends('layouts.app')
@section('content')
@include('layouts.navbar')
<div class="container">	
	<div class="row">
		<div class="col-md-12">
			<h3>Tabel Mahasiswa Edit</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('mahasiswa.update', $m->id)}}" method="post">
						<input name="_method" type="hidden" value="PATCH">
			 			{{csrf_field()}}
			 			<label for="nrp">NRP</label>
			 			<div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
			 				<input type="text" name="nrp" class="form-control" placeholder="Nrp" value="{{$m->nrp}}">
			 					{!! $errors->first('nrp', '<p class="help-block">:message</p>') !!}
			 			</div>
			 			<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
			 				<label for="nama">Nama</label>
			 				<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$m->nama}}">
			 					{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
			 			</div>
			 			<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
			 				<label for="alamat">Alamat</label>
			 				<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$m->alamat}}">
			 					{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
			 			</div>
			 			{{-- <div>
			 				<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{$m->alamat}}">
			 					{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
			 			</div> --}}
			 			<div class="form-group">
			 				<label for="doswal">Dosen Wali</label>
                            <select class="form-control" id="doswal" name="doswal">
                                {{-- <option value="0">Pilih Kategori Utama</option> --}}
                                @foreach($doswal as $d)
                                    {{-- @if(is_null($d->nama)) --}}
                                    <option hidden="">{{$m->dosen->nama}}</option>
                                    <option placeholder="Dosen Wali" value="{{$d->id}}">{{ $d->nama }}</option>

                                    {{-- @endif --}}
                                @endforeach
                            </select>
                            {{-- @if ($errors->has('KAT_nama'))
                                <span class="help-block">
                                    <strong>Whoops! {{ $errors->first('KAT_nama') }}</strong>
                                </span>
                            @endif --}}
                        </div>
 						<div class="form-group"> 
 							<input type="submit" class="btn btn-primary" value="Simpan">
 						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

 
