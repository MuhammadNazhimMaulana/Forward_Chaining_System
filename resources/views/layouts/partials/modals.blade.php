
<!-- modal tentang -->
<div class="modal fade" id="tentang">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<center><i class="text-center fa fa-cog fa-spin fa-3x"></i></center>
				<h3 class="modal-title text-center">Tentang</h3>
				<hr class="hologram">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.				
			</div>
			<div class="modal-footer text-center">
			</div>
		</div>
	</div>
</div>

<!-- tambah gejala -->
<div class="modal fade" id="tbh_gejala">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Data Gejala</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for=""><i class="fa fa-code"></i> Kode Gejala</label>
						<input type="text" name="kd_gejala" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
					</div>				
					<div class="form-group">
						<label for=""> <i class="fa fa-list"></i> Nama Gejala</label>
						<input type="text" name="nm_gejala" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
					</div>			
					<!-- <div class="form-group">
						<label for=""> <i class="fa fa-list"></i> Penyebab Gejala</label>
						<input type="text" name="penyebab" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
					</div>		
					<div class="form-group">
						<label for=""> <i class="fa fa-list"></i> Solusi Gejala</label>
						<input type="text" name="solusi" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
					</div>			 -->					
					<div class="form-group">
						<label for=""> <i class="fa fa-camera"></i> Gambar Gejala</label><br>
						<input type="file" class="form=control" name="gb_gejala">
					</div><hr>
				
					
				
					<button type="submit" class="btn btn-outline-success">Simpan</button>
					<button data-dismiss="modal" class="btn btn-outline-danger">Batal</button>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<!-- tambah rule -->
{{-- <div class="modal fade" id="tambah_rule">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Rule</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" enctype="multipart/form-data">	
					<div class="form-group">
						<label for=""><i class="fa fa-code"></i> Kode Gejala</label>
						<select name="gejala" class="form-control">
							<option>--Pilih Kode Gejala</option>

							<?php $gej=$this->db->query("SELECT * FROM tbgejala");
							foreach($gej->result_array() as $g):

							?>
							<option value="<?= $g['kd_gejala']?>"><?= $g['kd_gejala']."-".$g['nm_gejala']  ?></option>
							<?php  endforeach; ?>
						</select>
					</div>	
					<div class="form-group">
						<label for=""><i class="fa fa-link"></i> Link Jika Ya / Tidak</label>
						<select name="ya" class="form-control">
							<option>--Link Jika Ya</option>

							<?php $gej=$this->db->query("SELECT * FROM tbgejala");
							foreach($gej->result_array() as $g):

							?>
							<option  value="<?= $g['kd_gejala']?>"><?= $g['kd_gejala']."-".$g['nm_gejala']  ?></option>
							<?php  endforeach; ?>
							<?php $pen=$this->db->query("SELECT * FROM tbpenyakit");
							foreach($pen->result_array() as $p):

							?>
							<option  value="<?= $p['kodePenyakit']?>"><?= $p['kodePenyakit']."-".$p['namaPenyakit']  ?></option>
							<?php  endforeach; ?>
						</select>
					</div>	
					<div class="form-group">
						<label for=""><i class="fa fa-link"></i> Link Jika Ya / Tidak</label>
						<select name="tidak" class="form-control">
							<option>--Link Jika Tidak</option>
							<option value="-">-</option>
							<?php $gej=$this->db->query("SELECT * FROM tbgejala");
							foreach($gej->result_array() as $g):

							?>
							<option  value="<?= $g['kd_gejala']?>"><?= $g['kd_gejala']."-".$g['nm_gejala']  ?></option>
							<?php  endforeach; ?>
							<?php $pen=$this->db->query("SELECT * FROM tbpenyakit");
							foreach($pen->result_array() as $p):

							?>
							<option  value="<?= $p['kodePenyakit']?>"><?= $p['kodePenyakit']."-".$p['namaPenyakit']  ?></option>
							<?php  endforeach; ?>
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
</div> --}}

<!-- tambah penyakit -->
<div class="modal fade" id="tambahPenyakit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Data Penyakit</h4>
			</div>
			<div class="modal-body">
				<form action="#" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for=""><i class="fa fa-code"></i> Kode Penyakit</label>
						<input type="text" name="kdPenyakit" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
					</div>				
					<div class="form-group">
						<label for=""> <i class="fa fa-list"></i> Nama Penyakit</label>
						<input type="text" name="nmPenyakit" class="form-control" id="" >
					</div>				
					<div class="form-group">
						<label for=""> <i class="fa fa-list"></i> Penyebab Penyakit</label>
						<input type="text" name="penyebab" class="form-control" id="" >
					</div>			
					<div class="form-group">
						<label for=""> <i class="fa fa-list"></i> Solusi Penyakit</label>
						<textarea class="form-control" name="solusi"></textarea>
					</div>
								
					<div class="form-group">
						<label for=""> <i class="fa fa-camera"></i> Gambar Penyakit</label><br>
						<input type="file" class="form-control" name="gambarPenyakit">
					</div><hr>
					<button type="submit" class="btn btn-outline-success"><i class="fa fa-check"></i> Simpan</button>
					<button data-dismiss="modal" class="btn btn-outline-danger">Batal</button>
				</form>
			</div>
			<div class="modal-footer">
				copyright@universitasHamzanwadi
			</div>
		</div>
	</div>
</div>

@auth
<div class="modal fade" id="mod-logout">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			</div>
			<div class="modal-body">
				<h4>
				Apakah Anda Yakin Akan Keluar.?
				</h4>
			</div>
			<div class="modal-footer">
				<form action="/logout" method="POST">
					@csrf
					<button class="btn btn-outline-primary" type="submit">Ya {{ auth()->user()->name }}</button>
				</form>
				<a class="btn text-light btn-danger" href="#" data-dismiss="modal" role="button">Tidak</a>
			</div>
		</div>
	</div>
</div>
@endauth