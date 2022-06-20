@extends('layouts.main')

@section('container')

<div style="padding:20px;background: white;">
    <h3 class="text-left text-primary"><i class="fa fa-list"></i> TABEL GEJALA</h3><hr>
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


@endsection

