<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Penyakit, Gejala, Aturan};

class RuleController extends Controller
{
    public function index()
    {
      
        $data = [
            "title" => "Rule",
            "rules" => Aturan::all(),
            "illness" => Penyakit::all(),
            "symptoms" => Gejala::all()
        ];

        return view('CRUD/Rule/index', $data);  
    }

    public function store_rule(Request $request)
    {

        $rule = $request->validate([
            'kode_gejala' => 'required',
            'jika_ya' => 'required',
            'jika_tidak' => 'required'
        ]);

        Aturan::create($rule);

        return redirect('/home/rule')->with('success_create', 'Rule Baru Berhasil Ditambahkan');
    }

    public function update_rule(Request $request, int $id)
    {
        $penyakit = Penyakit::where('id', $id)->first();

        $validateRule = $request->validate([
            'kode_gekala' => 'required',
            'jika_ya' => 'required',
            'jika_tidak' => 'required'
        ]);


        Penyakit::where('id', $penyakit->id)
            ->update($validateRule);

        return redirect('/home/rule')->with('success_update', 'Rule Berhasil Diupdate');
    }

    public function delete_penyakit(Aturan $rule, int $id)
    {
        // Getting specific data
        $rule = $rule->where('id', $id)->first();

        // Delete data from table
        Aturan::where('id', $id)->delete();

        return redirect('/home/rule')->with('danger', 'Rule Berhasil Dihapus');
    }
}
