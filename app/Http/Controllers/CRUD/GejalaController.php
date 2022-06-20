<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
      
        $data = [
            "title" => "Gejala",
        ];

        return view('CRUD/Gejala/index', $data);  
    }
}
