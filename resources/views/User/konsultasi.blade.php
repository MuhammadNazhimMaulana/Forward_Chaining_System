@extends('layouts.main_user')

@section('container')

<div style="width: 60%;margin: auto">
	<div class="row">
		<div class="col-lg-10 bg-white">

				<legend>Mulai Konsultasi</legend>
				<hr>
				<div>
					<img width="280px" src="{{ asset('storage/'.$symptom->gambar_gejala) }}">
					
				</div>
				<hr>
				<div class="form-group">
					<h2>{{ $symptom->nama_gejala }}</h2>
				</div>	
				<hr>

                <form action="/user/konsultasi" method="POST" role="form" style="display: inline">
                    @csrf
                    {{-- Hidden Input --}}
                    <input type="hidden" name="kode_gejala" value="{{ $symptom->kode_gejala }}">
                    <input type="hidden" name="jika_tidak" value="true">
    
                    <button type="submit" class="btn btn-lg btn-danger"><i class="fa fa-times-circle"></i>  Tidak</button>
                </form>

                <form action="/user/konsultasi" method="POST" role="form" style="display: inline">
                    @csrf
                    {{-- Hidden Input --}}
                    <input type="hidden" name="kode_gejala" value="{{ $symptom->kode_gejala }}">
                    <input type="hidden" name="jika_ya" value="true">
    
                    <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-check-circle"></i> Ya</button>
                </form>
		</div>
	</div>
</div>

@endsection

