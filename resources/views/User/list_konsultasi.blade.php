@extends('layouts.main_user')

@section('container')

<div style="padding:20px;background: white;">
    <h3 class="text-left text-primary"><i class="fa fa-list"></i> HASIL KONSULTASI</h3><hr>
    <table class="table table-hover table-bordered">
        <thead class="text-light bg-primary">
            <tr>
                <th width="150px">Tanggal</th>
                <th width="200px">Pengguna</th>
                <th>Kesimpulan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultaion as $data)
            <tr>
                <td>{{ $data->waktu }}</td>
                <td>{{ $data->pengguna }}</td>
                <td>{{ $data->kesimpulan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>	
</div>

@endsection

