@extends('Kindeuw.App')
@section('kontensatu')
<div class="container"></div>
<div class="form-group">
<h1>Hasil Pencarian Untuk "{{ $searchterm }}"</h1>
            <center>
                <h1>Tidak Ditemukan :'(</h1>
            </center>
</div>
<div class="form-group">
            <a href="{{ url('Kindeuw')  }}" class="btn btn-primary">Kembali</a>
</div>
@stop