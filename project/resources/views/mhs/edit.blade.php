@extends('app')
@section('title')
    Edit Mahasiswa
@endsection
@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <h4><i class="fa fa-check-square">
            </i> EDIT MAHASISWA</h4><hr>
        <div class="row">
        	<div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        <i class="fa fa-cogs"></i> MENU MAHASISWA
                    </a>
                    <a href="{{route('mahasiswa.index')}}" class="list-group-item">
                        <i class="fa fa-refresh"></i> Tampilkan Semua</a>
                    <a href="{{url('/')}}" class="list-group-item">
                        <i class="fa fa-home"></i> Home</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!!Form::model($m,['method'=>'PATCH','action'=>['mhsController@update',$m->id]]) !!}
                        <div class="form-group">
                            {!! Form::label('nrp', 'NRP') !!}
                            {!! Form::text('nrp',null, array('class' => 'form-control'
                            ,'placeholder'=>'NRP')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nama', 'Nama') !!}
                            {!! Form::text('nama', null, array('class' => 'form-control'
                            ,'placeholder'=>'Nama Mahasiswa')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('alamat', 'Alamat') !!}
                            {!! Form::text('alamat', null, array('class' => 'form-control'
                            ,'placeholder'=>'Alamat')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dosens_id', 'Dosen Wali') !!}
                            {!! Form::select('dosens_id', $doswal ,null ,array('class' => 'form-control')) !!}
                    	</div>
	                        {!! Form::button('<i class="fa fa-check-square"></i>'. ' Update', array('type' => 'submit', 'class' => 'btn btn-primary'))!!}
	                        {!! Form::close()!!}
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
</div>
@endsection