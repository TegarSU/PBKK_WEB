@extends('app')
@section('title')
    Data Dosen
@endsection
@section('content')
    <div class="panel panel-default">
        @if(Session::has('alert-success'))
            <div class="alert alert-success">
            {{ Session::get('alert-success') }}
            </div>
        @endif
        <div class="panel-body">
            <h4><i class="fa fa-university"></i> DAFTAR DOSEN</h4><hr>
            <div class=row>
                <div class="col-md-2">
                    <a href="{{route('dosen.create')}}" class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i> Tambah data Dosen</a>
                </div>
                <div
                    class="col-md-2">
                </div>
                <div
                    class="col-md-4">
                </div>
            </div>
            <br>
            @if(count($data))
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover table-condensed tfix">
                        <thead align="center">
                        <tr>
                            <td><b>NIP</b></td>
                            <td><b>Nama Dosen</b></td>
                            <td><b>Alamat Dosen</b></td>
                            <td colspan="2"><b>MENU</b></td>
                        </tr>
                        </thead>
                        @foreach($data as $m)
                            <tr>
                                <td>{{ $m->nip }}</td>
                                <td>{{ $m->nama_dsn }}</td>
                                <td>{{ $m->alamat }}</td>
                                <td align="center" width="30px">
                                    <a href="{{route('dosen.edit',$m->id)}}" class="btn btn-warning btn-sm"
                                       role="button"><i class="fa fa-pencil-square"></i> Edit</a>
                                </td>
                                <td align="center" width="30px">
                                    {!! Form::open(array('route' => array('dosen.destroy', $m->id),
                                    'method' => 'delete',
                                    'style' => 'display:inline')) !!}
                                    <button class='btn btn-sm btn-danger delete-btn' type='submit'>
                                        <i class='fa fa-times-circle'></i> Delete </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table></div>
            @else
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> Data Dosen tidak Ada
                </div>
            @endif
        </div></div>
@endsection