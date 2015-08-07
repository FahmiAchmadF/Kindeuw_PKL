@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')

    <div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
    <h1>Hasil Pencarian Untuk "{{ $searchterm }}"</h1>
        @foreach($results as $result)
            <div class="form-group">
            <h5>ID Buku :<a href="{{ url('Admin', $result->id) }}">{{ $result->id }}</a></h5>
            <h5>Judul Buku :<a href="{{ url('Admin', $result->id) }}">{{ $result->Judul }}</a> </h5>
            <hr>
        @endforeach
                <hr/>
            </div>
        <div class="form-group">
            <a href="{{ url('Admin/index')  }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>


    @stop