@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
 
<div class="panel panel-default">
    <div class="panel-heading">
                        <strong> Daftar Buku </strong>
                    </div>
                    <div class="panel-body">

		{!! Form::open(['url' => 'Admin/index', 'novalidate' => 'novalidate', 'files' => 'true']) !!}
		<div class="form-group">
			{!! Form::label('id', 'ID:') !!}
			{!! Form::text('id', null, ['class' => 'form-control', 'placeholder'=>'Automatis', 'disabled']) !!}
		</div>
				<div class="form-group">
				{!! Form::label('stok', 'Stok:') !!}
				{!! Form::text('stok', null, ['class' => 'form-control', 'placeholder'=>'Stok Buku']) !!}
				</div>
						<div class="form-group">
						{!! Form::label('Judul', 'Judul:') !!}
						{!! Form::text('Judul', null, ['class' => 'form-control', 'placeholder'=>'Judul Buku']) !!}
						</div>
								<div class="form-group">
								{!! Form::label('Penulis', 'Penulis:') !!}
								{!! Form::text('Penulis', null, ['class' => 'form-control', 'placeholder'=>'Penulis']) !!}
								</div>
										<div class="form-group">
										{!! Form::label('Penerbit', 'Penerbit:') !!}
										{!! Form::text('Penerbit', null, ['class' => 'form-control', 'placeholder'=>'Penerbit']) !!}
										</div>
								<div class="form-group">
								{!! Form::label('Deskripsi', 'Deskripsi:') !!}
								{!! Form::textarea('Deskripsi', null, ['class' => 'form-control', 'placeholder'=>'Deskripsi Buku...']) !!}
								</div>
						<div class="form-group">
						{!! Form::label('Banyak_halaman', 'Banyak Halaman:') !!}
						{!! Form::text('Banyak_halaman', null, ['class' => 'form-control', 'placeholder'=>'Jumlah Halaman']) !!}
						</div>
				<div class="form-group">
				{!! Form::label('Bahasa', 'Bahasa:') !!}
				{!! Form::select('Bahasa[]', $opsibahasa, null, ['id'=>'Bahasa_list', 'class'=>'form-control', 'multiple']) !!}
				</div>
		<div class="form-group">
		{!! Form::label('Genre', 'Genre:') !!}
		{!! Form::select('Genre[]', $opsigenre, null, ['id'=>'Genre_list', 'class' => 'form-control', 'multiple']) !!}
		</div>
		<div class="form-group">
		<div id="terbilang"></div>
		{!! Form::label('Harga', 'Harga:') !!}
		<div class="input-group">
		<span class="input-group-addon">Rp.</span>
		{!! Form::text('Harga', null, ['id' => 'nominal', 'class' => 'form-control', 'placeholder'=>'Harga', 'onkeyup' => 'terbilang()']) !!}
		</div>					
		</div>
		<div class="form-group">
		{!! Form::label('image', 'Gambar:') !!}
		{!! Form::file('image', null, ['class' => 'form-control']) !!}
		</div>
					<div class="row">
                    <div class="col-md-8">
					{!! Form::submit('Simpan', ['class' => 'btn btn-success btn-block']) !!}
                    </div>
                    <div class="col-md-4">
                    <a href="{{ url('Admin/index')}}" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-menu-left"></span> Kembali</a>
                    </div>
                    </div><br>
                    </div>
		{!! Form::close() !!}
	@if ($errors->any())
		<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<center><h1>Tolong Perikasa Inputan Anda !</h1></center>
			@foreach ($errors->all() as $error)
				<p><span class="glyphicon glyphicon-remove-sign"></span> {{ $error }}</p>
			@endforeach
		</div>
	@endif

<div class="panel-footer ">
                        
    </div>
  </div>
@stop

@section('footer')
<script type="text/javascript">
	$('#Bahasa_list').select2();
	$('#Genre_list').select2();
</script>
<script charset="utf-8" type="text/javascript">
function terbilang(){
    var bilangan=document.getElementById("nominal").value;
    var kalimat="";
    var angka   = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
    var kata    = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
    var tingkat = new Array('','Ribu','Juta','Milyar','Triliun');
    var panjang_bilangan = bilangan.length;
     
    /* pengujian panjang bilangan */
    if(panjang_bilangan > 15){
        kalimat = "Diluar Batas";
    }else{
        /* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
        for(i = 1; i <= panjang_bilangan; i++) {
            angka[i] = bilangan.substr(-(i),1);
        }
         
        var i = 1;
        var j = 0;
         
        /* mulai proses iterasi terhadap array angka */
        while(i <= panjang_bilangan){
            subkalimat = "";
            kata1 = "";
            kata2 = "";
            kata3 = "";
             
            /* untuk Ratusan */
            if(angka[i+2] != "0"){
                if(angka[i+2] == "1"){
                    kata1 = "Seratus";
                }else{
                    kata1 = kata[angka[i+2]] + " Ratus";
                }
            }
             
            /* untuk Puluhan atau Belasan */
            if(angka[i+1] != "0"){
                if(angka[i+1] == "1"){
                    if(angka[i] == "0"){
                        kata2 = "Sepuluh";
                    }else if(angka[i] == "1"){
                        kata2 = "Sebelas";
                    }else{
                        kata2 = kata[angka[i]] + " Belas";
                    }
                }else{
                    kata2 = kata[angka[i+1]] + " Puluh";
                }
            }
             
            /* untuk Satuan */
            if (angka[i] != "0"){
                if (angka[i+1] != "1"){
                    kata3 = kata[angka[i]];
                }
            }
             
            /* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
            if ((angka[i] != "0") || (angka[i+1] != "0") || (angka[i+2] != "0")){
                subkalimat = kata1+" "+kata2+" "+kata3+" "+tingkat[j]+" ";
            }
             
            /* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
            kalimat = subkalimat + kalimat;
            i = i + 3;
            j = j + 1;
        }
         
        /* mengganti Satu Ribu jadi Seribu jika diperlukan */
        if ((angka[5] == "0") && (angka[6] == "0")){
            kalimat = kalimat.replace("Satu Ribu","Seribu");
        }
    }
    document.getElementById("terbilang").innerHTML=kalimat;
}
</script>
@endsection