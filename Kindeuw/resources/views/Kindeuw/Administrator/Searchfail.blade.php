@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
<div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
<div class="form-group">
<h1>Hasil Pencarian Untuk "{{ $searchterm }}"</h1>
            <center>
                <h1>Tidak Ditemukan :'(</h1>
            </center>
</div>
<div class="form-group">
            <a href="{{ url('Admin/index')  }}" class="btn btn-primary">Kembali</a>
</div>
</div>
@stop