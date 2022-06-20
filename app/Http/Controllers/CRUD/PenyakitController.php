<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
      
        $data = [
            "title" => "Penyakit",
        ];

        return view('CRUD/Penyakit/index', $data);  
    }
}
