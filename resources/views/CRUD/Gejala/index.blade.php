@extends('layouts.main')

@section('container')

<div style="padding:20px;background: white;">
		<h3 class="text-left text-primary"><i class="fa fa-list"></i> TABEL GEJALA</h3><hr>

        {{-- Tampilan Berhasil Delete Data --}}
        @if(session()->has('danger'))
        <div class="alert alert-danger alert-dismissable fade show" role="alert">
            {{ session('danger') }}
        </div>
        @endif

        {{-- Tampilan Berhasil Update Data --}}
        @if(session()->has('success_update'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            {{ session('success_update') }}
        </div>
        @endif

        {{-- Tampilan Berhasil Tambah Data --}}
        @if(session()->has('success_create'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            {{ session('success_create') }}
        </div>
        @endif

		@auth
		<a class="btn btn-outline-primary btn lg" data-toggle="modal" href="#tambahGejala" role="button">
			Tambah Gejala
		</a><hr>
		@endauth

		<table class="table table-hover table-bordered">
			<thead class="text-light bg-primary">
				<tr>
					<th>Kode Gejala</th>
					<th>Gambar</th>
					<th>Nama Gejala</th>
					
					@auth
					<th>Aksi</th>	
					@endauth
									
				</tr>
			</thead>
			<tbody>
				@foreach ($symptoms as $data)
				<tr>
					<td>{{ $data->kode_gejala }}</td>
					<td>
						<img width="50px" src="{{ asset('storage/'.$data->gambar_gejala) }}">
					</td>
					<td>{{ $data->nama_gejala }}</td>
					@auth
					<td>
						<a class="btn btn-success" data-toggle="modal" href="#hapus{{ $data->id }}" >
							<i class="fa fa-trash"></i>
						</a>

						<a class="btn btn-primary" href="#editG_{{ $data->id }}" data-toggle="modal">
							<i class="fa fa-edit"></i>
						</a>
					</td>
					@endauth
				</tr>
				@endforeach

@foreach ($symptoms as $data)
			<div class="modal fade" id="hapus{{ $data->id }}">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h6>Konfirmasi Hapus</h6>
						</div>
						<div class="modal-body">
							<h5>Apakah Anda Yakin Akan Menghapus Data</h5>
						</div>
						<div class="modal-footer">
                            <form action="/home/gejala/delete/{{ $data->id }}"  method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Ya</button>
                            </form>
							<button type="button" class="btn btn-outline-success" data-dismiss="modal" >Tidak</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="editG_{{ $data->id }}">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h6>Edit Data Gejala</h6>
						</div>
						<div class="modal-body">
                            <form action="/home/gejala/update/{{ $data->id }}" method="POST" role="form" enctype="multipart/form-data">
                                @method('put')
                                @csrf
								<div class="form-group">
									<label for=""><i class="fa fa-code"></i> Kode Gejala</label>
									<input readonly type="text" name="kode_gejala" class="form-control" id="" value="{{ $data->kode_gejala}}">
								</div>				
								<div class="form-group">
									<label for=""> <i class="fa fa-list"></i> Nama Gejala</label>
									<input  type="text" name="nama_gejala" class="form-control" id="" value="{{ $data->nama_gejala}}">
								</div>
                                {{-- If There is an old picture --}}
                                @if($data->gambar_gejala)                                         
                                    <input type="hidden" value="{{ $data->gambar_gejala }}" name="fotoGejalaLama">
                                @endif

                                {{-- New Picture --}}
                                <div class="container form-group">
                                    <label>Ubah Gambar</label>
                                    <input class="form-control" type="file" name="gambar_gejala">
                                </div><hr>

								<button type="submit" class="btn btn-outline-success">Simpan</button>
								<button data-dismiss="modal" class="btn btn-outline-danger">Batal</button>
							</form>
						</div>
						<div class="modal-footer">
							copyright@UniversitasHamzanwadi
						</div>
					</div>
				</div>
			</div>
			</tbody>
		</table>	
	</div>
	@endforeach


@endsection

