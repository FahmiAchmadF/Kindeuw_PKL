@extends('Kindeuw.Administrator.Admin')
@section('kontensatu')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-3.col-lg-offset-4 col-xs-6">
              
              <div class="small-box bg-aqua">
                <div class="inner">
                <p>TOTAL BUKU YANG TERSEDIA</p>
                  <h3>{{ $count }}</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-book white"></i>
                </div>
                <a href="{{ url('Admin/index')}}" class="small-box-footer">Lihat List <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3.col-lg-offset-4 col-xs-6">
              
              <div class="small-box bg-aqua">
                <div class="inner">
                <p>TOTAL TRANSAKSI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
                  <h3>{{ $counttransaksi }}</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart white"></i>
                </div>
                <a href="{{ url('Admin/list/transaksi')}}" class="small-box-footer">Lihat List <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
</div>
</div>
</div>

@stop