@extends('layouts.main')

@section('container')

<div style="padding:20px;background: white;">
    <h3 class="text-left text-primary"><i class="fa fa-list"></i> TABEL RULE</h3><hr>
    <hr>

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

        <div class="tittle">
            <a class="btn btn-outline-primary" href="#tambah_rule" data-toggle='modal' role="button">Tambah Rule</a>
        </div>
    <hr>
    <table class="table table-hover table-bordered">
        <thead class="text-light bg-primary">
            <tr>
                <th>Kode Gejala</th>
                <th>Jika Ya</th>
                <th>Jika Tidak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rules as $rule)
            <tr>
                <td>{{ $rule->kode_gejala }}</td>
                <td>{{ $rule->jika_ya }}</td>
                <td>{{ $rule->jika_tidak }}</td>
                <td>
                    <a class="btn btn-success" data-toggle="modal" href="#hapus{{ $rule->id }}" >
                        <i class="fa fa-trash"></i>
                    </a>

                    <a class="btn btn-primary" data-toggle="modal" href="#edit_{{ $rule->id }}" role="button">
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- Pagination --}}
    {{ $rules->links() }}

    {{-- Modals --}}
    @foreach ($rules as $rule)
        <div class="modal fade" id="hapus{{ $rule->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6>Konfirmasi Hapus</h6>
                    </div>
                    <div class="modal-body">
                        <h5>Apakah Anda Yakin Akan Menghapus Data</h5>
                    </div>
                    <div class="modal-footer">
                        <form action="/home/rule/delete/{{ $rule->id }}"  method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Ya</button>
                        </form>
                        <button type="button" class="btn btn-outline-success" data-dismiss="modal" >Tidak</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="edit_{{ $rule->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                <form action="/home/rule/update/{{ $rule->id }}" method="POST" enctype="multipart/form-data">	
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <input type="hidden" value="{{ $rule->id}}" name="id_rule" readonly>
                        <label for="kode_gejala"><i class="fa fa-code"></i> Kode Gejala</label>
						<select name="kode_gejala" class="form-control" value="{{ $rule->kode_gejala}}">
							<option>--Pilih Kode Gejala</option>

                            {{-- Getting Code Of Symptoms --}}
							@foreach ($symptoms as $data)
                                @if($rule->kode_gejala ==  $data->kode_gejala)
                                    <option value="{{  $data->kode_gejala }}" selected>{{  $data->kode_gejala }}</option>
                                @else
                                <option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}</option>
                                @endif
							@endforeach

						</select>
                    </div>	
                    <div class="form-group">
                        <label for=""><i class="fa fa-link"></i> Link Jika Ya</label>
                        <select name="jika_ya" class="form-control">
							<option>--Link Jika Ya</option>

                            {{-- Getting Code Of Symptoms --}}
							@foreach ($symptoms as $data)
                                @if($rule->jika_ya ==  $data->kode_gejala)
                                    <option value="{{  $data->kode_gejala }}" selected>{{  $data->kode_gejala }}</option>
                                @else
                                    <option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}</option>
                                @endif
							@endforeach
                            
                            {{-- Getting Code Of Illness --}}
							@foreach ($illness as $penyakit)
                                @if($rule->jika_ya ==  $penyakit->kode_penyakit)
                                    <option value="{{  $penyakit->kode_penyakit }}" selected>{{  $penyakit->kode_penyakit }}</option>
                                @else
                                    <option value="{{ $penyakit->kode_penyakit }}">{{ $penyakit->kode_penyakit }}</option>
                                @endif
							@endforeach
                        </select>
                    </div>	
                    <div class="form-group">
                        <label for=""><i class="fa fa-link"></i> Link Jika Tidak</label>
                        <select name="jika_tidak" class="form-control">
							<option>--Link Jika Tidak</option>
							<option value="-">-</option>

                            {{-- Getting Code Of Symptoms --}}
							@foreach ($symptoms as $data)
                                @if($rule->jika_tidak ==  $data->kode_gejala)
                                    <option value="{{  $data->kode_gejala }}" selected>{{  $data->kode_gejala }}</option>
                                @else
                                    <option value="{{ $data->kode_gejala }}">{{ $data->kode_gejala }}</option>
                                @endif
							@endforeach

                            {{-- Getting Code Of Illness --}}
							@foreach ($illness as $penyakit)
                                @if($rule->jika_tidak ==  $penyakit->kode_penyakit)
                                    <option value="{{  $penyakit->kode_penyakit }}" selected>{{  $penyakit->kode_penyakit }}</option>
                                @else
                                    <option value="{{ $penyakit->kode_penyakit }}">{{ $penyakit->kode_penyakit }}</option>
                                @endif
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
        </tbody>
    </table>	
</div>
@endforeach

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

