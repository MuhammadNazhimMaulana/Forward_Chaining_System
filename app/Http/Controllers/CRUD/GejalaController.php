<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gejala;
use Illuminate\Support\Facades\Storage;

class GejalaController extends Controller
{
    public function index()
    {
      
        $data = [
            "title" => "Gejala",
            "symptoms" => Gejala::all()
        ];

        return view('CRUD/Gejala/index', $data);  
    }

    public function store_gejala(Request $request)
    {

        $gejala = $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
            'penyebab_gejala' => 'required',
            'solusi_gejala' => 'required',
            'gambar_gejala' => 'image|file|max:1024'
        ]);

        if ($request->file('gambar_gejala')) {
            $gejala['gambar_gejala'] = $request->file('gambar_gejala')->store('Foto Gejala');
        }

        Gejala::create($gejala);

        return redirect('/home/gejala')->with('success_create', 'Gejala Baru Berhasil Ditambahkan');
    }

    public function update_gejala(Request $request, int $id)
    {
        $gejala = Gejala::where('id', $id)->first();

        $validateGejala = $request->validate([
            'kode_gejala' => 'required',
            'nama_gejala' => 'required',
            'gambar_gejala' => 'image|file|max:1024'
        ]);

        if ($request->file('gambar_gejala')) {
            // Delete old picture
            if ($request->fotoGejalaLama) {
                Storage::delete($request->fotoGejalaLama);
            }
            
            $validateGejala['gambar_gejala'] = $request->file('gambar_gejala')->store('Foto Gejala');
        }

        Gejala::where('id', $gejala->id)
            ->update($validateGejala);

        return redirect('/home/gejala')->with('success_update', 'Gejala Berhasil Diupdate');
    }

    public function delete_gejala(Gejala $gejala, int $id)
    {
        // Getting specific data
        $gejala = $gejala->where('id', $id)->first();

        // Delete picture
        if ($gejala->gambar_gejala) {
            Storage::delete($gejala->gambar_gejala);
        }

        // Delete data from table
        Gejala::where('id', $id)->delete();

        return redirect('/home/gejala')->with('danger', 'Gejala Berhasil Dihapus');
    }
}
