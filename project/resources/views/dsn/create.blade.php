@extends('app')
@section('title')

    Tambah Data Dosen

@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-plus-square">
                </i> TAMBAH Dosen</h4><hr>
            <div class="row">
            	<div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <i class="fa fa-cogs"></i> MENU Dosen </a>
                        <a href="{{ asset('dosen') }}" class="list-group-item">
                            <i class="fa fa-refresh"></i> Tampilkan Semua</a>
                        <a href="{{url('/')}}" class="list-group-item">
                            <i class="fa fa-home"></i> Home</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! Form::open(array('url' => '/dosens')) !!}
                            <div class="form-group">
                                {!! Form::label('nip', 'NIP') !!}
                                {!! Form::text('nip',null, array('class' =>
                                'form-control','placeholder'=>'NIP')) !!}</div>
                            <div class="form-group">
                                {!! Form::label('nama', 'Nama Dosen') !!}
                                {!! Form::text('nama_dsn', null, array('class' =>
                                'form-control','placeholder'=>'Nama Dosen')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('alamat', 'Alamat Dosen') !!}
                                {!! Form::text('alamat_dsn', null, array('class' =>
                                'form-control','placeholder'=>'Alamat Dosen')) !!}
                            </div>
                            {!! Form::button('<i class="fa fa-plus-square"></i>'.
                            ' Simpan', array('type' => 'submit', 'class'
                            => 'btn btn-primary'))!!}
                            {!! Form::button('<i class="fa fa-times"></i>'.
                            ' Reset', array('type' => 'reset', 'class'
                            => 'btn btn-danger'))!!}
                            {!! Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection