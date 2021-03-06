@extends('app')
@section('title')

    Tambah Data Mata Kuliah

@endsection
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><i class="fa fa-plus-square">
                </i> TAMBAH Mata Kuliah</h4><hr>
            <div class="row"><div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <i class="fa fa-cogs"></i> MENU Mata Kuliah </a>
                        <a href="{{route('mata_kuliah.index')}}" class="list-group-item">
                            <i class="fa fa-refresh"></i> Tampilkan Semua</a>
                        <a href="{{url('/')}}" class="list-group-item">
                            <i class="fa fa-home"></i> Home</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            {!! Form::open(array('url' => '/matakuliahs')) !!}
                            <div class="form-group">
                                {!! Form::label('kode_mk', 'Kode MK') !!}
                                {!! Form::text('kode_mk',null, array('class' =>
                                'form-control','placeholder'=>'Kode MK')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('nama_matkul', 'Nama Mata Kuliah') !!}
                                {!! Form::text('nama_matkul', null, array('class' =>
                                'form-control','placeholder'=>'Nama Mata Kuliah')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('sks', 'Jumlah SKS') !!}
                                {!! Form::text('sks', null, array('class' =>
                                'form-control','placeholder'=>'Jumlah SKS')) !!}
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