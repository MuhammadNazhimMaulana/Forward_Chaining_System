@extends('layouts.main')

@section('container')

<div style="padding:20px;background: white;">
    <h3 class="text-left text-primary"><i class="fa fa-list"></i> TABEL RULE</h3><hr>
    <hr>
        <div class="tittle">
            <a class="btn btn-outline-primary" href="#tambah_rule" data-toggle='modal' role="button">Tambah Rule</a>
        </div>
    <hr>
    <table class="table table-hover table-bordered">
        <thead class="text-light bg-primary">
            <tr>
                <th>Nomor</th>
                <th>Kode Gejala</th>
                <th>Jika Ya</th>
                <th>Jika Tidak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Kode</td>
                <td>Ya</td>
                <td>Tidak</td>
                <td>
                    <a class="btn btn-success" data-toggle="modal" href="#hapus" >
                        <i class="fa fa-trash"></i>
                    </a>

                    <a class="btn btn-primary" data-toggle="modal" href="#edit_" role="button">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>

        <div class="modal fade" id="hapus">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6>Konfirmasi Hapus</h6>
                    </div>
                    <div class="modal-body">
                        <h5>Apakah Anda Yakin Akan Menghapus Data</h5>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-outline-danger" >Ya</a>
                        <button type="button" class="btn btn-outline-success" data-dismiss="modal" >Tidak</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit_">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
            <form action="#" method="POST" enctype="multipart/form-data">	
                <div class="form-group">
                    <input type="hidden" value="" name="id_rule" readonly>
                    <label for=""><i class="fa fa-code"></i> Kode Gejala</label>
                    <select name="gejala" class="form-control">
                        <option value=""></option>
                    </select>
                </div>	
                <div class="form-group">
                    <label for=""><i class="fa fa-link"></i> Link Jika Ya / Tidak</label>
                    <select name="ya" class="form-control">
                        <option value=""></option>
                    </select>
                </div>	
                <div class="form-group">
                    <label for=""><i class="fa fa-link"></i> Link Jika Ya / Tidak</label>
                    <select name="tidak" class="form-control">
                        <option value=""></option>
                        <option value="-">-</option>
                    </select>
                </div>		
            
                <button type="submit" class="btn btn-outline-success">Simpan</button>
                <button data-dismiss="modal" class="btn btn-outline-danger">Batal</button>
            </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        </tbody>
    </table>	
</div>

<!-- tambah rule -->
<div class="modal fade" id="tambah_rule">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Rule</h4>
			</div>
			<div class="modal-body">
				<form action="/home/rule" method="POST" enctype="multipart/form-data">
                    @csrf	
					<div class="form-group">
						<label for=""><i class="fa fa-code"></i> Kode Gejala</label>
						<select name="kode_gejala" class="form-control">
							<option>--Pilih Kode Gejala</option>

                            {{-- Getting Code Of Symptoms --}}
							@foreach ($symptoms as $data)
							<option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}</option>
							@endforeach

						</select>
					</div>	
					<div class="form-group">
						<label for=""><i class="fa fa-link"></i> Link Jika Ya / Tidak</label>
						<select name="jika_ya" class="form-control">
							<option>--Link Jika Ya</option>

                            {{-- Getting Code Of Symptoms --}}
							@foreach ($symptoms as $data)
							<option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}</option>
							@endforeach
                            
                            {{-- Getting Code Of Illness --}}
							@foreach ($illness as $penyakit)
							<option value="{{ $penyakit->kode_penyakit }}">{{ $penyakit->kode_penyakit }}</option>
							@endforeach
						</select>
					</div>	
					<div class="form-group">
						<label for=""><i class="fa fa-link"></i> Link Jika Ya / Tidak</label>
						<select name="jika_tidak" class="form-control">
							<option>--Link Jika Tidak</option>
							<option value="-">-</option>

                            {{-- Getting Code Of Symptoms --}}
							@foreach ($symptoms as $data)
							<option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}</option>
							@endforeach

                            {{-- Getting Code Of Illness --}}
							@foreach ($illness as $penyakit)
							<option value="{{ $penyakit->kode_penyakit }}">{{ $penyakit->kode_penyakit }}</option>
							@endforeach
						</select>
					</div>		
				
					<button type="submit" class="btn btn-outline-success">Simpan</button>
					<button data-dismiss="modal" class="btn btn-outline-danger">Batal</button>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

@endsection

