@extends('layouts.main_user')

@section('container')
<div style="width: 70%;margin: auto">
	<div class="row">
		<div class="col-lg-11 bg-light">
				<legend>Hasil Konsultasi Anda</legend>
				<hr>
				<div class="row">
					<div class="col-lg-6">
						<img width="280px" src="{{ asset('storage/'.$illness->gambar_penyakit) }}">					
						
					</div>
					<div class="col-lg-6">
						<h6>Tanaman Jagung Anda Mengalami : </h6>
						<h2>{{ $illness->nama_penyakit }}</h2>
						<h6>Di Sebabkan Oleh <strong>{{ $illness->penyebab_penyakit }}</strong> </h6>
						<hr>
						<div>
							Solusi : <br>

                        {{ $illness->solusi_penyakit }}	
						</div>
					</div>	
				</div>
				<hr>
				<a class="btn btn-lg btn-outline-success" href="#simpanKonsul" data-toggle="modal"><i class="fa fa-check-circle"></i>  Simpan Hasil</a	>
				<a class="btn btn-lg btn-outline-primary" href="/user/home"><i class="fa fa-check-circle"></i> Beranda</a	>
				<hr>

            <div class="modal fade" id="simpanKonsul">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Simpan Hasil Konsultasi</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <legend>Masukkan Nama Anda</legend>
                                <hr>
                                <div class="form-group">
                                    <input type="hidden" value="" name="kode_penyakit">
                                    <input type="hidden" value="" name="nama_penyakit">
                                    <input type="hidden" value="" name="penyebab_penyakit">
                                    <input type="hidden" value="" name="solusi_penyakit">
                                    <label for=""><i class="fa fa-users"></i> Nama</label>
                                    <input type="text" class="form-control" name="pengguna">

                                </div>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                                <button data-dismiss="modal" class="btn btn-outline-danger">Batal</button>
                            </form>
                        </div>
                        <div class="modal-footer"> 
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

@endsection

