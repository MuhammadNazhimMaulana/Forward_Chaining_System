@extends('layouts.main')

@section('container')

<div style="padding:20px;background: white;">
    <h3 class="text-left text-primary">
        TABEL PEYAKIT 
    </h3><hr>
    <a class="btn btn-outline-primary btn lg" data-toggle="modal" href="#tambahPenyakit" role="button">
        Tambah Penyakit
    </a><hr>
    <table class="table table-hover table-bordered">
        <thead class="text-light bg-primary">
            <tr class="text-center">
                <th>Nomor</th>
                <th width="80	">Kode</th>
                <th>Nama Penyakit</th>
                <th width="20%">Penyebab</th>
                <th>Solusi</th>
                <th>Nama Gambar</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>kode></td>
                <td>penyakit</td>
                <td>penyebab</td>
                <td>solusi</td>
                <td>Gambar</td>
                <td>
                    <a href="#g_" data-toggle="modal">
                    <img width="50px" src="{{ url('img/gambarPenyakit') }}">
                    </a>
                </td>
                <td>
                    <a class="btn btn-success" data-toggle="modal" href="#hapus" >
                        <i class="fa fa-trash"></i>
                    </a>

                    <a class="btn btn-primary" data-toggle="modal" href="#editP_" role="button">
                        <i class="fa fa-edit"></i>
                    </a>
                </td> 
            </tr>


            
        <div class="modal fade" id="hapus">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4 >Apkah Anda Yakin Akan Menghapus Data.??</h4> <hr>

                            <a class="btn btn-outline-danger" href="" role="button">Ya</a>
                            <a class="btn btn-outline-info" href="#" data-dismiss="modal" role="button">Tidak</a>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>

<!-- 			<div class="modal fade" id="editP_">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6>Edit Data Gejala</h6>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for=""><i class="fa fa-code"></i> Kode Gejala</label>
                                <input readonly type="text" value="" name="kd_gejala" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
                            </div>				
                            <div class="form-group">
                                <label for=""> <i class="fa fa-list"></i> Nama Gejala</label>
                                <input  value="" type="text" name="nm_gejala" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
                            </div>			
                            <div class="form-group">
                                <label for=""> <i class="fa fa-list"></i> Penyebab Gejala</label>
                                <input  value="" type="text" name="penyebab" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
                            </div>		
                            <div class="form-group">
                                <label for=""> <i class="fa fa-list"></i> Solusi Gejala</label>
                                <input  value="" type="text" name="solusi" class="form-control" id="" placeholder="Contoh:Gxxxxxxx">
                            </div>		<hr>
                        
                            
                        
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
-->

            <div class="modal fade" id="editP_">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Data Penyakit</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for=""><i class="fa fa-code"></i> Kode Penyakit</label>
                                <input type="text" value="" name="kdPenyakit" class="form-control" readonly>
                            </div>				
                            <div class="form-group">
                                <label for=""> <i class="fa fa-list"></i> Nama Penyakit</label>
                                <input value="" type="text" name="nmPenyakit" class="form-control" id="" >
                            </div>						
                            <div class="form-group">
                                <label for=""> <i class="fa fa-list"></i> Penyebab Penyakit</label>
                                <input value="" type="text" name="penyebab" class="form-control" id="" >
                            </div>	
                            <div class="form-group">
                                <label for=""> <i class="fa fa-list"></i> Solusi Penyakit</label>
                                <textarea class="form-control" name="solusi"></textarea>
                            </div>
                                        
                            <div class="form-group">
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
            <div class="modal fade" id="g_">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body text-center">
                            <img width="80%" src="{{ url('img/gambarPenyakit/') }}">
                        </div>
                        <hr>
                        <form method="POST" action="" enctype="multipart/form-data">
                        <input type="hidden" value="" name="kodePenyakit">
                        <div class="container form-group">
                            <label>Ubah Gambar</label>
                            <input class="form-control" type="file" name="gambarPenyakit">
                            
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

