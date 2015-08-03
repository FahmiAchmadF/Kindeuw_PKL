@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
  <div class="col-lg-10 col-xs-10 col-lg-offset-2 col-xs-offset-2">
       {!! Form::open(['url' => ['Admin/ubah/lagi',$edit], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
       <div class="form-group">
           <label for="id">ID</label>
           <input type="text" class="form-control" id="id" value="{{$edit->id}}" readonly>
       </div>
              <div class="form-group">
                {!! Form::label('stok', 'Stok:') !!}
                {!! Form::text('stok', $edit->stok , ['class' => 'form-control']) !!}
              </div>
                     <div class="form-group">
                      {!! Form::label('Judul', 'Judul:') !!}
                      {!! Form::text('Judul', $edit->Judul , ['class' => 'form-control']) !!}
                     </div>
                           <div class="form-group">
                            {!! Form::label('Penulis', 'Penulis:') !!}
                            {!! Form::text('Penulis', $edit->Penulis , ['class' => 'form-control']) !!}
                          </div>
                                <div class="form-group">
                                 {!! Form::label('Penerbit', 'Penerbit:') !!}
                                 {!! Form::text('Penerbit', $edit->Penerbit , ['class' => 'form-control']) !!}
                                </div>
                                       <div class="form-group">
                                          {!! Form::label('Deskripsi', 'Deskripsi:') !!}
                                          {!! Form::textarea('Deskripsi', $edit->Deskripsi , ['class' => 'form-control']) !!}
                                        </div>
                                <div class="form-group">
                                {!! Form::label('Banyak_halaman', 'Banyak Halaman:') !!}
                                {!! Form::text('Banyak_halaman', $edit->Banyak_halaman , ['class' => 'form-control']) !!}
                                </div>
                          <div class="form-group">
                          {!! Form::label('Bahasa', 'Bahasa:') !!}
                          {!! Form::select('Bahasa', $opsibahasa, $edit->Bahasa, ['class' => 'form-control']) !!}
                          </div>
                      <div class="form-group">
                      {!! Form::label('Genre', 'Genre:') !!}
                      {!! Form::select('Genre', $opsigenre, $edit->Genre, ['class' => 'form-control']) !!}
                      </div>
              <div class="form-group">
              {!! Form::label('Harga', 'Harga:') !!}
              <div class="input-group">
              <span class="input-group-addon">Rp.</span>
              {!! Form::text('Harga', $edit->Harga , ['class' => 'form-control']) !!}
              </div>
              </div>
      <div class="fotm-group">
      {!! Form::label('image', 'Gambar:') !!}
      {!! Form::file('image', null, ['class' => 'form-control']) !!}
      </div><br>

       <div class="col-sm-8">
           {!! Form::submit('Simpan', ['class' => 'btn btn-success btn-block']) !!}
       </div>

       <div class="col-sm-4">
           <a href="{{ url('Admin/index')  }}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
       </div>
  
       {!! Form::close() !!}
  </div>
@stop