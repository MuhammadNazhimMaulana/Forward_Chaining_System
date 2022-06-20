@extends('layouts.main')

@section('container')

<div style="padding:20px;background: white;">
		<h3 class="text-left text-primary"><i class="fa fa-list"></i> TABEL GEJALA</h3><hr>
		<table class="table table-hover table-bordered">
			<thead class="text-light bg-primary">
				<tr>
					<th>Nomor</th>
					<th>Gambar</th>
					<th>Nama Gejala</th>					
					<th>Aksi</th>					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>
						<a href="#" data-toggle="modal">
							<img width="50px" src="#">
						</a>
					</td>
					<td>Gejala</td>
					<td>
						<a class="btn btn-success" data-toggle="modal" href="#hapus" >
							<i class="fa fa-trash"></i>
						</a>

						<a class="btn btn-primary" href="#editG_" data-toggle="modal">
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
							<a href="#" class="btn btn-outline-primary">Ya</a>
							<button type="button" class="btn btn-outline-success" data-dismiss="modal" >Tidak</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="editG_">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h6>Edit Data Gejala</h6>
						</div>
						<div class="modal-body">
							<form action="#" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for=""><i class="fa fa-code"></i> Kode Gejala</label>
									<input readonly type="text" value="" name="kd_gejala" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
								</div>				
								<div class="form-group">
									<label for=""> <i class="fa fa-list"></i> Nama Gejala</label>
									<input  value="" type="text" name="nm_gejala" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
								</div>			
								<!-- <div class="form-group">
									<label for=""> <i class="fa fa-list"></i> Penyebab Gejala</label>
									<input  value="" type="text" name="penyebab" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
								</div>		
								<div class="form-group">
									<label for=""> <i class="fa fa-list"></i> Solusi Gejala</label>
									<input  value="" type="text" name="solusi" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
								</div> -->		<hr>
							
								
							
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

			<!-- update gambar -->

			<div class="modal fade" id="g_">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"></h4>
						</div>
						<div class="modal-body text-center">
							<img width="70%" src="">
						</div>
						<hr>
						<form method="POST" action="" enctype="multipart/form-data">
						<input type="hidden" value="" name="kd_gejala">
						<div class="container form-group">
							<label>Ubah Gambar</label>
							<input class="form-control" type="file" name="gb_gejala">
							
						</div>
						<hr>

						<div class="modal-footer">
							<button class="btn btn-outline-primary" type="submit">Update</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			</tbody>
		</table>	
	</div>



@endsection

