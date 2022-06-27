@extends('layouts.main_user')

@section('container')

<div style="width: 60%;margin: auto">

	{{-- Tampilan Berhasil Hapus Data --}}
	@if(session()->has('success_save'))
	<div class="alert alert-success alert-dismissable fade show" role="alert">
		{{ session('success_save') }}
	</div>
	@endif

	<div class="row">
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-primary">
			<img src="{{ asset('img/konsul.png') }}" width="80px" class="img-responsive" alt="Image">
			<form action="/user/konsultasi" method="POST" role="form">
				@csrf
				{{-- Hidden Input --}}
				<input type="hidden" name="kode_gejala" value="G{{ $code }}">

				<button type="submit" class="btn bg-transparent text-light"><h5 class="title">Konsul</h5></button>
			</form>
		</div>
	</div>
	<div class="mid row">
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-info ">
			<h2><i class="fa fa-list"></i></h2>

			<a href="/home/gejala" class="text-light"><h5 class="title">Data Gejala</h5></a>
		</div>
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-danger ">
			<img src="{{ asset('img/tentang.png') }}" width="70px" class="img-responsive" alt="Image">
			<a href="#tentang" data-toggle="modal" class="text-light"><h5 class="title">Tentang</h5></a>
		</div>
	</div>
	<div class="row">
		<div  style="margin: auto;" class="us-menu text-light p-4 bg-dark">
			<h3><i class="fa fa-cog"></i></h3>
			<a href="/home/penyakit" class="text-light"><h5 class="title">Data Penyakit</h5></a>
		</div>
	</div>
</div>

@endsection

