@extends('layouts.main_user')

@section('container')

<div style="width: 60%;margin: auto">
	<div class="row">
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-primary">
			<img src="{{ asset('img/konsul.png') }}" width="80px" class="img-responsive" alt="Image">
			<a href="?hal=konsultasi&kode=G01" class="text-light"><h5 class="title">Konsultasi</h5></a>
		</div>
	</div>
	<div class="mid row">
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-info ">
			<h2><i class="fa fa-list"></i></h2>

			<a href="?hal=dataGejala" class="text-light"><h5 class="title">Data Gejala</h5></a>
		</div>
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-danger ">
			<img src="{{ asset('img/tentang.png') }}" width="70px" class="img-responsive" alt="Image">
			<a href="#tentang" data-toggle="modal" class="text-light"><h5 class="title">Tentang</h5></a>
		</div>
	</div>
	<div class="row">
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-dark">
			<h3><i class="fa fa-cog"></i></h3>
			<a href="?hal=dataPenyakit"class="text-light"><h5 class="title">Data Penyakit</h5></a>
		</div>
	</div>
</div>

@endsection

