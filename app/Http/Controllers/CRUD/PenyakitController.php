<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Storage;

class PenyakitController extends Controller
{
    public function index()
    {
      
        $data = [
            "title" => "Penyakit",
            "illness" => Penyakit::all()
        ];

        return view('CRUD/Penyakit/index', $data);  
    }

    public function store_penyakit(Request $request)
    {

        $penyakit = $request->validate([
            'kode_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'penyebab_penyakit' => 'required',
            'solusi_penyakit' => 'required',
            'gambar_penyakit' => 'image|file|max:1024'
        ]);

        if ($request->file('gambar_penyakit')) {
            $penyakit['gambar_penyakit'] = $request->file('gambar_penyakit')->store('Foto Penyakit');
        }

        Penyakit::create($penyakit);

        return redirect('/home/penyakit')->with('success_create', 'Penyakit Baru Berhasil Ditambahkan');
    }

    public function update_penyakit(Request $request, int $id)
    {
        $penyakit = Penyakit::where('id', $id)->first();

        $validatePenyakit = $request->validate([
            'kode_penyakit' => 'required',
            'nama_penyakit' => 'required',
            'penyebab_penyakit' => 'required',
            'solusi_penyakit' => 'required',
            'gambar_penyakit' => 'image|file|max:1024'
        ]);

        if ($request->file('gambar_penyakit')) {
            // Delete old picture
            if ($request->fotoPenyakitLama) {
                Storage::delete($request->fotoPenyakitLama);
            }
            
            $validatePenyakit['gambar_penyakit'] = $request->file('gambar_penyakit')->store('Foto Penyakit');
        }

        Penyakit::where('id', $penyakit->id)
            ->update($validatePenyakit);

        return redirect('/home/penyakit')->with('success_update', 'Penyakit Berhasil Diupdate');
    }

    public function delete_penyakit(Penyakit $penyakit, int $id)
    {
        // Getting specific data
        $penyakit = $penyakit->where('id', $id)->first();

        // Delete picture
        if ($penyakit->gambar_penyakit) {
            Storage::delete($penyakit->gambar_penyakit);
        }

        // Delete data from table
        Penyakit::where('id', $id)->delete();

        return redirect('/home/penyakit')->with('danger', 'Penyakit Berhasil Dihapus');
    }
}
