@extends('layouts.main')

@section('container')

<div style="padding:20px;background: white;">
    <h3 class="text-left text-primary">
        TABEL PEYAKIT 
    </h3>

        {{-- Tampilan Berhasil Hapus Data --}}
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
    <hr>
    <a class="btn btn-outline-primary btn lg" data-toggle="modal" href="#tambahPenyakit" role="button">
        Tambah Penyakit
    </a><hr>
    @endauth

    <table class="table table-hover table-bordered">
        <thead class="text-light bg-primary">
            <tr class="text-center">
                <th width="80	">Kode</th>
                <th>Nama Penyakit</th>
                <th width="20%">Penyebab</th>
                <th>Solusi</th>
                <th>Gambar</th>

                @auth
                <th>Aksi</th>
                @endauth
                
            </tr>
        </thead>
        <tbody>
            @foreach ($illness as $data)
            <tr>
                <td>{{ $data->kode_penyakit }}</td>
                <td>{{ $data->nama_penyakit }}</td>
                <td>{{ $data->penyebab_penyakit }}</td>
                <td>{{ $data->solusi_penyakit }}</td>
                <td>
                    {{-- <a href="#g_" data-toggle="modal"> --}}
                    <img width="50px" src="{{ asset('storage/'.$data->gambar_penyakit) }}">
                    {{-- </a> --}}
                </td>
                @auth
                <td>
                    <a class="btn btn-success" data-toggle="modal" href="#hapus{{ $data->id }}" >
                        <i class="fa fa-trash"></i>
                    </a>

                    <a class="btn btn-primary" data-toggle="modal" href="#editP_{{ $data->id }}" role="button">
                        <i class="fa fa-edit"></i>
                    </a>
                </td> 
                @endauth
            </tr>
            @endforeach

        {{-- Modals --}}
        @foreach ($illness as $data)
        <div class="modal fade" id="hapus{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <h4 >Apkah Anda Yakin Akan Menghapus Data.??</h4> <hr>
                            <form action="/home/penyakit/delete/{{ $data->id }}"  method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Ya</button>
                            </form>
                            <a class="btn btn-outline-info" href="#" data-dismiss="modal" role="button">Tidak</a>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="editP_{{ $data->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Data Penyakit</h4>
                        </div>
                        <div class="modal-body">
                            <form action="/home/penyakit/update/{{ $data->id }}" method="POST" role="form" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for=""><i class="fa fa-code"></i> Kode Penyakit</label>
                                    <input type="text" value="{{ $data->kode_penyakit}}" name="kode_penyakit" class="form-control" readonly>
                                </div>				
                                <div class="form-group">
                                    <label for=""> <i class="fa fa-list"></i> Nama Penyakit</label>
                                    <input value="{{ $data->nama_penyakit}}" type="text" name="nama_penyakit" class="form-control" id="" >
                                </div>						
                                <div class="form-group">
                                    <label for=""> <i class="fa fa-list"></i> Penyebab Penyakit</label>
                                    <input value="{{ $data->penyebab_penyakit}}" type="text" name="penyebab_penyakit" class="form-control" id="" >
                                </div>	
                                <div class="form-group">
                                    <label for=""> <i class="fa fa-list"></i> Solusi Penyakit</label>
                                    <textarea class="form-control" name="solusi_penyakit">{{ $data->solusi_penyakit}}</textarea>
                                </div>

                                {{-- If There is an old picture --}}
                                @if($data->gambar_penyakit)                                         
                                    <input type="hidden" value="{{ $data->gambar_penyakit }}" name="fotoPenyakitLama">
                                @endif

                                {{-- New Picture --}}
                                <div class="container form-group">
                                    <label>Ubah Gambar</label>
                                    <input class="form-control" type="file" name="gambar_penyakit">
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
            @endforeach
        </tbody>
    </table>	
</div>



@endsection

