<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Penyakit, Gejala, Aturan};

class RuleController extends Controller
{
    const PER_PAGE = 5;

    public function index()
    {
      
        $data = [
            "title" => "Rule",
            "rules" => Aturan::paginate(self::PER_PAGE),
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
        $rule = Aturan::where('id', $id)->first();

        $validateRule = $request->validate([
            'kode_gejala' => 'required',
            'jika_ya' => 'required',
            'jika_tidak' => 'required'
        ]);


        Aturan::where('id', $rule->id)
            ->update($validateRule);

        return redirect('/home/rule')->with('success_update', 'Rule Berhasil Diupdate');
    }

    public function delete_rule(Aturan $rule, int $id)
    {
        // Getting specific data
        $rule = $rule->where('id', $id)->first();

        // Delete data from table
        Aturan::where('id', $id)->delete();

        return redirect('/home/rule')->with('danger', 'Rule Berhasil Dihapus');
    }
}
