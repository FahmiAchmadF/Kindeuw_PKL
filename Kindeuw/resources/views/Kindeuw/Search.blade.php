@extends('Kindeuw.App')
@section('kontensatu')

    <div class="container-fluid">
    <h1>Hasil Pencarian Untuk "{{ $searchterm }}"</h1>
        @foreach($results as $result)
            <div class="form-group">
            <h5>ID Buku :<a href="{{ url('Kindeuw', $result->id) }}">{{ $result->id }}</a></h5>
            <h5>Judul Buku :<h4><a href="{{ url('Kindeuw', $result->id) }}">{{ $result->Judul }}</a> </h4></h5>
                <hr/>
            </div>
        @endforeach
        <div class="form-group">
            <a href="{{ url('Kindeuw')  }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>


    @stop